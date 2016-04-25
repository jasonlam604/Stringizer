<?php
namespace Stringizer\Transformers;

/**
 * Lowercase first letter of all words
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class LowercaseWords extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    /**
     * Lowercase the First letter of every word
     */
    public function execute()
    {
        return mb_ereg_replace('(\b[a-zA-Z])(\w{0,})', "strtolower('\\1') . '\\2'", $this->getValue(), 'e');
    }
}