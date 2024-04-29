<?php

namespace AdvCake\Classes;

use AdvCake\Interfaces\StringReverserInterface;

class StringReverserFactory extends AbstractStringManipulatorFactory
{
    public function createStringManipulator(): StringReverserInterface
    {
        return new StringReverser();
    }
}
