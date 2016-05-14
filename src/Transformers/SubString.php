<?php
namespace Stringizer\Transformers;

/**
 * SubString - Find a portion of a string based on postioning (index position in the string) and length of the portion
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class SubString extends Transformer implements TransformerInterface
{

    private $start;

    private $length;

    public function __construct($value, $start, $length = null)
    {
        parent::__construct($value);
        $this->start = $start;
        $this->length = $length;
    }

    /**
     * Truncate
     */
    public function execute()
    {
        return mb_substr($this->getValue(), $this->start, $this->length);
    }
}
