<?php
use Stringizer\Stringizer;

/**
 * Length Unit Tests
 */
class LengthTest extends PHPUnit_Framework_TestCase
{

    public function testLength()
    {
        $s = new Stringizer("キラキラした");
        $this->assertEquals(6, $s->length());
        
        $s = new Stringizer("FizzBuzz");
        $this->assertEquals(8, $s->length());
    }

    public function testLengthMultiByte()
    {
        $s = new Stringizer("キラキラした");
        $this->assertEquals(6, $s->length());
    }
}
