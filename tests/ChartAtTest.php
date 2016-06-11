<?php
use Stringizer\Stringizer;

/**
 * CharAtTest Unit Tests
 */
class CharAtTest extends PHPUnit_Framework_TestCase
{

    public function testValid()
    {
        $s = new Stringizer("Foo Bar Fizz Buzz");
        $this->assertEquals("B", $s->charAt(4));

        $s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
        $this->assertEquals("Ŧ", $s->charAt(1));

        $s = new Stringizer("こんにちは");
        $this->assertEquals("こ", $s->charAt(0));

        $s = new Stringizer("こんにちは");
        $this->assertEquals("", $s->charAt(10));
    }
}
