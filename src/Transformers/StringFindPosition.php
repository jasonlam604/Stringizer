<?php
namespace Stringizer\Transformers;

use Stringizer\Transformers\TransformerCaseInsensitive;

/**
 * StringFindPosition - wrapper for stripos, finds position of first occurrence of a string within another
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class StringFindPosition extends TransformerCaseInsensitive implements TransformerInterface
{

    private $needle;

    private $offset;

    public function __construct($value, $needle, $offset = 0)
    {
        parent::__construct($value);
        $this->needle = $needle;
        $this->offset = $offset;
    }

    public function execute()
    {
        if ($this->isCaseInsensitive()) {
            return mb_stripos($this->getValue(), $this->needle, $this->offset);
        } else {
            return mb_strpos($this->getValue(), $this->needle, $this->offset);
        }
    }
}
