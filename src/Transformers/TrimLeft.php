<?php
namespace Stringizer\Transformers;

/**
 * TrimLeft - Remove whitespace left of the string
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class TrimLeft extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    /**
     * TrimLeft string
     */
    public function execute()
    {
        return preg_replace('/^[\pZ\pC]+/u', '', $this->getValue());
    }
}
