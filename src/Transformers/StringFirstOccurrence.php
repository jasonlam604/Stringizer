<?php
namespace Stringizer\Transformers;

/**
 * StringFirstOccurrence
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class StringFirstOccurrence extends Transformer implements TransformerInterface
{

    private $needle;

    private $beforeNeedle;

    private $caseInsensitive;

    public function __construct($value, $needle, $beforeNeedle = false)
    {
        parent::__construct($value);
        $this->needle = $needle;
        $this->beforeNeedle = $beforeNeedle;
        $this->caseInsensitive = false;
    }

    public function enableCaseInsensitive()
    {
        $this->caseInsensitive = true;
        
        return $this;
    }

    /**
     * StringFirstOccurrence
     */
    public function execute()
    {
        if ($this->caseInsensitive)
            return mb_stristr($this->getValue(), $this->needle, $this->beforeNeedle);
        else
            return mb_strstr($this->getValue(), $this->needle, $this->beforeNeedle);
    }
}