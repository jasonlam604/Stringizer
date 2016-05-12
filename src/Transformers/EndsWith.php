<?php
namespace Stringizer\Transformers;

/**
 * EndsWith - Checks if a string ends with the specified suffix.
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 */
class EndsWith extends Transformer implements TransformerInterface
{

    private $needle;

    public function __construct($value, $needle)
    {
        parent::__construct($value);

        $this->needle = $needle;
    }

    /**
     * EndsWith
     */
    public function execute()
    {
        return (mb_substr($this->getValue(), - (mb_strlen($this->needle))) === $this->needle);
    }
}
