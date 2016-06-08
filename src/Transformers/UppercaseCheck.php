<?php
namespace Stringizer\Transformers;

use Stringizer\Stringizer;

/**
 * UppercaseCheck - Checks if value is contains any uppercase values.
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class UppercaseCheck extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        $s = new Stringizer($this->getValue());
        $s->replaceAccents();
        return ctype_upper($s->getString());
    }
}
