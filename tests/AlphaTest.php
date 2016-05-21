<?php
use Stringizer\Stringizer;

/**
 * Alpha Unit Tests
 */
class AlphaTest extends PHPUnit_Framework_TestCase
{

    public function testValidAlpha()
    {
        $s = new Stringizer("abcdedfghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ");
        $this->assertEquals(true, $s->isAlpha());
    }

    public function testInValidAlphaHasNumber()
    {
        $s = new Stringizer("1abcdedfghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ");
        $this->assertEquals(false, $s->isAlpha());
    }

    public function testInValidAlphaHasSpace()
    {
        $s = new Stringizer("abc dedfghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ");
        $this->assertEquals(false, $s->isAlpha());
    }

    public function testInValidAlphaHasMultiByte()
    {
        $s = new Stringizer("こんにちは 世界");
        $this->assertEquals(false, $s->isAlpha());
    }
}
