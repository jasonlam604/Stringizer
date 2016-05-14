<?php
use Stringizer\Stringizer;

/**
 * UppercaseWords Unit Tests
 */
class UppercaseWordsTest extends PHPUnit_Framework_TestCase
{

    public function testUppercaseWords()
    {
        $s = new Stringizer("fizz");
        $this->assertEquals("Fizz", $s->uppercaseWords());
        
        $s = new Stringizer("fizz buzz foo bar");
        $this->assertEquals("Fizz Buzz Foo Bar", $s->uppercaseWords());
    }
}
