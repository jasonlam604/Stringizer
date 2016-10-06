<?php
use Stringizer\Stringizer;

/**
 * ChopLeftTest Unit Tests
 */
class ChopLeftTest extends PHPUnit_Framework_TestCase
{

    public function testValid()
    {
        $s = new Stringizer("foobar");
        $this->assertEquals("bar", $s->chopLeft("foo"));
    }

    public function testValidNoMatch()
    {
        $s = new Stringizer("foobar");
        $this->assertEquals("foobar", $s->chopLeft("FU"));
    }

    public function testValidMultiByte()
    {
        $s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
        $this->assertEquals("ìzĕŕ", $s->chopLeft("ȘŦŗÍñĝ"));

        $s = new Stringizer("<div>こんにちは");
        $this->assertEquals("こんにちは", $s->chopLeft("<div>"));
    }

    public function testValidMultiByteNoMatch()
    {
        $s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
        $this->assertEquals("ȘŦŗÍñĝìzĕŕ", $s->chopLeft("ȘŦŗÍñĝXXX"));

        $s = new Stringizer("<div>こんにちは");
        $this->assertEquals("<div>こんにちは", $s->chopLeft("<span>"));
    }
}
