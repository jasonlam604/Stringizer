<?php
use Stringizer\Stringizer;

/**
 * SubString Unit Tests
 */
class SubString extends PHPUnit_Framework_TestCase
{

    public function testSubString()
    {
        $s = new Stringizer("Fizz Buzz Foo Bar");
        $this->assertEquals("Fizz", $s->subString(0, 4));
        
        $s = new Stringizer("Fizz Buzz Foo Bar");
        $this->assertEquals("Buzz", $s->subString(5, 4));
    }

    public function testSubStringMultiByte()
    {
        $s = new Stringizer("キラキラした");
        $this->assertEquals("キ", $s->subString(0, 1));
        
        $s = new Stringizer("キラキラした");
        $this->assertEquals("キラキラした", $s->subString(0, 6));
        
        $s = new Stringizer("キラキラした");
        $this->assertEquals("ラキラした", $s->subString(1));
        
        $s = new Stringizer("キラキラした");
        $this->assertEquals("た", $s->subString(5));
        
        $s = new Stringizer("キラキラした");
        $this->assertEquals("", $s->subString(6));
        
        $s = new Stringizer("キラキラした キラキラした");
        $this->assertEquals("キラキラした", $s->subString(7));
    }
}
