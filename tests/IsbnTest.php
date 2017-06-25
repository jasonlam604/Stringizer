<?php
use Stringizer\Stringizer;

/**
 * ISBN Unit Tests
 */
class IsbnTest extends PHPUnit_Framework_TestCase
{

    public function testIsbn10Valid()
    {
        $s = new Stringizer("ISBN:0-306-40615-2");
        $this->assertEquals(true, $s->isIsbn10());

        $s->setString("0-306-40615-2");
        $this->assertEquals(true, $s->isIsbn10());

        $s->setString("ISBN:0306406152");
        $this->assertEquals(true, $s->isIsbn10());

        $s->setString("0306406152");
        $this->assertEquals(true, $s->isIsbn10());
    }

    public function testIsbn13Valid()
    {
        $s = new Stringizer("ISBN:979-1-090-63607-1");
        $this->assertEquals(true, $s->isIsbn13());

        $s->setString("979-1-090-63607-1");
        $this->assertEquals(true, $s->isIsbn13());

        $s->setString("ISBN:9791090636071");
        $this->assertEquals(true, $s->isIsbn13());

        $s->setString("9791090636071");
        $this->assertEquals(true, $s->isIsbn13());
    }

    public function testIsbn10Invalid()
    {
        $s = new Stringizer("");
        $this->assertEquals(false, $s->isIsbn10());

        $s->setString("bad");
        $this->assertEquals(false, $s->isIsbn10());

        $s->setString("928-9402221191");
        $this->assertEquals(false, $s->isIsbn10());

        $s->setString("3-353-22452-34");
        $this->assertEquals(false, $s->isIsbn10());

        $s->setString("3 399 21452 1");
        $this->assertEquals(false, $s->isIsbn10());
    }

    public function testIsbn13Invalid()
    {
        $s = new Stringizer("");
        $this->assertEquals(false, $s->isIsbn13());

        $s->setString("bad");
        $this->assertEquals(false, $s->isIsbn13());

        $s->setString("3-4893-2930-5");
        $this->assertEquals(false, $s->isIsbn13());

        $s->setString("01234567890ab");
        $this->assertEquals(false, $s->isIsbn13());

        $s->setString("978 3 8362 2119 0");
        $this->assertEquals(false, $s->isIsbn13());
    }
}
