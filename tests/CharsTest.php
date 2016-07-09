<?php
use Stringizer\Stringizer;

/**
 * Charts Unit Tests
 */
class CharsTest extends PHPUnit_Framework_TestCase
{

    public function testValidBasic()
    {
        $s = new Stringizer("Stringizer");
        $data = $s->chars();

        $this->assertEquals(10, count($data));

        $this->assertEquals($data[0], "S");
        $this->assertEquals($data[1], "t");
        $this->assertEquals($data[2], "r");
        $this->assertEquals($data[3], "i");
        $this->assertEquals($data[4], "n");
        $this->assertEquals($data[5], "g");
        $this->assertEquals($data[6], "i");
        $this->assertEquals($data[7], "z");
        $this->assertEquals($data[8], "e");
        $this->assertEquals($data[9], "r");
    }

    public function testValidMultiByte1()
    {
        $s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
        $data = $s->chars();

        $this->assertEquals(10, count($data));

        $this->assertEquals($data[0], "Ș");
        $this->assertEquals($data[1], "Ŧ");
        $this->assertEquals($data[2], "ŗ");
        $this->assertEquals($data[3], "Í");
        $this->assertEquals($data[4], "ñ");
        $this->assertEquals($data[5], "ĝ");
        $this->assertEquals($data[6], "ì");
        $this->assertEquals($data[7], "z");
        $this->assertEquals($data[8], "ĕ");
        $this->assertEquals($data[9], "ŕ");
    }

    /**
     * Kon'nichiwa ==> こんにちは
     */
    public function testValidMultiByteHelloInJapanese()
    {
        $s = new Stringizer("こんにちは");
        $data = $s->chars();

        $this->assertEquals(5, count($data));

        $this->assertEquals($data[0], "こ");
        $this->assertEquals($data[1], "ん");
        $this->assertEquals($data[2], "に");
        $this->assertEquals($data[3], "ち");
        $this->assertEquals($data[4], "は");
    }
}
