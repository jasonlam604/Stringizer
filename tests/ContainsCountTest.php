<?php
use Stringizer\Stringizer;

/**
 * ContainsCount Unit Tests
 */
class ContainsCountTest extends PHPUnit_Framework_TestCase
{

    public function testContainsCountValid()
    {
        $s = new Stringizer("fizz buzz foo bar");
        $this->assertEquals(1, $s->containsCount("buzz"));
        
        $s = new Stringizer("fizz buzz fizz buzz fizz buzz");
        $this->assertEquals(3, $s->containsCount("buzz"));
        
        $s = new Stringizer("fizz buzz foo bar");
        $this->assertEquals(0, $s->containsCount("nomatch"));
        
        // Case Sensitive, no match
        $s = new Stringizer("fizz buzz foo bar");
        $this->assertEquals(0, $s->containsCount("BUZZ"));
    }

    public function testContainsCountValidMultibyte()
    {
        $s = new Stringizer("文字列のそれ");
        $this->assertEquals(1, $s->containsCount("の"));
        
        $s = new Stringizer("文字列のそれ 文字列のそれ 文字列のそれ 文字列のそれ");
        $this->assertEquals(4, $s->containsCount("れ"));
    }
}