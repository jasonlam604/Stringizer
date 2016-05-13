<?php
namespace Stringizer\Transformers;

/**
 * LastIndexOf - Finds position of last occurrence of a string within another
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 *
 */
class LastIndexOf extends TransformerCaseInsensitive implements TransformerInterface
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
     * LastIndexOf
     */
    public function execute()
    {
        if ($this->isCaseInsensitive())
            return mb_strripos($this->getValue(), $this->needle, $this->fromIndex);
        else
            return mb_strrpos($this->getValue(), $this->needle, $this->fromIndex);
    }
}
