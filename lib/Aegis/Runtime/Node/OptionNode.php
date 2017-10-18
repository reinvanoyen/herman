<?php

namespace Aegis\Runtime\Node;

use Aegis\CompilerInterface;
use Aegis\Node;

/**
 * Class OptionNode
 * @package Aegis\Runtime\Node
 * @author Rein Van Oyen <reinvanoyen@gmail.com>
 */
class OptionNode extends Node
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function compile(CompilerInterface $compiler)
    {
    }
}
