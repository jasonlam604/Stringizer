<?php
use Stringizer\Stringizer;

/**
 * SentenceCount Unit Tests
 */
class SentenceCountTest extends PHPUnit_Framework_TestCase
{

    public function testValidNone()
    {
        // Missing Period so it doesn't count as sentence
        $s = new Stringizer("Jack jumped over the candle stick");
        $this->assertEquals(0, $s->sentenceCount());
    }

    public function testValid1Sentence()
    {
        $s = new Stringizer("Jack jumped over the candle stick.");
        $this->assertEquals(1, $s->sentenceCount());
    }

    public function testValid3Sentences()
    {
        $s = new Stringizer("ȘŦŗÍñĝìzĕŕ jumped over the stringy stick. ȘŦŗÍñĝìzĕŕ jumped over the stringy stick again!  Or did it?");
        $this->assertEquals(3, $s->sentenceCount());
    }

    public function testValidMultiSentence()
    {
        $s = new Stringizer("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed turpis ac elit viverra luctus id nec ex. Pellentesque consequat leo velit,
            pulvinar varius mauris interdum vehicula. Cras nisl risus, posuere ac mi ac, tempus blandit nunc. Praesent tempus lorem id urna mollis,
            quis mollis nisi convallis. Mauris nisi odio, placerat vitae risus eu, maximus tincidunt diam. Pellentesque hendrerit mi ut nunc lacinia
            tempus. Fusce ac eleifend nunc, consectetur elementum odio. Sed faucibus scelerisque lacus at pharetra. Etiam eu rutrum nulla. Suspendisse potenti.
            In interdum diam eros, vitae efficitur lacus dignissim vitae. Praesent malesuada euismod quam in volutpat. Aenean non varius ipsum. Vestibulum ante
            ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam euismod non urna ut porttitor. In euismod ornare felis, sed eleifend
            elit tempus ut! Vivamus auctor, odio quis commodo lacinia, elit turpis euismod dolor, ut mollis lacus risus non diam. In lorem neque, dictum et sapien
            ac, maximus luctus enim. Integer sed ex ac enim tempor commodo in dignissim felis. Phasellus at pulvinar mi. Vivamus quis ante at lectus lacinia
            condimentum non sit amet justo. Aenean eget leo semper, dignissim ligula nec, rhoncus lorem. Nullam vestibulum aliquet enim, a egestas est
            pellentesque at. Curabitur purus tortor, suscipit quis lacus quis, consequat rutrum felis.Duis vestibulum elit vel eros feugiat, eget ullamcorper dui
            condimentum. Maecenas maximus pretium diam, eget gravida odio malesuada consectetur. Fusce ullamcorper porta magna, sit amet elementum nisl porttitor vitae.
            Curabitur convallis in mauris eu posuere. Suspendisse eu condimentum leo, id laoreet ex. Maecenas id neque tristique, dapibus quam a, blandit leo. Fusce
            ornare semper massa, sed aliquet tortor condimentum ac. Nullam semper porta rutrum. Morbi arcu nunc, porta ut tellus varius, suscipit iaculis felis. Vestibulum
            ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse vestibulum faucibus dui, et cursus arcu malesuada quis. Sed
            eget sapien sit amet enim pretium mattis. Aenean pulvinar auctor leo, in lacinia urna ultricies in. Suspendisse at velit vestibulum, maximus risus sit amet,
            fringilla ipsum? Nullam congue, quam et tincidunt placerat, diam felis semper erat, at tempor libero neque eget magna. Quisque fermentum, massa eu sollicitudin
            mollis, libero urna tincidunt enim, laoreet laoreet nisl ligula sed felis. Ut id risus sagittis, tincidunt sem facilisis, tincidunt diam. Cras auctor mauris vel
            libero bibendum, eu sodales est tempus. Sed molestie eget ante a rhoncus. Praesent semper suscipit leo eget pharetra. In luctus mi dui, eget pellentesque arcu
            auctor nec. Suspendisse potenti.");
        $this->assertEquals(45, $s->sentenceCount());
    }
}
