<?php
use Stringizer\Stringizer;

/**
 * Date Unit Tests
 */
class DateTest extends PHPUnit_Framework_TestCase
{

    public function testValidDate()
    {
        date_default_timezone_set('America/Vancouver');

        $s = new Stringizer("January 1st");
        $this->assertEquals(true, $s->isDate());

        $s = new Stringizer("2015-03-15");
        $this->assertEquals(true, $s->isDate());

        $s = new Stringizer("1 week ago");
        $this->assertEquals(true, $s->isDate());
    }

    public function testInValidDate()
    {
        date_default_timezone_set('America/Vancouver');

        $s = new Stringizer("Bad Date Input");
        $this->assertEquals(false, $s->isDate());
    }
}
