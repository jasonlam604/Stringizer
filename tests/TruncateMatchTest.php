<?php
use Stringizer\Stringizer;

/**
 * TruncateAtMatch Unit Tests
 */
class TruncateAtMatch extends PHPUnit_Framework_TestCase
{

    public function testTruncateMatch()
    {
        // Notice there are two symbols of ラ it truncates at first match
        $s = new Stringizer("文字列のそれ");
        $this->assertEquals("文字列", $s->truncateMatch("の"));
        
        $s = new Stringizer("FizzBuzzFooBar");
        $this->assertEquals("FizzBuzz", $s->truncateMatch("Foo"));
    }

    public function testTruncateMatchCaseInsensitive()
    {
        $s = new Stringizer("FizzBuzzFooBar");
        $this->assertEquals("FizzBuzz", $s->truncateMatchCaseInsensitive("foo"));
    }

    public function testNoTransforamtionDueToNoMatch()
    {
        // No Match
        $s = new Stringizer("FizzBuzzFooBar");
        $this->assertEquals(FALSE, $s->truncateMatch("Blank"));
        
        // No Match - case sensitive
        $s = new Stringizer("FizzBuzzFooBar");
        $this->assertEquals(FALSE, $s->truncateMatch("foo"));
    }

    public function testTruncateMatchBefore()
    {
        $s = new Stringizer("キラキラした");
        $this->assertEquals("ラキラした", $s->truncateMatch("ラ", true));
    }
}