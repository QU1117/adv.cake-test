<?php

require __DIR__.'/vendor/autoload.php';

use AdvCake\Classes\StringReverser;

$stringReverser = new StringReverser();

echo $stringReverser->reverseString($argv[1]);
