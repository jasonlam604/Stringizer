<?php
namespace Stringizer\Transformers;

/**
 * Ascii - Checks if value contains valid ASCII values only.
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Ascii extends Transformer implements TransformerInterface
{

    private $pattern;

    public function __construct($value, $isPrintableOnly = false)
    {
        parent::__construct($value);

        if ($isPrintableOnly) {
            $this->pattern = '/^[\x20-\x7E]+$/';
        } else {
            $this->pattern = '/^[\x00-\x7F]+$/';
        }
    }

    public function execute()
    {
       // if (preg_match('/^[\x00-\x7F]+$/', $this->getValue())) {
        if (preg_match($this->pattern, $this->getValue())) {
            return true;
        } else {
            return false;
        }
    }
}
