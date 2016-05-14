<?php
namespace Stringizer\Transformers;

/**
 * Length - Find the length of the string
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class Length extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    /**
     * Length of string
     */
    public function execute()
    {
        return mb_strlen($this->getValue());
    }
}
