<?php
use Stringizer\Stringizer;

/**
 * Truncate Unit Tests
 */
class TruncateTest extends PHPUnit_Framework_TestCase
{

    public function testTruncate()
    {
        $s = new Stringizer("キラキラした");
        $this->assertEquals("キラキラ", $s->truncate(2));
        
        $s = new Stringizer("FizzBuzz");
        $this->assertEquals("Fizz", $s->truncate(4));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testTruncateInvalidParameterNull()
    {
        $s = new Stringizer("FizzBuzz");
        $this->assertEquals("Fizz", $s->truncate(null));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testTruncateInvalidParameterAlpha()
    {
        $s = new Stringizer("FizzBuzz");
        $this->assertEquals("Fizz", $s->truncate("A"));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testTruncateInvalidParameterNegativeNumber()
    {
        $s = new Stringizer("FizzBuzz");
        $this->assertEquals("Fizz", $s->truncate(- 1));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testTruncateInvalidParameterOutofBounds()
    {
        $s = new Stringizer("FizzBuzz");
        $this->assertEquals("FizzBuzz", $s->truncate(9));
    }
}
