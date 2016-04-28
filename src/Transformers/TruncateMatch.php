<?php
namespace Stringizer\Transformers;

use Stringizer\Transformers\StringFirstOccurrence;

/**
 * Truncate - truncate/chop/chomp string
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class TruncateMatch extends Transformer implements TransformerInterface
{

    private $stringToMatch;

    private $truncateBefore;

    private $caseInsensitive;

    public function __construct($value, $stringToMatch, $truncateBefore = false)
    {
        parent::__construct($value);
        
        $this->stringToMatch = $stringToMatch;
        $this->truncateBefore = $truncateBefore;
        $this->caseInsensitive = false;
    }

    public function enableCaseInsensitive()
    {
        $this->caseInsensitive = true;
        
        return $this;
    }

    /**
     * Truncate of string
     */
    public function execute()
    {
        if ($this->caseInsensitive)
            $result = (new StringFirstOccurrence($this->getValue(), $this->stringToMatch, $this->truncateBefore))->enableCaseInsensitive()->execute();
        else
            $result = (new StringFirstOccurrence($this->getValue(), $this->stringToMatch, $this->truncateBefore))->execute();
        
        return $result;
    }
}