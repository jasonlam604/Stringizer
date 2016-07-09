<?php
namespace Stringizer\Transformers;

/**
 * Chars - Split string to an array of characters.
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Chars extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        return preg_split('//u', $this->getValue(), - 1, PREG_SPLIT_NO_EMPTY);
    }
}
