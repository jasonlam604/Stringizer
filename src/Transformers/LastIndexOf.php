<?php
namespace Stringizer\Transformers;

/**
 * LastIndexOf, Finds position of first occurrence of a string within another
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 *         
 */
class LastIndexOf extends Transformer implements TransformerInterface
{

    private $needle;

    private $fromIndex;

    private $isCaseInsensitive;

    public function __construct($value, $needle, $fromIndex = 0, $isCaseInsensitive = false)
    {
        parent::__construct($value);
        
        $this->needle = $needle;
        $this->fromIndex = $fromIndex;
        $this->isCaseInsensitive = $isCaseInsensitive;
    }

    /**
     * LastIndexOf
     */
    public function execute()
    {
        if ($this->isCaseInsensitive)
            return mb_strripos($this->getValue(), $this->needle, $this->fromIndex);
        else
            return mb_strrpos($this->getValue(), $this->needle, $this->fromIndex);
    }
}