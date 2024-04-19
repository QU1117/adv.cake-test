<?php

namespace AdvCake\Interfaces;

/*
 * Интерфейс, описывающий сигнатуры методов изменения порядка символов в
 * строках на обратный.
 */
interface StringReverserInterface
{
    public function reverseString(string $sentence): string;
}
