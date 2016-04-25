<?php
namespace Stringizer\Transformers;

/**
 * UppercaseFirst
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class UppercaseFirst extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    /**
     * Uppercase the First letter of in the given value
     */
    public function execute()
    {
        return ucfirst($this->getValue());
    }
}