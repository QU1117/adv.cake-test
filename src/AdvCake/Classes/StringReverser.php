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

        preg_match_all(
            '/\s+|[\pL\pN\']+|[^\\pL\\pN\s]/u',
            $sentence,
            $matches
        );
        $words = $matches[0];

        $result = '';

        foreach($words as $word) {
            $chars = mb_str_split($word);
            $reversedString = implode('', array_reverse($chars));

            if (preg_match('/^\pL+$/u', $reversedString)) {
                for ($i = 0; $i < mb_strlen($reversedString); $i++) {
                    $char = mb_substr($reversedString, $i, 1);

                    if ($caseRegistry[$i]) {
                        $result .= mb_convert_case($char, MB_CASE_UPPER);
                    } else $result .= mb_convert_case($char, MB_CASE_LOWER);
                }
            } else $result .= $reversedString;
        }

        return $result;
    }
}
