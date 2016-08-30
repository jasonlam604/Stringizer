<?php
namespace Stringizer\Transformers;

/**
 * ChompRight - Removes suffix from start of string.
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class ChompRight extends Transformer implements TransformerInterface
{

    private $suffix;

    public function __construct($value, $suffix)
    {
        parent::__construct($value);
        $this->suffix = $suffix;
    }

    public function execute()
    {
        $str = $this->getValue();

        if (mb_substr($this->getValue(), mb_strlen($this->getValue()) - mb_strlen($this->suffix), mb_strlen($this->suffix)) == $this->suffix) {
            $str = mb_substr($str, 0, mb_strlen($str) - mb_strlen($this->suffix));
        }

        return $str;
    }
}
