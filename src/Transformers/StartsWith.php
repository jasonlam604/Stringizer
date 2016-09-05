<?php
namespace Stringizer\Transformers;

/**
 * StartsWith - Checks if a string starts with the specified suffix.
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class StartsWith extends Transformer implements TransformerInterface
{

    private $needle;

    public function __construct($value, $needle)
    {
        parent::__construct($value);

        $this->needle = $needle;
    }

    /**
     * StartsWith
     */
    public function execute()
    {
        return (mb_substr($this->getValue(), 0, mb_strlen($this->needle)) === $this->needle);
    }
}
