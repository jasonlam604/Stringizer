<?php
namespace Stringizer\Transformers;

use Stringizer\Transformers\StringFindPosition;

/**
 * Contains - Search for string within another string, return true if found else return false
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Contains extends TransformerCaseInsensitive implements TransformerInterface
{

    private $needle;

    public function __construct($value, $needle)
    {
        parent::__construct($value);
        $this->needle = $needle;
    }

    public function execute()
    {
        if ($this->isCaseInsensitive()) {

            if ((new StringFindPosition($this->getValue(), $this->needle))->enableCaseInsensitive()->execute()) {
                return true;
            } else {
                return false;
            }
        } else {

            if ((new StringFindPosition($this->getValue(), $this->needle))->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
}
