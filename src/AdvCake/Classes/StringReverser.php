<?php

namespace AdvCake\Classes;

use AdvCake\Interfaces\StringReverserInterface;

/**
 * Класс, реализующий функционал, связанный с перестановкой символов в строке в
 * обратном порядке.
 */
class StringReverser implements StringReverserInterface
{
    public function reverseString(string $sentence): string
    {
        $sizeRegistry = [];

        for ($i = 0; $i < strlen($sentence); $i++) {
            if ($sentence[$i] === strtoupper($sentence[$i])) {
                $sizeRegistry[$i] = true;
            } else $sizeRegistry[$i] = false;
        }

        $reversedString = strrev($sentence);

        for ($i = 0; $i < strlen($reversedString); $i++) {
            if ($sizeRegistry[$i]) {
                $reversedString[$i] = strtoupper($reversedString[$i]);
            } else $reversedString[$i] = strtolower($reversedString[$i]);
        }

        return $reversedString;
    }
}
