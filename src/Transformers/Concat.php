<?php
namespace Stringizer\Transformers;

/**
 * Concat - Combine string values
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class Concat extends Transformer implements TransformerInterface
{

    /**
     * Value to append or preappend
     *
     * @var string
     */
    private $appendValue;

    /**
     * Holds flag to preappend
     *
     * @var boolean
     */
    private $isPreAppend;

    public function __construct($value, $appendValue)
    {
        parent::__construct($value);
        $this->appendValue = $appendValue;
        $this->setPreAppend(false);
    }

    /**
     * Set flag indicator to pre-append value when true
     *
     * @param boolean $isPreAppend
     */
    public function setPreAppend($isPreAppend)
    {
        $this->isPreAppend = $isPreAppend;
    }

    /**
     * Append or Pre-append $appendValue with $value
     */
    public function execute()
    {
        if (! isset($this->appendValue) || empty($this->appendValue)) {
            if ($this->isPreAppend)
                throw new \InvalidArgumentException("Missing value to preappend with");
            else
                throw new \InvalidArgumentException("Missing value to concat with");
        }

        if ($this->isPreAppend)
            return $this->appendValue . $this->getValue();
        else
            return $this->getValue() . $this->appendValue;
    }
}
