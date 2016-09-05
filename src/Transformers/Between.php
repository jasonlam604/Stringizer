<?php
namespace Stringizer\Transformers;

/**
 * Between - Extracts a string between left and right strings.
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Between extends Transformer implements TransformerInterface
{

    private $left;
    private $right;

    public function __construct($value, $left, $right)
    {
        parent::__construct($value);
        $this->left = $left;
        $this->right = $right;
    }

    public function execute()
    {
        $str = $this->getValue();

        if (mb_substr($this->getValue(), 0, mb_strlen($this->left)) == $this->left) {
            $str = mb_substr($this->getValue(), mb_strlen($this->left));
        }

        if(mb_substr($this->getValue(), mb_strlen($this->getValue()) - mb_strlen($this->right), mb_strlen($this->right)) == $this->right) {
            $str = mb_substr($str, 0, mb_strlen($str) - mb_strlen($this->right));
        }

        return $str;
    }
}
