<?php
namespace Stringizer\Transformers;

use Stringizer\Transformers\Transformer;

/**
 * TransformerCaseInsensitive
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class TransformerCaseInsensitive extends Transformer
{

    /**
     * Flag to ignore case
     *
     * @var boolean;
     */
    private $caseInsensitive;

    public function __construct($value)
    {
        parent::__construct($value);
        
        $this->caseInsensitive = false;
    }

    /**
     * Enable Case Insensitive (ignore case checking)
     *
     * @return \Stringizer\Transformers\TransformerCaseInsenitive
     */
    public function enableCaseInsensitive()
    {
        $this->caseInsensitive = true;
        
        return $this;
    }

    /**
     * Is Case Insensitive enabled
     *
     * @return boolean
     */
    public function isCaseInsensitive()
    {
        return $this->caseInsensitive;
    }
}
