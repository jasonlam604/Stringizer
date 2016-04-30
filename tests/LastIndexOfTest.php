<?php
use Stringizer\Stringizer;

/**
 * LastIndexOf Unit Tests
 */
class LastIndexOfTest extends PHPUnit_Framework_TestCase
{

    public function testValidIndexOf()
    {
        $s = new Stringizer("文字列のそれ");
        $this->assertEquals(2, $s->lastIndexOf("列"));

        $s = new Stringizer("Fizz Buzz Foo Bar");
        $this->assertEquals(10, $s->lastIndexOf("Foo"));

        $s = new Stringizer("Fizz Buzz Foo Bar");
        $this->assertEquals(FALSE, $s->lastIndexOf("bad"));
    }

    public function testValidIndexOfWithOffset()
    {
        $s = new Stringizer("Foo Buzz Foo Bar");
        $this->assertEquals(9, $s->lastIndexOf("Foo", 0));
        $this->assertEquals(9, $s->lastIndexOf("Foo", 4));
    }

    public function testValidIndexOfCaseInsenitive()
    {
        // Case Sensitive
        $s = new Stringizer("Fizz Buzz Foo Bar");
        $this->assertEquals(FALSE, $s->lastIndexOf("foo"));

        // Case-InSensitive
        $s = new Stringizer("Fizz Buzz Foo Bar");
        $this->assertEquals(10, $s->lastIndexOfCaseInsensitive("foo"));
    }
}