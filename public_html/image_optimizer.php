<?php
function compressImage($source_url, $destination_url, $quality) {
    //$quality :: 0 - 100
    $info = getimagesize($source_url);

    if ($info['mime'] == 'image/jpeg')
    {
        $image = imagecreatefromjpeg($source_url);
        //save file
        imagejpeg($image, $destination_url, $quality);//ranges from 0 (worst quality, smaller file) to 100 (best quality, biggest file). The default is the default IJG quality 
        //Free up memory
        imagedestroy($image);
    }
    elseif ($info['mime'] == 'image/png')
    {
        $image = imagecreatefrompng($source_url);

        imageAlphaBlending($image, true);
        imageSaveAlpha($image, true);

        /* chang to png qulity */
        $png_quality = 9 - (($quality * 9 ) / 100 );
        imagePng($image, $destination_url, $png_quality);//Compression level: from 0 (no compression) to 9.
        //Free up memory
        imagedestroy($image);
    }

    //return destination file
    return $destination_url;
}

compressImage("/home/sites/shire-replagal-wordpress/public_html/wp-content/uploads/2017/06/replagal_graphs_for_website5.jpg", "/home/sites/shire-replagal-wordpress/public_html/wp-content/uploads/2017/06/optimized-images/test-image.jpg", 90);

echo "Done!\n";
