<?php
namespace Stringizer\Transformers;

/**
 * CamelToSnake - Converts Camel case to Snake Case.
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class CamelToSnake extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        return preg_replace_callback('/[A-Z]/', create_function('$match', 'return "_" . strtolower($match[0]);'), $this->getValue());
    }
}
