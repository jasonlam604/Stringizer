<?php
use Stringizer\Stringizer;

/**
 * ConcatTest Unit Tests
 */
class ConcatTest extends PHPUnit_Framework_TestCase
{

    public function testConcat()
    {
        $s = new Stringizer("fizz");
        $this->assertEquals("fizz buzz", $s->concat(" buzz"));
    }

    public function testPreConcat()
    {
        $s = new Stringizer("fizz");
        $this->assertEquals("buzz fizz", $s->concat("buzz ", true));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testInvalidArgumentNull()
    {
        $s = new Stringizer("fizz");
        $s->concat(null);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testInvalidArgumentNullPreAppend()
    {
        $s = new Stringizer("fizz");
        $s->concat(null, true);
    }
}
