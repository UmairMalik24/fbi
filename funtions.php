<?php
//function to pass facebook video url through curl


function url_get_contents($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, "Location: /index.php?=");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.47 Safari/537.36');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;   
}
//function to get the HD quality video link
function hdLink($curl_content)
{
    $regex = '/hd_src:"([^"]+)"/';
    if (preg_match($regex, $curl_content, $match)) {
        return $match[1];
    } 
    else 
    {
        return $regex;
    }
}

//function to get the SD quality video link
function sdLink($curl_content)
{
    $regex = '/sd_src_no_ratelimit:"([^"]+)"/';
    if (preg_match($regex, $curl_content, $match1)) {
        return $match1[1];
    } 
    else {
        return;
    }
}
function mp3Link($curl_content)
{
    $regex = '/mp3_src_no_ratelimit:"([^"]+)"/';
    if (preg_match($regex, $curl_content, $match2)) {
    return $match2[1];
    } 
    else {
        return;
    }
}

//function to decode the facebook video title
function cleanStr($str)
{
    return html_entity_decode(strip_tags($str), ENT_QUOTES, 'UTF-8');
}

//function to get the facebook video title
function getTitle($curl_content)
{
    $title = null;
    if (preg_match('/h2 class="uiHeaderTitle"?[^>]+>(.+?)<\/h2>/', $curl_content, $matches)) {
    $title = $matches[1];
    } 
    elseif (preg_match('/title id="pageTitle">(.+?)<\/title>/', $curl_content, $matches)) {
    $title = $matches[1];
    }
    return cleanStr($title);
}