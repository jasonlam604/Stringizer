<?php
use Stringizer\Stringizer;

/**
 * LineCountTest Unit Tests
 */
class LineCountTest extends PHPUnit_Framework_TestCase
{

    public function testValidNoLine()
    {
        $s = new Stringizer("");
        $this->assertEquals(0, $s->lineCount());
    }

    public function testValid1Line()
    {
        $s = new Stringizer("ȘŦŗÍñĝìzĕŕ\n");
        $this->assertEquals(1, $s->lineCount());
    }

    public function testValid2Lines()
    {
        $s = new Stringizer("ȘŦŗÍñĝìzĕŕ\nȘŦŗÍñĝìzĕŕ\nȘŦŗÍñĝìzĕŕ");
        $this->assertEquals(2, $s->lineCount());
    }

    public function testValidManyLines()
    {
        $s = new Stringizer("ȘŦŗÍñĝìzĕŕ\nȘŦŗÍñĝìzĕŕ\n\n\n\n\nȘŦŗÍñĝìzĕŕ\n\n\n\n\n\n\n\n");
        $this->assertEquals(14, $s->lineCount());
    }
}
