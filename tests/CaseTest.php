<?php
use Stringizer\Stringizer;

/**
 * Uppercase & Lowercase Unit Tests
 */
class CaseTest extends PHPUnit_Framework_TestCase
{

    public function testUppercase()
    {
        $s = new Stringizer("fIzz");
        $this->assertEquals("FIZZ", $s->uppercase());
    }

    public function testUppercaseWords()
    {
        $s = new Stringizer("fizz");
        $this->assertEquals("Fizz", $s->uppercaseWords());
        
        $s = new Stringizer("fizz buzz foo bar");
        $this->assertEquals("Fizz Buzz Foo Bar", $s->uppercaseWords());
    }

    public function testUppercaseFirst()
    {
        $s = new Stringizer("fizz");
        $this->assertEquals("Fizz", $s->uppercaseFirst());
        
        $s = new Stringizer("fizz buzz FOO bar");
        $this->assertEquals("Fizz buzz foo bar", $s->uppercaseFirst());
        
        $s = new Stringizer("ABCDEFG");
        $this->assertEquals("Abcdefg", $s->uppercaseFirst());
    }

    public function testLowercase()
    {
        $s = new Stringizer("FiZZ");
        $this->assertEquals("fizz", $s->lowercase());
    }

    public function testLowercaseFirst()
    {
        $s = new Stringizer("FiZz");
        $this->assertEquals("fIZZ", $s->lowercaseFirst());
        
        $s = new Stringizer("fizz buzz FOO bar");
        $this->assertEquals("fIZZ BUZZ FOO BAR", $s->lowercaseFirst());
        
        $s = new Stringizer("ABCDEFG");
        $this->assertEquals("aBCDEFG", $s->lowercaseFirst());
        
        // Do not Upper case first
        $s = new Stringizer("FiZz");
        $this->assertEquals("fiZz", $s->lowercaseFirst(true));
    }
}