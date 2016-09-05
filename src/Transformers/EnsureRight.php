<?php
namespace Stringizer\Transformers;

use Stringizer\Stringizer;

/**
 * EnsureRight - Ensure string ends with suffix
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class EnsureRight extends Transformer implements TransformerInterface
{

    private $suffix;

    public function __construct($value, $suffix)
    {
        parent::__construct($value);
        $this->suffix = $suffix;
    }

    public function execute()
    {
        $s = new Stringizer($this->getValue());
        if ($s->endsWith($this->suffix)) {
            return $this->getValue();
        } else {
            return $this->getValue() . $this->suffix;
        }
    }
}
