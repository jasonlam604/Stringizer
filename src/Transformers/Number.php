<?php
namespace Stringizer\Transformers;

/**
 * Number - Checks if value is a whole number, can be negative but can not be a decimal number
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class Number extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        if (filter_var($this->getValue(), FILTER_VALIDATE_INT) !== FALSE) {
            return true;
        } else {
            return false;
        }
    }
}
