<?php
namespace Stringizer\Transformers;

class Transformer
{

    private $value;

    public function __construct($value)
    {
        if (! isset($value) || empty($value)) {
            throw new \InvalidArgumentException("String to transform contains a null");
        }
        
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}