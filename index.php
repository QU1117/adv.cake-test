<?php

require __DIR__.'/vendor/autoload.php';

use AdvCake\Classes\StringReverserFactory;

$stringManipulator = (new StringReverserFactory())->createStringManipulator();

echo $stringManipulator->reverseString($argv[1]);
