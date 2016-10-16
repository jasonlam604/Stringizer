<?php
use Stringizer\Stringizer;

/**
 * Repeat Unit Tests
 */
class RepeatTest extends PHPUnit_Framework_TestCase
{

    public function testRepeat()
    {
        $s = new Stringizer("*");
        $this->assertEquals("*", $s->repeat(0));

        $s = new Stringizer("*");
        $this->assertEquals("*****", $s->repeat(5));

        $s = new Stringizer("* ");
        $this->assertEquals("* * * * * ", $s->repeat(5));
    }

    public function testRepeatNonNumeric()
    {
        $s = new Stringizer("*");
        $this->assertEquals("*", $s->repeat('x'));
    }

    public function testRepeatNegativeNumeric()
    {
        $s = new Stringizer("*");
        $this->assertEquals("*", $s->repeat('-99'));
    }

    public function testInValidAlphaHasMultiByte()
    {
        $s = new Stringizer("こ");
        $this->assertEquals("こ", $s->repeat(1));

        $s = new Stringizer("こんにちは");
        $this->assertEquals("こんにちはこんにちは", $s->repeat(2));
    }
}
