<?php
use Stringizer\Stringizer;

/**
 * AlphaNumericSpaceDash Unit Tests
 */
class AlphaNumericSpaceDashTest extends PHPUnit_Framework_TestCase
{

    public function testValidAlphaNumericAlphaOnly()
    {
        $s = new Stringizer("abcdedfghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ");
        $this->assertEquals(true, $s->isAlphaNumericSpaceDash());
    }

    public function testValidAlphaNumericNumericOnly()
    {
        $s = new Stringizer("0123456789");
        $this->assertEquals(true, $s->isAlphaNumericSpaceDash());
    }

    public function testValidAlphaNumeric()
    {
        $s = new Stringizer("abcdedfghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789");
        $this->assertEquals(true, $s->isAlphaNumericSpaceDash());
    }

    public function testValidAlphaNumericSpace()
    {
        $s = new Stringizer("abcdedfghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ 0123456789");
        $this->assertEquals(true, $s->isAlphaNumericSpaceDash());
    }

    public function testValidAlphaNumericSpaceDash()
    {
        $s = new Stringizer("abcdedfghijklmnopqrstuvwxyz - ABCDEFGHIJKLMNOPQRSTUVWXYZ - 0123456789");
        $this->assertEquals(true, $s->isAlphaNumericSpaceDash());
    }

    public function testValidWhitespaceOnly()
    {
        $s = new Stringizer("  ");
        $this->assertEquals(true, $s->isAlphaNumericSpaceDash());
    }

    public function testValidDashOnly()
    {
        $s = new Stringizer("-");
        $this->assertEquals(true, $s->isAlphaNumericSpaceDash());
    }

    public function testInValidNonAlpha()
    {
        $s = new Stringizer("John Doe ! ");
        $this->assertEquals(false, $s->isAlphaNumericSpaceDash());
    }

    public function testInValidMultiByte()
    {
        $s = new Stringizer("こんにちは");
        $this->assertEquals(false, $s->isAlphaNumericSpaceDash());
    }
}
