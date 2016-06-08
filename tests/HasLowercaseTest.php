<?php
use Stringizer\Stringizer;

/**
 * HasLowercaseTest Unit Tests
 */
class HasLowercaseTest extends PHPUnit_Framework_TestCase
{

    public function testValidHasLowercase()
    {
        $s = new Stringizer("abcdedfghijklmnopqrstuvwxyz");
        $this->assertEquals(true, $s->hasLowercase());

        $s = new Stringizer("stŗiñĝìzĕŕ");
        $this->assertEquals(true, $s->hasLowercase());
    }

    public function testInValidHasLowercase()
    {
        $s = new Stringizer("Abcdedfghijklmnopqrstuvwxyz");
        $this->assertEquals(false, $s->hasLowercase());

        $s = new Stringizer("sTŗiñĝìzĕŕ");
        $this->assertEquals(false, $s->hasLowercase());
    }
}
