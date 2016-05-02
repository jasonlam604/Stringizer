<?php
namespace Stringizer\Transformers;

use Cocur\Slugify\Slugify;

/**
 * RemoveAccents - Slugify string
 *
 * Wrapper for cocur/slugify, see https://github.com/cocur/slugify
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 *
 */
class RemoveAccents extends Transformer implements TransformerInterface
{

    private $slugify;

    public function __construct($value)
    {
        parent::__construct($value);

        $this->slugify = new Slugify([
            'lowercase' => false
        ]);
    }

    /**
     * Slugify string
     */
    public function execute()
    {
        return $this->slugify->slugify($this->getValue(), " ");
    }
}