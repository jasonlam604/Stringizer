<?php
namespace Stringizer\Transformers;

/**
 * Email - Checks if value is a valid email
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class Email extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        if (filter_var($this->getValue(), FILTER_VALIDATE_EMAIL) !== FALSE) {
            return true;
        } else {
            return false;
        }
    }
}
