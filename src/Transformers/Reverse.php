<?php
namespace Stringizer\Transformers;

/**
 * Reverse - Reverse string values
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Reverse extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    /**
     * Reverse of string
     */
    public function execute()
    {
        preg_match_all('/./us', $this->getValue(), $array);
        return implode(array_reverse($array[0]));
    }
}
