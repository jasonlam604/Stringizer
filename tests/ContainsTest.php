<?php
use Stringizer\Stringizer;

/**
 * Contains Unit Tests
 */
class ContainsTest extends PHPUnit_Framework_TestCase
{

    public function testContainsValid()
    {
        $s = new Stringizer("fizz buzz foo bar");
        $this->assertEquals(true, $s->contains("buzz"));
        
        $s = new Stringizer("fizz buzz John Doe foo bar");
        $this->assertEquals(true, $s->contains("John Doe"));
    }

    public function testContainsValidNoMatch()
    {
        // Case Sensitive, fails
        $s = new Stringizer("fizz buzz foo bar");
        $this->assertEquals(false, $s->contains("Buzz"));
    }

    public function testContainsValidIncaseSensitive()
    {
        $s = new Stringizer("fizz buzz foo bar");
        $this->assertEquals(true, $s->containsIncaseSensitive("bUzZ"));
    }

    public function testContainsValidIncaseSensitiveNoMatch()
    {
        $s = new Stringizer("fizz buzz foo bar");
        $this->assertEquals(false, $s->containsIncaseSensitive("bUzZz"));
    }

    public function testContainsValidMultiByte()
    {
        $s = new Stringizer("文字列のそれ");
        $this->assertEquals(true, $s->contains("列の"));
    }

    public function testContainsValidMultiByteNoMatch()
    {
        $s = new Stringizer("文字列のそれ");
        $this->assertEquals(false, $s->contains("の列の"));
    }
}