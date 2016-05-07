<?php
namespace Stringizer\Transformers;

/**
 * Replace, match and replace string(s)
 *
 * Note this multibyte safe see http://www.php.net/str_replace
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class Replace extends TransformerCaseInsensitive implements TransformerInterface
{

    /**
     * Can be a string or array
     *
     * @var mix
     */
    private $needles;

    /**
     * Can be a string or array
     *
     * @var mix
     */
    private $replacements;

    public function __construct($value, $needles, $replacements)
    {
        parent::__construct($value);
        
        $this->needles = $needles;
        
        $this->replacements = $replacements;
    }

    /**
     * String replace
     *
     * @return string Modified string
     */
    public function execute()
    {
        if ($this->isCaseInsensitive()) {
            return str_ireplace($this->needles, $this->replacements, $this->getValue());
        } else {
            return str_replace($this->needles, $this->replacements, $this->getValue());
        }
    }
}
