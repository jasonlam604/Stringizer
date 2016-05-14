<?php
use Stringizer\Stringizer;

/**
 * Uppercase Unit Tests
 */
class UppercaseTest extends PHPUnit_Framework_TestCase
{

    public function testUppercase()
    {
        $s = new Stringizer("fIzz");
        $this->assertEquals("FIZZ", $s->uppercase());
    }

    public function testNoImpactToMultiByte()
    {
        $s = new Stringizer("こんにちは世界");
        $this->assertEquals("こんにちは世界", $s->uppercase());
    }
}
