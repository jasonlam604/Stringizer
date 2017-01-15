<?php
namespace Stringizer\Transformers;

/**
 * MultiByte - Checks if value is MultiByte
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class MultiByte extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        if (preg_match('/[^\x00-\x7F]/', $this->getValue())) {
            return true;
        } else {
            return false;
        }
    }
}
