<?php
namespace Stringizer\Transformers;

/**
 * HexDecimal - Checks if value is hexdecimal
 *
 * Solution from http://stackoverflow.com/questions/2643157/php-simple-validate-if-string-is-hex
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class HexDecimal extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        if (ctype_xdigit($this->getValue())) {
            return true;
        } else {
            return false;
        }
    }
}
