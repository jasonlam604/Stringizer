<?php
namespace Stringizer\Transformers;

/**
 * Hashcode, determine the hashcode of a string, algo matches the hashCode method available in a Java String class
 *
 * Credit goes to this post http://stackoverflow.com/questions/8804875/php-internal-hashcode-function
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class HashCode extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    /**
     * Get Hashcode
     */
    public function execute()
    {
        return $this->hashCode($this->getValue());
    }

    private function hashCode($s)
    {
        $h = 0;
        $len = strlen($s);

        for ($i = 0; $i < $len; $i ++) {
            $h = $this->overflow32(31 * $h + ord($s[$i]));
        }

        return $h;
    }

    private function overflow32($v)
    {
        $v = $v % 4294967296;

        if ($v > 2147483647)
            return $v - 4294967296;
        elseif ($v < - 2147483648)
            return $v + 4294967296;
        else
            return $v;
    }
}