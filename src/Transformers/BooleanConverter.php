<?php
namespace Stringizer\Transformers;

/**
 * BooleanConverter - Converts a a logical truth string to boolean.
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class BooleanConverter extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        $val = $this->getValue();

        if (is_bool($val) === true) {
            // value is a boolean, return the contained boolean valu
            return $val;

        } else if (is_string($val)) {

           // value is string return string if it contains 'yes', 'true' or 'on' (case insensitive)
           $val = mb_strtolower($val);
           if ($val == 'true' || $val == 'yes' || $val == 'on' || $val == '1') {
              return true;
           } else {
              return false;
           }

        } else if ($val == 1) {
              // only numeric value that will return boolean 'true' is 1
              return true;
        } else {
              // Everything is boolean 'false'
              return false;
        }
    }
}
