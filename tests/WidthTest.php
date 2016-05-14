<?php
use Stringizer\Stringizer;

/**
 * Width Unit Tests
 */
class WidthTest extends PHPUnit_Framework_TestCase
{

    public function testWidth()
    {
        $s = new Stringizer("FizzBuzz");
        $this->assertEquals(8, $s->length());
    }

    public function testWidthMultiByte()
    {
        $s = new Stringizer("キラキラした");
        $this->assertEquals(12, $s->width());
    }
}
