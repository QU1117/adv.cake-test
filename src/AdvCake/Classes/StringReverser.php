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
        $caseRegistry = [];

        for ($i = 0; $i < mb_strlen($sentence); $i++) {
            $char = mb_substr($sentence, $i, 1);

            if (mb_strtolower($char) === $char) {
                $caseRegistry[$i] = false;
            } else if (mb_strtoupper($char) === $char) {
                $caseRegistry[$i] = true;
            }
        }

        $chars = mb_str_split($sentence);
        $reversedString = implode('', array_reverse($chars));

        $result = '';

        for ($i = 0; $i < mb_strlen($reversedString); $i++) {
            $char = mb_substr($reversedString, $i, 1);

            if ($caseRegistry[$i]) {
                $result .= mb_convert_case($char, MB_CASE_UPPER);
            } else $result .= mb_convert_case($char, MB_CASE_LOWER);
        }

        return $result;
    }
}
