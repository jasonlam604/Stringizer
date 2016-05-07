<?php
namespace Stringizer\Transformers;

/**
 * Uppercase
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class Uppercase extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    /**
     * Upper case everything
     */
    public function execute()
    {
        return mb_strtoupper($this->getValue(), \mb_internal_encoding());
    }
}
