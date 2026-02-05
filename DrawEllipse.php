<?php
    $nEllipseWidth = intval($_POST["EllipseWidth"]);
    $nEllipseHeight = intval($_POST["EllipseHeight"]);
    $xc = $nEllipseWidth / 2;
    $yc = $nEllipseHeight / 2;
    $image1 = imagecreate($nEllipseWidth, $nEllipseHeight);
    $blackColor = imagecolorallocate($image1,0,0,0);
    imagesetthickness( $image1,30);
    imagefill($image1,0,0, $blackColor);
    $redColor = imagecolorallocate($image1, 255, 0, 0);
    $yellowColor = imagecolorallocate($image1, 255, 255, 0);
    imagefilledellipse($image1,$xc,$yc, $nEllipseWidth, $nEllipseHeight, $yellowColor);
    imageellipse($image1,$xc,$yc,$nEllipseWidth - 1,$nEllipseHeight - 1, $redColor);
    header("Content-type:image/png");
    imagepng($image1);
    imagedestroy($image1);
?>
