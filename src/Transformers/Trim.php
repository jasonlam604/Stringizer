<?php
namespace Stringizer\Transformers;

/**
 * Trim - Remove whitespace both right and left side of the string
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Trim extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    /**
     * Trim string
     */
    public function execute()
    {
        return preg_replace('/^[\pZ\pC]+|[\pZ\pC]+$/u', '', $this->getValue());
    }
}
