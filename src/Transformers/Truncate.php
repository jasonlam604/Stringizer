<?php
namespace Stringizer\Transformers;

use Stringizer\Transformers\SubString;

/**
 * Truncate - truncate/chop/chomp string
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class Truncate extends Transformer implements TransformerInterface
{

    private $numberToTruncate;

    public function __construct($value, $numberToTruncate)
    {
        parent::__construct($value);

        $this->numberToTruncate = $numberToTruncate;
    }

    /**
     * Truncate of string
     */
    public function execute()
    {
        $length = mb_strlen($this->getValue());

        if (filter_var($this->numberToTruncate, FILTER_VALIDATE_INT) === false) {
            throw new \InvalidArgumentException("Value to truncate by is not a number");
        } elseif (filter_var($this->numberToTruncate, FILTER_VALIDATE_INT, array(
            "options" => array(
                "min_range" => 0,
                "max_range" => $length
            )
        )) === false) {
            throw new \InvalidArgumentException("Value to truncate by is out of bounds");
        } else {
            return (new SubString($this->getValue(), 0, $length - $this->numberToTruncate))->execute();
        }
    }
}