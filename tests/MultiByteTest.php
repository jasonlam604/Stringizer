<?php
use Stringizer\Stringizer;

/**
 * MultiByte Unit Tests
 */
class MultiByteTest extends PHPUnit_Framework_TestCase
{

    public function testValidMultiByte()
    {
        $s = new Stringizer("文字列のそれ");
        $this->assertEquals(true, $s->isMultiByte());

        $s = new Stringizer("fòôbàř");
        $this->assertEquals(true, $s->isMultiByte());

        $s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
        $this->assertEquals(true, $s->isMultiByte());

        $s = new Stringizer("Hello fòô");
        $this->assertEquals(true, $s->isMultiByte());
    }

    public function testInvValidMultiByte()
    {
        $s = new Stringizer("");
        $this->assertEquals(false, $s->isMultiByte());

        $s = new Stringizer("foobar");
        $this->assertEquals(false, $s->isMultiByte());

        $s = new Stringizer("Stringizer");
        $this->assertEquals(false, $s->isMultiByte());

        $s = new Stringizer("123");
        $this->assertEquals(false, $s->isMultiByte());
    }
}
