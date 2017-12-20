<?php
namespace Stringizer\Transformers;

/**
 * Hash - Checks if value is contains a valid hash such MD5
 *
 * Based off isHash in https://github.com/asaskevich/govalidator/blob/master/validator.go
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Hash extends Transformer implements TransformerInterface
{

    private $len;

    public function __construct($value, $hashAlgorithm)
    {
        parent::__construct($value);

        $this->len = 0;

        $algo = mb_strtolower($hashAlgorithm);

        if ($algo == "crc32" || $algo == "crc32b") {
            $this->len = "8";
        } elseif ($algo == "md5" || $algo == "md4" || $algo == "ripemd128" || $algo == "tiger128") {
            $this->len = "32";
        } elseif ($algo == "sha1" || $algo == "ripemd160" || $algo == "tiger160") {
            $this->len = "40";
        } elseif ($algo == "tiger192") {
            $this->len = "48";
        } elseif ($algo == "sha256") {
            $this->len = "64";
        } elseif ($algo == "sha384") {
            $this->len = "96";
        } elseif ($algo == "sha512") {
            $this->len = "128";
        } else {
            return false;
        }
    }

    public function execute()
    {
        $pattern = '/^[0-9a-f]{'. $this->len .'}$/i';

        if (preg_match($pattern, $this->getValue())) {
            return true;
        } else {
            return false;
        }
    }
}
