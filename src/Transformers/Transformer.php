<?php
namespace Stringizer\Transformers;

/**
 * Transform - base class for all Transformers
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class Transformer
{

    /**
     * Holds the string value to apply transformations on
     *
     * @var string
     */
    private $value;

    public function __construct($value)
    {
        if (! isset($value) || empty($value)) {
            throw new \InvalidArgumentException("String to transform contains a null");
        }
        
        $this->value = $value;
    }

    /**
     * Getter
     *
     * @return string the value being transformed
     */
    public function getValue()
    {
        return $this->value;
    }
}