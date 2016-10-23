<?php
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 24.10.16
 * Time: 0:45
 */

require 'vendor/autoload.php';

use Joker\MakeAJoke;
use Gregwar\Tex2png\Tex2png;


$joker = new MakeAJoke();
//echo $joker->tellMeARandomJoke(false, "Advanced PHP", "Programmer") . "\n";



echo "Generating sum.png...\n";

Tex2png::create('\sum_{i = 0}^{i = n} \frac{i}{2}', 300)
    ->generate();