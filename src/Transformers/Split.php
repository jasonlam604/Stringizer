<?php
namespace Stringizer\Transformers;

/**
 * Split, explode string into an array default delimiter is comma
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class Split extends Transformer implements TransformerInterface
{

    private $delimiter;

    public function __construct($value, $delimiter)
    {
        parent::__construct($value);

        $this->delimiter = $delimiter;
    }

    /**
     * Split string
     *
     * @return array
     */
    public function execute()
    {
        return explode($this->delimiter, $this->getValue());
    }
}