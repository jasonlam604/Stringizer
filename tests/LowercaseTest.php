<?php
use Stringizer\Stringizer;

/**
 * Lowercase Unit Tests
 */
class LowercaseTest extends PHPUnit_Framework_TestCase
{

    public function testLowercase()
    {
        $s = new Stringizer("FiZZ");
        $this->assertEquals("fizz", $s->lowercase());
    }

    public function testNoImpactToMultiByte()
    {
        $s = new Stringizer("こんにちは世界");
        $this->assertEquals("こんにちは世界", $s->lowercase());
    }
}
