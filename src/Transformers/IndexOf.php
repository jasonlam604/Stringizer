<?php
namespace Stringizer\Transformers;

/**
 * IndexOf - Finds position of first occurrence of a string within another, if no match is found boolean false is returned
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 *
 */
class IndexOf extends TransformerCaseInsensitive implements TransformerInterface
{

    private $needle;

    private $fromIndex;

    public function __construct($value, $needle, $fromIndex = 0)
    {
        parent::__construct($value);

        $this->needle = $needle;
        $this->fromIndex = $fromIndex;
    }

    /**
     * IndexOf
     */
    public function execute()
    {
        if ($this->isCaseInsensitive())
            return mb_stripos($this->getValue(), $this->needle, $this->fromIndex);
        else
            return mb_strpos($this->getValue(), $this->needle, $this->fromIndex);
    }
}
