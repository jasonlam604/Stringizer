<?php
namespace Stringizer\Transformers;

/**
 * TrimRight - Remove whitespace right of the string
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class TrimRight extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    /**
     * TrimRight string
     */
    public function execute()
    {
        return preg_replace('/[\pZ\pC]+$/u', '', $this->getValue());
    }
}
