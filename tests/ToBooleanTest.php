<?php
use Stringizer\Stringizer;
use Stringizer\Transformers\BooleanConverter;

/**
 * ToBooleanTest Unit Tests
 */
class ToBooleanTest extends PHPUnit_Framework_TestCase
{

    public function testBoolean()
    {
        $s = new Stringizer(false);
        $this->assertEquals(false, $s->toBoolean());

        $s = new Stringizer(true);
        $this->assertEquals(true, $s->toBoolean());
    }

    public function testStringTrue()
    {
        $s = new Stringizer("yes");
        $this->assertEquals(true, $s->toBoolean());

        $s = new Stringizer("true");
        $this->assertEquals(true, $s->toBoolean());

        $s = new Stringizer("on");
        $this->assertEquals(true, $s->toBoolean());
    }

    public function testStringFalse()
    {
        $s = new Stringizer("no");
        $this->assertEquals(false, $s->toBoolean());

        $s = new Stringizer("false");
        $this->assertEquals(false, $s->toBoolean());

        $s = new Stringizer("off");
        $this->assertEquals(false, $s->toBoolean());

        $s = new Stringizer("bad-value");
        $this->assertEquals(false, $s->toBoolean());
    }

    public function testNumber()
    {
        $s = new Stringizer(0);
        $this->assertEquals(false, $s->toBoolean());

        $s = new Stringizer(1);
        $this->assertEquals(true, $s->toBoolean());
    }

    /**
     * This test is required because Stringizer cast given values string.
     *
     * Direct test for 100% code coverage testing
     */
    public function testBooleanConverterDirectly()
    {
        $booleanConverter = new BooleanConverter(true);
        $this->assertEquals(true, $booleanConverter->execute());

        $booleanConverter = new BooleanConverter(false);
        $this->assertEquals(false, $booleanConverter->execute());

        $booleanConverter = new BooleanConverter(1);
        $this->assertEquals(true, $booleanConverter->execute());

        $booleanConverter = new BooleanConverter(0);
        $this->assertEquals(false, $booleanConverter->execute());

        $booleanConverter = new BooleanConverter(39450340);
        $this->assertEquals(false, $booleanConverter->execute());

        $booleanConverter = new BooleanConverter(- 1);
        $this->assertEquals(false, $booleanConverter->execute());
    }
}
