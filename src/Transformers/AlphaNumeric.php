<?php
namespace Stringizer\Transformers;

/**
 * AlphaNumeric - Checks if value is contains alphanumeric values only.
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class AlphaNumeric extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        if (ctype_alnum($this->getValue())) {
            return true;
        } else {
            return false;
        }
    }
}
