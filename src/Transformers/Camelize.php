<?php
namespace Stringizer\Transformers;

use Stringizer\Stringizer;

/**
 * Camelize - Removes any underscores or dashes and converts a string into camel case.
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class Camelize extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        $s = new Stringizer($this->getValue());
        $s->replace(array(
            "_",
            "-"
        ), array(
            " ",
            " "
        ))
            ->lowercase()
            ->uppercaseWords()
            ->replace(" ", "")
            ->lowercaseFirst(true);
        return $s->getString();
    }
}
