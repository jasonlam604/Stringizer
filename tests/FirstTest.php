<?php
use Stringizer\Stringizer;

/**
 * FirstTest Unit Tests
 */
class FirstTest extends PHPUnit_Framework_TestCase
{

    public function testValidFirst()
    {
        $s = new Stringizer("myapp");
        $this->assertEquals("my", $s->first(2));

        $s = new Stringizer("myapp");
        $this->assertEquals("myapp", $s->first(5));

        $s = new Stringizer("myapp");
        $this->assertEquals("myapp", $s->first(6));

        $s = new Stringizer("myapp");
        $this->assertEquals("", $s->first(0));
    }

    public function testValidFirstMultiByte()
    {
        $s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
        $this->assertEquals("ȘŦŗÍñĝ", $s->first(6));
    }

    public function testInValidFirst()
    {
        $s = new Stringizer("myapp");
        $this->assertNotEquals("my", $s->first(3));

        $s = new Stringizer("ȘŦŗÍñĝìzĕŕ");
        $this->assertNotEquals("ȘŦŗÍñĝ", $s->first(5));
    }
}
