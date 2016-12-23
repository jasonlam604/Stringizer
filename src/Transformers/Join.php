<?php
namespace Stringizer\Transformers;

/**
 * Join - Concatenates the elements of a to create a single string.
 * The separator string sep is placed between elements in the resulting string.
 *
 * Note if there is already an existing string value and method chaining is used then that value
 * over written
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Join extends Transformer implements TransformerInterface
{
    // use to hold array of values
    private $arrayValues;

    private $separator;

    public function __construct($value, $separator = ",")
    {
        $this->arrayValues = $value;
        $this->separator = $separator;
    }

    public function execute()
    {
        if (is_array($this->arrayValues)) {
            return implode($this->separator, $this->arrayValues);
        } else {
            throw new \InvalidArgumentException("Value given is not an array");
        }
    }
}
