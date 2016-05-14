<?php
namespace Stringizer\Transformers;

/**
 * Strip Punctuation - Remove all of the punctuation.
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class StripPunctuation extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        return preg_replace("#[[:punct:]]#", "", $this->getValue());
    }
}
