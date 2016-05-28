<?php
namespace Stringizer\Transformers;

/**
 * Decimal - Checks if value is contains decimal value, whole numbers are considered valid.
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class Decimal extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        if (filter_var($this->getValue(), FILTER_VALIDATE_FLOAT) !== false) {
            return true;
        } else {
            return false;
        }
    }
}
