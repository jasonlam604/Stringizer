<?php
namespace Stringizer\Transformers;

use Cocur\Slugify\Slugify;

/**
 * ReplaceAccents - Replace characters with accents with the same character without accents.
 *
 * Wrapper for cocur/slugify, see https://github.com/cocur/slugify
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE (MIT License)
 *         
 */
class ReplaceAccents extends Transformer implements TransformerInterface
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
