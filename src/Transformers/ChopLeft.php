<?php
namespace Stringizer\Transformers;

/**
 * ChopLeft - Removes prefix from start of string.
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class ChopLeft extends Transformer implements TransformerInterface
{

    private $prefix;

    public function __construct($value, $prefix)
    {
        parent::__construct($value);
        $this->prefix = $prefix;
    }

    public function execute()
    {
        $str = $this->getValue();

        if (mb_substr($this->getValue(), 0, mb_strlen($this->prefix)) == $this->prefix) {
            $str = mb_substr($this->getValue(), mb_strlen($this->prefix));
        }

        return $str;
    }
}
