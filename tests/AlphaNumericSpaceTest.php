<?php
use Stringizer\Stringizer;

/**
 * AlphaNumericSpace Unit Tests
 */
class AlphaNumericSpaceTest extends PHPUnit_Framework_TestCase
{

    public function testValidAlphaNumericAlphaOnly()
    {
        $s = new Stringizer("abcdedfghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ");
        $this->assertEquals(true, $s->isAlphaNumericSpace());
    }

    public function testValidAlphaNumericNumericOnly()
    {
        $s = new Stringizer("0123456789");
        $this->assertEquals(true, $s->isAlphaNumericSpace());
    }

    public function testValidAlphaNumeric()
    {
        $s = new Stringizer("abcdedfghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789");
        $this->assertEquals(true, $s->isAlphaNumericSpace());
    }

    public function testValidAlphaNumericSpace()
    {
        $s = new Stringizer("abcdedfghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ 0123456789");
        $this->assertEquals(true, $s->isAlphaNumericSpace());
    }

    public function testValidWhitespaceOnly()
    {
        $s = new Stringizer("  ");
        $this->assertEquals(true, $s->isAlphaNumericSpace());
    }

    public function testInValidNonAlpha()
    {
        $s = new Stringizer("John Doe ! ");
        $this->assertEquals(false, $s->isAlphaNumericSpace());
    }

    public function testInValidMultiByte()
    {
        $s = new Stringizer("こんにちは");
        $this->assertEquals(false, $s->isAlphaNumeric());
    }
}
