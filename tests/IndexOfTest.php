<?php
use Stringizer\Stringizer;

/**
 * EndsWith Unit Tests
 */
class IndexOfTest extends PHPUnit_Framework_TestCase
{

    public function testValidIndexOf()
    {
        $s = new Stringizer("文字列のそれ");
        $this->assertEquals(2, $s->indexOf("列"));

        $s = new Stringizer("Fizz Buzz Foo Bar");
        $this->assertEquals(10, $s->indexOf("Foo"));

        $s = new Stringizer("Fizz Buzz Foo Bar");
        $this->assertEquals(FALSE, $s->indexOf("bad"));
    }

    public function testValidIndexOfWithOffset()
    {
        $s = new Stringizer("Foo Buzz Foo Bar");
        $this->assertEquals(0, $s->indexOf("Foo",0));
        $this->assertEquals(9, $s->indexOf("Foo",1));
    }

    public function testValidIndexOfCaseInsenitive()
    {
        // Case Sensitive
        $s = new Stringizer("Fizz Buzz Foo Bar");
        $this->assertEquals(FALSE, $s->indexOf("foo"));

        // Case-InSensitive
        $s = new Stringizer("Fizz Buzz Foo Bar");
        $this->assertEquals(10, $s->indexOfCaseInsensitive("foo"));
    }
}