<?php
use Stringizer\Stringizer;

/**
 * ChompLeftTest Unit Tests
 */
class ChompLeftTest extends PHPUnit_Framework_TestCase
{

    public function testValid()
    {
        $s = new Stringizer("foobar");
        $this->assertEquals("bar", $s->chompLeft("foo"));
    }

    public function testValidNoMatch()
    {
        $s = new Stringizer("foobar");
        $this->assertEquals("foobar", $s->chompLeft("FU"));
    }

    public function testValidMultiByte()
    {
        $s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
        $this->assertEquals("ìzĕŕ", $s->chompLeft("ȘŦŗÍñĝ"));

        $s = new Stringizer("<div>こんにちは");
        $this->assertEquals("こんにちは", $s->chompLeft("<div>"));
    }

    public function testValidMultiByteNoMatch()
    {
        $s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
        $this->assertEquals("ȘŦŗÍñĝìzĕŕ", $s->chompLeft("ȘŦŗÍñĝXXX"));

        $s = new Stringizer("<div>こんにちは");
        $this->assertEquals("<div>こんにちは", $s->chompLeft("<span>"));
    }
}
