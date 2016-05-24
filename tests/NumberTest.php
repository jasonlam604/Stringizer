<?php
use Stringizer\Stringizer;

/**
 * Number Unit Tests
 */
class NumberTest extends PHPUnit_Framework_TestCase
{

    public function testValidNumber()
    {
        $s = new Stringizer("1234567890");
        $this->assertEquals(true, $s->isNumber());

        $s = new Stringizer("-1234567890");
        $this->assertEquals(true, $s->isNumber());

        $s = new Stringizer("-1");
        $this->assertEquals(true, $s->isNumber());

        $s = new Stringizer("-0");
        $this->assertEquals(true, $s->isNumber());

        $s = new Stringizer("1");
        $this->assertEquals(true, $s->isNumber());

        $s = new Stringizer("0");
        $this->assertEquals(true, $s->isNumber());
    }

    public function testInValidHasAlpha()
    {
        $s = new Stringizer("abc123");
        $this->assertEquals(false, $s->isNumber());
    }

    public function testInValidHasDecimal()
    {
        $s = new Stringizer("19.99");
        $this->assertEquals(false, $s->isNumber());
    }

    public function testInValidHasCharacter()
    {
        $s = new Stringizer("x");
        $this->assertEquals(false, $s->isNumber());
    }

    public function testInValidAlphaHasMultiByte()
    {
        $s = new Stringizer("こんにちは");
        $this->assertEquals(false, $s->isNumber());
    }
}
