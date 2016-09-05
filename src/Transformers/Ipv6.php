<?php
namespace Stringizer\Transformers;

/**
 * Ipv6 - Checks if value is a valid IP, IPv6.
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Ipv6 extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        if (filter_var($this->getValue(), FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) !== FALSE) {
            return true;
        } else {
            return false;
        }
    }
}
