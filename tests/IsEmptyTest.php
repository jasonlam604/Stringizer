<?php
use Stringizer\Stringizer;

/**
 * IsEmpty Unit Tests
 */
class IsEmptyTest extends PHPUnit_Framework_TestCase
{

    public function testEmptyWithSpace()
    {
        $s = new Stringizer(" ");
        $this->assertEquals(true, $s->isEmpty());
    }

    public function testEmptyWithTab()
    {
        $s = new Stringizer("\t");
        $this->assertEquals(true, $s->isEmpty());
    }

    public function testEmptyWithNewLineFeed()
    {
        $s = new Stringizer("\n");
        $this->assertEquals(true, $s->isEmpty());
    }

    public function testEmptyWithCarriageReturn()
    {
        $s = new Stringizer("\r");
        $this->assertEquals(true, $s->isEmpty());
    }

    public function testEmptyWithWhitespaces()
    {
        $s = new Stringizer("\n  \n\r\t   ");
        $this->assertEquals(true, $s->isEmpty());
    }
}
