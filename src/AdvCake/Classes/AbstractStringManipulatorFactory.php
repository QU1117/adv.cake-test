<?php

namespace AdvCake\Classes;

use AdvCake\Interfaces\StringReverserInterface;

abstract class AbstractStringManipulatorFactory
{
    abstract function createStringManipulator(): StringReverserInterface;
}
