<?php
use Stringizer\Stringizer;

/**
 * CameleToSnake Unit Tests
 */
class CameleToSnakeTest extends PHPUnit_Framework_TestCase
{

    public function testCamelToSnake()
    {
        $s = new Stringizer("helloWorld");
        $this->assertEquals("hello_world", $s->camelToSnake());

        $s = new Stringizer("MyFunctionName");
        $this->assertEquals("_my_function_name", $s->camelToSnake());

        $s = new Stringizer("helloSŦŗÍñĝìzĕŕ");
        $this->assertEquals("hello_sŦŗÍñĝìzĕŕ", $s->camelToSnake());
    }
}
