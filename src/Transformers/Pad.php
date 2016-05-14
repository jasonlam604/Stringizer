<?php
namespace Stringizer\Transformers;

/**
 * Pad - Pad string left side, right side or both sides
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class Pad extends Transformer implements TransformerInterface
{

    private $padValue;

    private $padAmount;

    private $padType;

    public function __construct($value, $padValue, $padAmount, $padType)
    {
        parent::__construct($value);

        if ($padType != STR_PAD_RIGHT && $padType != STR_PAD_LEFT && $padType != STR_PAD_BOTH) {
            throw new \InvalidArgumentException("Invalid pad side option");
        }

        $this->padValue = $padValue;

        $this->padType = $padType;

        $this->padAmount = $padAmount;
    }

    /**
     * Pad
     */
    public function execute()
    {
        return $this->mbStrPad($this->getValue(), $this->padAmount, $this->padValue, $this->padType);
    }

    /**
     * Code from http://php.net/manual/en/function.str-pad.php
     */
    private function mbStrPad($str, $pad_len, $pad_str = ' ', $dir = STR_PAD_RIGHT, $encoding = NULL)
    {
        $encoding = $encoding === NULL ? mb_internal_encoding() : $encoding;
        $padBefore = $dir === STR_PAD_BOTH || $dir === STR_PAD_LEFT;
        $padAfter = $dir === STR_PAD_BOTH || $dir === STR_PAD_RIGHT;
        $pad_len -= mb_strlen($str, $encoding);
        $targetLen = $padBefore && $padAfter ? $pad_len / 2 : $pad_len;
        $strToRepeatLen = mb_strlen($pad_str, $encoding);
        $repeatTimes = ceil($targetLen / $strToRepeatLen);
        $repeatedString = str_repeat($pad_str, max(0, $repeatTimes)); // safe if used with valid utf-8 strings
        $before = $padBefore ? mb_substr($repeatedString, 0, floor($targetLen), $encoding) : '';
        $after = $padAfter ? mb_substr($repeatedString, 0, ceil($targetLen), $encoding) : '';
        return $before . $str . $after;
    }
}
