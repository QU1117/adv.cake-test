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

    test(
        "Переворачивает строку 'houSe'",
        function () use ($stringManipulator) {
            $originalString = 'houSe';
            $reversedString = 'esuOh';

            expect($stringManipulator->reverseString($originalString))
                ->toBe($reversedString);
        }
    );

    test(
        "Переворачивает строку 'домИК'",
        function () use ($stringManipulator) {
            $originalString = 'домИК';
            $reversedString = 'кимОД';

            expect($stringManipulator->reverseString($originalString))
                ->toBe($reversedString);
        }
    );

    test(
        "Переворачивает строку 'elEpHant'",
        function () use ($stringManipulator) {
            $originalString = 'elEpHant';
            $reversedString = 'tnAhPele';

            expect($stringManipulator->reverseString($originalString))
                ->toBe($reversedString);
        }
    );

    test(
        "Переворачивает строку 'Зима'",
        function () use ($stringManipulator) {
            $originalString = 'Зима';
            $reversedString = 'Амиз';

            expect($stringManipulator->reverseString($originalString))
                ->toBe($reversedString);
        }
    );

    test(
        "Переворачивает строку \"is 'cold' now\"",
        function () use ($stringManipulator) {
            $originalString = "is 'cold' now";
            $reversedString = "si 'dloc' won";

            expect($stringManipulator->reverseString($originalString))
                ->toBe($reversedString);
        }
    );

    test(
        "Переворачивает строку 'это «Так» \"просто\"'",
        function () use ($stringManipulator) {
            $originalString = 'это «Так» "просто"';
            $reversedString =  'отэ «Кат» "отсорп"';

            expect($stringManipulator->reverseString($originalString))
                ->toBe($reversedString);
        }
    );

    test(
        "Переворачивает строку 'third-part'",
        function () use ($stringManipulator) {
            $originalString = 'third-part';
            $reversedString = 'driht-trap';

            expect($stringManipulator->reverseString($originalString))
                ->toBe($reversedString);
        }
    );

    test(
        "Переворачивает строку 'can`t'",
        function () use ($stringManipulator) {
            $originalString = 'can`t';
            $reversedString = 'nac`t';

            expect($stringManipulator->reverseString($originalString))
                ->toBe($reversedString);
        }
    );

    test(
        "Переворачивает строку '☆☆Hello, woRlD!~+'",
        function () use ($stringManipulator) {
            $originalString = '☆☆Hello, woRlD!~+';
            $reversedString = '☆☆Olleh, dlRoW!~+';

            expect($stringManipulator->reverseString($originalString))
                ->toBe($reversedString);
        }
    );
});
