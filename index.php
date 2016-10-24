<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 24.10.16
 * Time: 0:45
 */

require 'vendor/autoload.php';

use Joker\MakeAJoke;

$joker = new MakeAJoke();
$image = new \NMC\ImageWithText\Image(dirname(__FILE__) . '/media/gr-cat.jpg');
$text1 = new \NMC\ImageWithText\Text($joker->tellMeARandomJoke(false, "Advanced PHP", "Programmer"), 10, 45);
$text1->align = 'center';
$text1->color = 'FFFFFF';
$text1->font = dirname(__FILE__) . '/media/consolab.ttf';
$text1->lineHeight = 36;
$text1->size = 18;
$text1->startX = 80;
$text1->startY = 580;
$image->addText($text1);
$image->render(dirname(__FILE__) . '/media/cat.jpg');
?>

<html>
<head>
    <title>HomeWork_2</title>
</head>
<body>
    <img src="/media/cat.jpg">
</body>
</html>