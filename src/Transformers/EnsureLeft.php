<?php
namespace Stringizer\Transformers;

use Stringizer\Stringizer;

/**
 * EnsureLeft - Ensure string starts with prefix
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class EnsureLeft extends Transformer implements TransformerInterface
{

    private $prefix;

    public function __construct($value, $prefix)
    {
        parent::__construct($value);
        $this->prefix = $prefix;
    }

    public function execute()
    {
        $s = new Stringizer($this->getValue());
        if ($s->startsWith($this->prefix)) {
            return $this->getValue();
        } else {
            return $this->prefix . $this->getValue();
        }
    }
}
