<?php
namespace Stringizer\Transformers;

/**
 * Uppercase - Ensure each word in the string is uppercase and the rest are lowercase
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class UppercaseWords extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    /**
     * Uppercase the First letter of every word
     */
    public function execute()
    {
        return ucwords($this->getValue());
    }
}
