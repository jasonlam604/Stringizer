<?php
use Stringizer\Stringizer;

/**
 * HashTest Unit Tests
 */
class HashTest extends PHPUnit_Framework_TestCase
{

    public function testValidHash()
    {
        $s = new Stringizer("3ca25ae354e192b26879f651a51d92aa8a34d8d3");
        $this->assertEquals(true, $s->isHash("sha1"));

        $s->setString("3ca25ae354e192b26879f651a51d92aa8a34d8d3");
        $this->assertEquals(true, $s->isHash("Tiger160"));

        $s->setString("579282cfb65ca1f109b78536effaf621b853c9f7079664a3fbe2b519f435898c");
        $this->assertEquals(true, $s->isHash("sha256"));

        $s->setString("bf547c3fc5841a377eb1519c2890344dbab15c40ae4150b4b34443d2212e5b04aa9d58865bf03d8ae27840fef430b891");
        $this->assertEquals(true, $s->isHash("sha384"));

        $s->setString("45bc5fa8cb45ee408c04b6269e9f1e1c17090c5ce26ffeeda2af097735b29953ce547e40ff3ad0d120e5361cc5f9cee35ea91ecd4077f3f589b4d439168f91b9");
        $this->assertEquals(true, $s->isHash("sha512"));

        $s->setString("46fc0125a148788a3ac1d649566fc04eb84a746f1a6e4fa7");
        $this->assertEquals(true, $s->isHash("tiger192"));
    }

    public function testInValidHash()
    {
        $s = new Stringizer("abcdedfghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ");
        $this->assertEquals(false, $s->isHash("md4"));

        $s->setString("3ca25ae354e192b26879f651a51d34d8d3");
        $this->assertEquals(false, $s->isHash("sha1"));

        $s->setString("3ca25ae354e192b26879f651a51d34d8d3");
        $this->assertEquals(false, $s->isHash("ripemd160"));

        $s->setString("579282cfb65ca1f109b78536effaf621b853c9f7079664a3fbe2b519f435898casfdsafsadfsdf");
        $this->assertEquals(false, $s->isHash("sha256"));

        $s->setString("579282cfb65ca1f109b78536effaf621b853c9f7079664a3fbe2b519f435898casfdsafsadfsdf");
        $this->assertEquals(false, $s->isHash("sha384"));

        $s->setString("579282cfb65ca1f109b78536effaf621b853c9f7079664a3fbe2b519f435898casfdsafsadfsdf");
        $this->assertEquals(false, $s->isHash("sha512"));

        $s->setString("46fc0125a148788a3ac1d649566fc04eb84a746f1a6$$%@^");
        $this->assertEquals(false, $s->isHash("TIGER192"));

        $s->setString("46fc0125a148788a3ac1d649566fc04eb84a746f1a6$$%@^");
        $this->assertEquals(false, $s->isHash("SOMEHASH"));
    }
}
