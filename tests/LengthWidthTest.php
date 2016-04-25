<?php
use Stringizer\Stringizer;

/**
 * Length and Width Unit Tests
 */
class LengthWidthTest extends PHPUnit_Framework_TestCase
{

    public function testLength()
    {
        $s = new Stringizer("キラキラした");
        $this->assertEquals(6, $s->length());
        
        $s = new Stringizer("FizzBuzz");
        $this->assertEquals(8, $s->length());
    }

    public function testWidth()
    {
        $s = new Stringizer("キラキラした");
        $this->assertEquals(12, $s->width());
        
        $s = new Stringizer("FizzBuzz");
        $this->assertEquals(8, $s->length());
    }
}