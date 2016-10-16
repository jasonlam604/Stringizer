<?php
namespace Stringizer\Transformers;

use Stringizer\Stringizer;

/**
 * Repeat - Returns a string repeated n times.
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Repeat extends Transformer implements TransformerInterface
{

    private $repeatNum;

    public function __construct($value, $repeatNum)
    {
        parent::__construct($value);

        $this->repeatNum = $repeatNum;
    }

    public function execute()
    {
        $s = new Stringizer($this->repeatNum);

        if ($s->isNumber() && $this->repeatNum > 0) {

            $value = "";

            for ($i = 0; $i < $this->repeatNum; $i++) {
                $value .= $this->getValue();
            }

            return $value;
        } else {
            // Do nothing just return the same value
            return $this->getValue();
        }
    }
}
