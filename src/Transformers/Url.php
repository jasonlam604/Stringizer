<?php
namespace Stringizer\Transformers;

/**
 * Url - Checks if value is valid URL
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Url extends Transformer implements TransformerInterface
{

    public function __construct($value,$sanitize=false)
    {
        if($sanitize) {
            $value =  filter_var($value, FILTER_SANITIZE_URL);
        }

        parent::__construct($value);
    }

    public function execute()
    {
        return !filter_var($this->getValue(), FILTER_VALIDATE_URL) === false;
    }

}
