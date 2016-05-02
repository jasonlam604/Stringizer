<?php
namespace Stringizer\Transformers;

/**
 * RemoveNonAscii
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 *         
 */
class RemoveNonAscii extends TransformerCaseInsensitive implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    /**
     * RemoveNonAscii
     */
    public function execute()
    {
        return preg_replace("/[^(\x20-\x7F)]*/", "", $this->getValue());
    }
}