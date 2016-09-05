<?php
namespace Stringizer\Transformers;

/**
 * SentenceCount - Counts the number of sentences in value.
 *
 * Credit to Chris Riesen - https://github.com/ChristianRiesen/string
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class SentenceCount extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        $string = $this->getValue();

        // Change all endings into dots
        $string = str_replace(array('!','?'), '.', $string);

        // Remove non essentials
        $string = preg_replace('/[^a-zA-Z0-9\.]/', '', $string);

        // Remove multiple sentence endings
        $string = preg_replace('/\.{2,}/', '.', $string);

        // Count sentence endings
        return substr_count($string, '.');
    }
}
