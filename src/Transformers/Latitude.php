<?php
namespace Stringizer\Transformers;

/**
 * Alpha - Checks if value is contains alpha values only.
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Latitude extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        if (preg_match('/^[-+]?([1-8]?\\d(\\.\\d+)?|90(\\.0+)?)$/', $this->getValue())) {
            return true;
        } else {
            return false;
        }
    }
}
