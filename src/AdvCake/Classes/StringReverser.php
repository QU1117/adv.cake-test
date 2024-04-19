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

        for ($i = 0; $i < mb_strlen($sentence, mb_internal_encoding()); $i++) {
            $char = mb_substr($sentence, $i, 1, mb_internal_encoding());

            if (mb_strtolower($char, mb_internal_encoding()) === $char) {
                $caseRegistry[$i] = false;
            } else if (mb_strtoupper($char, mb_internal_encoding()) === $char) {
                $caseRegistry[$i] = true;
            }
        }

        $chars = mb_str_split($sentence, 1, mb_internal_encoding());
        $reversedString = implode('', array_reverse($chars));

        $result = '';

        for ($i = 0;
             $i < mb_strlen($reversedString, mb_internal_encoding());
             $i++)
        {
            $char = mb_substr($reversedString, $i, 1, mb_internal_encoding());

            if ($caseRegistry[$i]) {
                $result .= mb_convert_case(
                    $char,
                    MB_CASE_UPPER,
                    mb_internal_encoding()
                );
            } else $result .= mb_convert_case(
                $char,
                MB_CASE_LOWER,
                mb_internal_encoding());
        }

        return $result;
    }
}
