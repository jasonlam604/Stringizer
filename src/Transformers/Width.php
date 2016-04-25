<?php
namespace Stringizer\Transformers;

/**
 * Width, determine the width of the string this is different then length for multibyte strings
 *
 * Reference http://php.net/manual/en/function.mb-strwidth.php
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class Width extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    /**
     * Width of string
     */
    public function execute()
    {
        return mb_strwidth($this->getValue());
    }
}