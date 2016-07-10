<?php
namespace Stringizer\Transformers;

use Stringizer\Stringizer;

/**
 * CollapseWhitespace - Remove extra whitespace between characters and leaving a single space.
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class CollapseWhitespace extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        $s = new Stringizer(preg_replace("/[[:space:]]+/", " ", $this->getValue()));
        return $s->trim()->getString();
    }
}
