<?php
use Stringizer\Stringizer;

/**
 * HexDecimal Unit Tests
 */
class HexDecimalTest extends PHPUnit_Framework_TestCase
{

    public function testValidHexDecimal()
    {
        $s = new Stringizer("AB10BC99");
        $this->assertEquals(true, $s->isHexDecimal());

        $s = new Stringizer("ab12bc99");
        $this->assertEquals(true, $s->isHexDecimal());
    }

    public function testInValidHexDecimal()
    {
        $s = new Stringizer("abcdedfghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ");
        $this->assertEquals(false, $s->isHexDecimal());
    }
}
