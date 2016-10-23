<?php
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 24.10.16
 * Time: 0:45
 */

require 'vendor/autoload.php';

use Joker\MakeAJoke;
$joker = new MakeAJoke();
echo $joker->tellMeARandomJoke(false, "Advanced PHP", "Programmer") . "\n";