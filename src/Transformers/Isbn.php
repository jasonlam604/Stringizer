<?php
namespace Stringizer\Transformers;

/**
 * ISBN - Determines if value is valid ISBN10 or ISBN13
 *
 * Solution from StackOverflow https://stackoverflow.com/questions/14095778/regex-differentiating-between-isbn-10-and-isbn-13
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2017 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Isbn extends Transformer implements TransformerInterface
{

    private $isCheckIsbn13;

    public function __construct($value)
    {
        parent::__construct($value);

        $this->isCheckIsbn13 = false;
    }

    public function checkIsbn13()
    {
        $this->isCheckIsbn13 = true;
    }

    public function execute()
    {
        if ($this->isCheckIsbn13) {
            if ($this->findIsbn($this->getValue()) == 2)
                return true;
            else
                return false;
        } else {
            if ($this->findIsbn($this->getValue()) == 1)
                return true;
            else
                return false;
        }
    }

    private function findIsbn($str)
    {
        $regex = '/\b(?:ISBN(?:: ?| ))?((?:97[89])?\d{9}[\dx])\b/i';

        // 1 = ISBN-10
        // 2 = ISBN-13
        if (preg_match($regex, str_replace('-', '', $str), $matches)) {
            return (10 === strlen($matches[1])) ? 1 : 2;
        }
        return 0; // No valid ISBN found
    }
}
