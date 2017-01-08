<?php
namespace Stringizer\Transformers;

/**
 * HexColor - Checks if value is valid hexcolor
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class HexColor extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        if (preg_match('/^#?([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$/', $this->getValue())) {
            return true;
        } else {
            return false;
        }
    }
}
