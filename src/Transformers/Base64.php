<?php
namespace Stringizer\Transformers;

/**
 * Base64 - Base64 Encode or Decode.
 *
 * Simply a wrapper for base64_decode and base64_encode, purpose to support chaining in Stringizer.
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Base64 extends Transformer implements TransformerInterface
{

    private $decode;

    public function __construct($value, $decode = false)
    {
        parent::__construct($value);

        $this->decode = $decode;
    }

    public function execute()
    {
        if ($this->decode) {
            return base64_decode($this->getValue());
        } else {
            return base64_encode($this->getValue());
        }
    }
}
