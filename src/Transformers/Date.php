<?php
namespace Stringizer\Transformers;

/**
 * Date - Checks if value is valid date based on the PHP function strtotime.
 *
 * Note, assertion that date_default_timezone_set is set, It is not safe to rely on the system's timezone settings.
 *
 * ie: date_default_timezone_set('America/Vancouver');
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class Date extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        if (strtotime($this->getValue()) !== FALSE) {
            return true;
        } else {
            return false;
        }
    }
}
