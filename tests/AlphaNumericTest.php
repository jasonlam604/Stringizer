<?php
use Stringizer\Stringizer;

/**
 * AlphaNumeric Unit Tests
 */
class AlphaNumericTest extends PHPUnit_Framework_TestCase
{

    public function testValidAlphaNumericAlphaOnly()
    {
        $s = new Stringizer("abcdedfghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ");
        $this->assertEquals(true, $s->isAlphaNumeric());
    }

    public function testValidAlphaNumericNumericOnly()
    {
        $s = new Stringizer("0123456789");
        $this->assertEquals(true, $s->isAlphaNumeric());
    }

    public function testValidAlphaNumeric()
    {
        $s = new Stringizer("abcdedfghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789");
        $this->assertEquals(true, $s->isAlphaNumeric());
    }

    public function testInValidWhitespace()
    {
        $s = new Stringizer("  ");
        $this->assertEquals(false, $s->isAlphaNumeric());
    }

    public function testInValidNonAlpha()
    {
        $s = new Stringizer("JohnDoe!");
        $this->assertEquals(false, $s->isAlphaNumeric());
    }

    public function testInValidMultiByte()
    {
        $s = new Stringizer("こんにちは");
        $this->assertEquals(false, $s->isAlphaNumeric());
    }
}
