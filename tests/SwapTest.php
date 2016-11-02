<?php
use Stringizer\Stringizer;

/**
 * Swap Unit Tests
 */
class SwapTest extends PHPUnit_Framework_TestCase
{

    public function testSwap()
    {
        $s = new Stringizer("hELLO wORLD");
        $this->assertEquals("Hello World", $s->swapCase());
        $this->assertEquals("hELLO wORLD", $s->swapCase());
    }

    public function testNoChangeForMultiByte()
    {
        $s = new Stringizer("こ");
        $this->assertEquals("こ", $s->swapCase());

        $s = new Stringizer("こんにちは");
        $this->assertEquals("こんにちは", $s->swapCase());

        $s = new Stringizer("helloこんにちはWORLD");
        $this->assertEquals("HELLOこんにちはworld", $s->swapCase());
    }
}
