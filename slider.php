<?php

namespace persianyii\slider;
require_once('GifCreator.php');
/**
 * This is just an example.
 */
class slider extends \yii\base\Widget
{
// Instanciate the class (uses default options with the addition of width/height specified)
$gif = new GifCreator(0, 2, array(-1, -1, -1), 600, 400);

// Add each frame to the animation
$gif->addFrame(file_get_contents('images/1.jpg'), 200, true);
$gif->addFrame(file_get_contents('images/2.jpg'), 200, true);
$gif->addFrame(file_get_contents('images/3.jpg'), 200, true);
$gif->addFrame(file_get_contents('images/4.jpg'), 200, true);
// Disposal set to 0 for this frame so that following frame becomes overlay
$gif->addFrame(file_get_contents('images/5.jpg'), 200, true, 0, 0, 0);
// Overlay frame
$gif->addFrame(file_get_contents('images/6.gif'), 200, false, 150, 150, 2, array(255, 255, 255));

// Output the animated gif
header('Content-type: image/gif');
echo $gif->getAnimation();
}


