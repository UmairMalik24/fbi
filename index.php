?php
//include the functions file

<!-- require_once(__DIR__ . "/funtions.php");

if (!empty($_GET['url'])) {

    //get data for URL
    $data = url_get_contents($_GET['url']);


    //get the video links and title
    $hdlink = hdLink($data);
    $sdlink = sdLink($data);
    $mp3link = mp3Link($data);
    $title = getTitle($data);




        $hd = curl_init($hdlink);

        curl_setopt($hd, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($hd, CURLOPT_HEADER, TRUE);
        curl_setopt($hd, CURLOPT_NOBODY, TRUE);

        $data = curl_exec($hd);
        $hdsize = curl_getinfo($hd, CURLINFO_CONTENT_LENGTH_DOWNLOAD);       

        curl_close($hd);

        $sd = curl_init($sdlink);

        curl_setopt($sd, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($sd, CURLOPT_HEADER, TRUE);
        curl_setopt($sd, CURLOPT_NOBODY, TRUE);

        $data = curl_exec($sd);
        $sdsize = curl_getinfo($sd, CURLINFO_CONTENT_LENGTH_DOWNLOAD);
        curl_close($sd);

    
    if ($sdlink != "" && $hdlink != "" ) 
    {
        //Get both the SD and HD video quality
        //$download_button = '<a target="_blank" href="'.$sdlink.'" class="btn btn-lg btn-block btn-success"> (MP4) Download SD Video</a>';
        //$download_button .= '<a style="top:70%" target="_blank" href="'.$hdlink.'" class="btn btn-block btn-lg btn-success"> (MP4) Download HD Video</a>';
        
        
        
        
        
        
        
        
        echo json_encode( array(
            'hdlink' => str_replace('\/','/',$hdlink),
            'hdsize' => $hdsize,
            'sdlink' => $sdlink,
            'sdsize' => $sdsize,
            'mp3link' => mp3Link($data),
            'title' => $title
            )
        );
    }


    elseif($sdlink != ""){
        //Get the SD video alone
        //$download_button = '<a target="_blank" href="'.$sdlink.'" class="btn btn-lg btn-block btn-success"> (MP4) Download SD Video</a>';

        echo json_encode( array(
            'hdlink' => null,
            'hdsize' => $hdsize,
            'sdlink' => $sdlink,
            'sdsize' => $sdsize,
            'mp3link' => mp3Link($data),
            'title' => $title
            )
        );

    }
    elseif($hdlink != ""){
    //Get the HD video alone
    // $download_button = '<a target="_blank" href="'.$hdlink.'" class="btn btn-lg btn-block btn-success"> (MP4) Download HD Video</a>';
        echo json_encode( array(
        'hdlink' => str_replace('\/','/',$hdlink),
            'hdsize' => $hdsize,
            'sdlink' => null,
            'sdsize' => $sdsize,
            'mp3link' => mp3Link($data),
            'title' => $title
        )
    );

    } 
    else {
    //Return blank if there is no video
    $download_button = '';
    }
} -->

echo "HELLO WORLD";
?>
