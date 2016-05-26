<?php
use Stringizer\Stringizer;

/**
 * Decimal Unit Tests
 */
class DecimalTest extends PHPUnit_Framework_TestCase
{

    public function testValidDecimal()
    {
        $s = new Stringizer("987654321.123456789");
        $this->assertEquals(true, $s->isDecimal());

        $s = new Stringizer("987654321");
        $this->assertEquals(true, $s->isDecimal());

        $s = new Stringizer(".123456789");
        $this->assertEquals(true, $s->isDecimal());

        $s = new Stringizer("0.123456789");
        $this->assertEquals(true, $s->isDecimal());

        $s = new Stringizer("1");
        $this->assertEquals(true, $s->isDecimal());

        $s = new Stringizer("1.1");
        $this->assertEquals(true, $s->isDecimal());

        $s = new Stringizer("0");
        $this->assertEquals(true, $s->isDecimal());

        $s = new Stringizer("0.0");
        $this->assertEquals(true, $s->isDecimal());

        $s = new Stringizer("0.00");
        $this->assertEquals(true, $s->isDecimal());

        $s = new Stringizer("-0");
        $this->assertEquals(true, $s->isDecimal());

        $s = new Stringizer("-0.0");
        $this->assertEquals(true, $s->isDecimal());

        $s = new Stringizer("-0.00");
        $this->assertEquals(true, $s->isDecimal());

        $s = new Stringizer("-1.1");
        $this->assertEquals(true, $s->isDecimal());

        $s = new Stringizer("-1");
        $this->assertEquals(true, $s->isDecimal());

        $s = new Stringizer("-0.123456789");
        $this->assertEquals(true, $s->isDecimal());

        $s = new Stringizer("-.123456789");
        $this->assertEquals(true, $s->isDecimal());

        $s = new Stringizer("-987654321");
        $this->assertEquals(true, $s->isDecimal());

        $s = new Stringizer("-987654321.123456789");
        $this->assertEquals(true, $s->isDecimal());
    }

    public function testInValidDecimal()
    {
        $s = new Stringizer("123.0x");
        $this->assertEquals(false, $s->isDecimal());

        $s = new Stringizer("123.0.");
        $this->assertEquals(false, $s->isDecimal());

        $s = new Stringizer("1 23");
        $this->assertEquals(false, $s->isDecimal());
    }
}
