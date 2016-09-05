<?php
namespace Stringizer\Transformers;

use Stringizer\Transformers\TransformerCaseInsensitive;

/**
 * StringFirstOccurrence
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class StringFirstOccurrence extends TransformerCaseInsensitive implements TransformerInterface
{

    private $needle;

    private $beforeNeedle;

    public function __construct($value, $needle, $beforeNeedle = false)
    {
        parent::__construct($value);
        $this->needle = $needle;
        $this->beforeNeedle = $beforeNeedle;
    }

    /**
     * StringFirstOccurrence
     */
    public function execute()
    {
        if ($this->isCaseInsensitive())
            return mb_stristr($this->getValue(), $this->needle, $this->beforeNeedle);
        else
            return mb_strstr($this->getValue(), $this->needle, $this->beforeNeedle);
    }
}
