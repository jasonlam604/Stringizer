<?php
use Stringizer\Stringizer;

/**
 * HasUppercaseTest Unit Tests
 */
class HasUppercaseTest extends PHPUnit_Framework_TestCase
{

    public function testValidHasUppercase()
    {
        $s = new Stringizer("ABCDEF");
        $this->assertEquals(true, $s->hasUppercase());

        $s = new Stringizer("STÃÑ");
        $this->assertEquals(true, $s->hasUppercase());
    }

    public function testInValidHasUppercase()
    {
        $s = new Stringizer("ABcD");
        $this->assertEquals(false, $s->hasUppercase());

        $s = new Stringizer("sÑÃ");
        $this->assertEquals(false, $s->hasUppercase());
    }
}
