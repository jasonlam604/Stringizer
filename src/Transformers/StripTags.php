<?php
namespace Stringizer\Transformers;

/**
 * Strip Tags - Remove HTML and PHP tags from a string
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class StripTags extends Transformer implements TransformerInterface
{

    private $allowableTags;

    public function __construct($value, $allowableTags = '')
    {
        parent::__construct($value);
        $this->allowableTags = $allowableTags;
    }

    public function execute()
    {
        return strip_tags($this->getValue(), $this->allowableTags);
    }
}
