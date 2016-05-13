<?php
namespace Stringizer\Transformers;

use Stringizer\Stringizer;

/**
 * Empty - Checks if value is empty, if string contains whitespace only it is considered empty.
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class EmptyCheck extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        $s = new Stringizer($this->getValue());
        $s->removeWhitespace();

        return empty(trim($s->getString()));
    }
}
