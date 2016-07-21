<?php
namespace Stringizer\Transformers;

/**
 * Base64Check - Checks if value is a valid Base64.
 *
 * Sourced from http://php.net/manual/en/function.base64-decode.php
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class Base64Check extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        if (preg_match('%^[a-zA-Z0-9/+]*={0,2}$%', $this->getValue())) {
            return true;
        } else {
            return false;
        }
    }
}
