<?php
namespace Stringizer\Transformers;

/**
 * RemoveWhitespace - Remove any whitespace from the string (before, after and any in between)
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class RemoveWhitespace extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        return preg_replace('/\s+/', '', $this->getValue());
    }
}
