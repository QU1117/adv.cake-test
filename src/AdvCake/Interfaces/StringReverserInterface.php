<?php

namespace AdvCake\Interfaces;

/**
 * Интерфейс, описывающий сигнатуры методов изменения порядка символов в
 * строках на обратный.
 */
interface StringReverserInterface
{
    /**
     * Изменяет порядок символов в строке на обратный.
     * @param string $sentence Строка, порядок символов которой нужно поменять.
     * @return string Строка с измененным порядком символов.
     */
    public function reverseString(string $sentence): string;
}
