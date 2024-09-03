<?php
require 'path/to/PHPNoise/autoload.php';  // Adjust this path as needed
use PHPNoise\NoiseGenerator;

// Generate a noise image with dimensions 800x600
$noise = new NoiseGenerator();
$image = $noise->generateNoiseImage(800, 600);  // Adjust the size as necessary

// Output the image as PNG
header('Content-Type: image/png');
imagepng($image);
imagedestroy($image);
?>