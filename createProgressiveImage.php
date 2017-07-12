
<?php 
$image = new Imagick('img2.jpg');

$image->setInterlaceScheme(Imagick::INTERLACE_PLANE);

$image->writeImage('progressive2.jpg');
