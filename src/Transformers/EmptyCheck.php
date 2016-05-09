<?php
namespace Stringizer\Transformers;

use Stringizer\Stringizer;

/**
 * Empty, checks if value is empty this includes the what is defined by the PHP empty function, see
 * http://php.net/manual/en/function.empty.php prior and includes a value that contains whitespace
 * such as tabs and linefeeds
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
