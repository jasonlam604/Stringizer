<?php
namespace Stringizer\Transformers;

/**
 * Random - Generates random value, alpha, numeric or alphanumeric.
 *
 * Random String example from http://stackoverflow.com/questions/4356289/php-random-string-generator
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class Random implements TransformerInterface
{

    public static $RANDOM_ALPHA = 1;

    public static $RANDOM_ALPHA_NUMERIC = 2;

    public static $RANDOM_NUMERIC = 3;

    private $genType;

    private $length;

    public function __construct($type, $length)
    {
        $this->genType = $type;
        $this->length = $length;
    }

    public function execute()
    {
        return $this->generateRandomString();
    }

    private function generateRandomString()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        if ($this->genType == self::$RANDOM_ALPHA) {
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        } elseif ($this->genType == self::$RANDOM_NUMERIC) {
            $characters = '0123456789';
        }

        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $this->length; $i ++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
