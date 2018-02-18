<?php
use Stringizer\Stringizer;

/**
 * Delete Unit Tests
 */
class DeleteTest extends PHPUnit_Framework_TestCase
{

    public function testDeleteString()
    {
        $s = new Stringizer("Fizz Buzz Fizz Buzz Fizz Buzz");
        $this->assertEquals("Fizz  Fizz  Fizz ", $s->delete("Buzz"));

        $s = new Stringizer("Fizz Buzz Fizz Buzz Fizz Buzz");
        $this->assertEquals("Fizz Fizz Fizz", $s->delete(" Buzz"));
    }

    public function testDeleteChar()
    {
        $s = new Stringizer("Fizz Fizz Fizz");
        $this->assertEquals("izz izz izz", $s->delete("F"));
    }

    public function testDeleteCharMultiByte()
    {
        $s = new Stringizer("Fizz 列Fizz列 Fizz");
        $this->assertEquals("Fizz Fizz Fizz", $s->delete("列"));
    }

    public function testDeleteStringArray()
    {
        $s = new Stringizer("Fizz Buzz Fizz Buzz Fizz Buzz");
        $this->assertEquals("     ", $s->delete(array(
            "Fizz",
            "Buzz"
        )));
    }

    public function testDeleteStringArrayMultiByte()
    {
        $s = new Stringizer("Fizz列Buzz列Fizz列Buzz列Fizz列Buzz");
        $this->assertEquals("列列列列列", $s->delete(array(
            "Fizz",
            "Buzz"
        )));

        $s = new Stringizer("Fizz列Buzz列Fizz列Buzz列Fizz列Buzz");
        $this->assertEquals("FizzFizzFizz", $s->delete(array(
            "Buzz",
            "列"
        )));
    }
}
