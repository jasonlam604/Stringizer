<?php
namespace Stringizer\Transformers;

use Stringizer\Stringizer;

/**
 * WordCount - Counts the number of words inside the given value.
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class WordCount extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        if ((new Stringizer($this->getValue()))->trim()->length() == 0) {
            return 0;
        } else {
            return count(preg_split('~[^\p{L}\p{N}\']+~u', $this->getValue()));
        }
    }
}
