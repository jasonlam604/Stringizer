<?php
use Stringizer\Stringizer;

/**
 * UppercaseFirst Unit Tests
 */
class UppercaseFirstTest extends PHPUnit_Framework_TestCase
{

    public function testUppercaseFirst()
    {
        $s = new Stringizer("fizz");
        $this->assertEquals("Fizz", $s->uppercaseFirst());

        $s = new Stringizer("fizz buzz FOO bar");
        $this->assertEquals("Fizz buzz foo bar", $s->uppercaseFirst());

        $s = new Stringizer("ABCDEFG");
        $this->assertEquals("Abcdefg", $s->uppercaseFirst());
    }
}
