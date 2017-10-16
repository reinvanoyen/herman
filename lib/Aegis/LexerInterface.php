<?php

namespace Aegis;

/**
 * Interface LexerInterface
 * @package Aegis
 * @author Rein Van Oyen <reinvanoyen@gmail.com>
 */
interface LexerInterface
{
    /**
     * @param string $string
     * @return TokenStream
     */
    public function tokenize(string $string) : TokenStream;
}
