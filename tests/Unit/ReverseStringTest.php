<?php

use AdvCake\Classes\StringReverser;

describe('Тестирование инверсии строк', function () {
    $stringManipulator = new StringReverser();

    test(
        "Переворачивает строку 'Cat'",
        function () use ($stringManipulator) {
            $originalString = 'Cat';
            $reversedString = 'Tac';

            expect($stringManipulator->reverseString($originalString))
                ->toBe($reversedString);
        }
    );

    test(
        "Переворачивает строку 'Мышь'",
        function () use ($stringManipulator) {
            $originalString = 'Мышь';
            $reversedString = 'Ьшым';

            expect($stringManipulator->reverseString($originalString))
                ->toBe($reversedString);
        }
    );
});
