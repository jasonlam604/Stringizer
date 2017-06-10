<?php
use Stringizer\Stringizer;

/**
 * Json Unit Tests
 */
class JsonTest extends PHPUnit_Framework_TestCase
{

    public function testValidJson()
    {
        $s = new Stringizer("{\"Hello\" : \"World\"}");
        $this->assertEquals(true, $s->isJson());

        $s = new Stringizer("{\"foo\" : {
          \"bar\" : \"Hello\",
          \"baz\" : [ \"quuz\", \"norf\" ]
        }}");
        $this->assertEquals(true, $s->isJson());

        $s = new Stringizer("{\"foo\" : {
          \"bar\" : \"Hello\"
        }}");
        $this->assertEquals(true, $s->isJson());
    }

    public function testInValidJson()
    {
        $s = new Stringizer("{}");
        $this->assertEquals(false, $s->isJson());

        $s = new Stringizer("");
        $this->assertEquals(false, $s->isJson());
    }
}
