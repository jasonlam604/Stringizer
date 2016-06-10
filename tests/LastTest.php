<?php
use Stringizer\Stringizer;

/**
 * LastTest Unit Tests
 */
class LastTest extends PHPUnit_Framework_TestCase
{

    public function testValidFirst()
    {
        $s = new Stringizer("myapp");
        $this->assertEquals("app", $s->last(3));

        $s = new Stringizer("myapp");
        $this->assertEquals("myapp", $s->last(5));

        $s = new Stringizer("myapp");
        $this->assertEquals("", $s->last(0));
    }

    public function testValidFirstMultiByte()
    {
        $s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
        $this->assertEquals("ìzĕŕ", $s->last(4));

        $s = new Stringizer("こんにちは");
        $this->assertEquals("は", $s->last(1));
    }

    public function testInValidFirst()
    {
        $s = new Stringizer("myapp");
        $this->assertNotEquals("my", $s->last(3));

        $s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
        $this->assertNotEquals("ȘŦŗÍñĝ", $s->last(5));
    }
}
