<?php
namespace Stringizer\Transformers;

/**
 * Dasherize - Break up a camelize string and seperate with dashes.
 *
 * ie: HelloWorldAgain ===> hello-world-again
 *
 * Regex Split by Capital letters Solution from here http://stackoverflow.com/questions/8998382/php-explode-at-capital-letters
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class Dasherize extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        preg_match_all('((?:^|[A-Z])[^A-Z]*)', $this->getValue(), $matches);

        return mb_strtolower(implode("-", $matches[0]));
    }
}
