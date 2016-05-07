<?php
namespace Stringizer\Transformers;

/**
 * SubString Count, Count the number of substring occurrences
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class SubStringCount extends TransformerCaseInsensitive implements TransformerInterface
{

    private $needle;

    public function __construct($value, $needle)
    {
        parent::__construct($value);
        $this->needle = $needle;
    }

    public function execute()
    {
        if ($this->isCaseInsensitive()) {
            return mb_substr_count(mb_strtolower($this->getValue()), mb_strtolower($this->needle));
        } else {
            return mb_substr_count($this->getValue(), $this->needle);
        }
    }
}
