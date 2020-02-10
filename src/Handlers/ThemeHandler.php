<?php declare(strict_types=1);

namespace App\Handles;

use P4vlowVl4d\Collection\Collection;

/**
 * Class ThemeHandler
 * @package App\Handles
 */
class ThemeHandler
{
    /**
     * @var Collection
     */
    private Collection $themes;

    /**
     * ThemeHandler constructor.
     * @param Collection $themes
     */
    public function __construct(Collection $themes)
    {
        $this->themes = $themes;
    }

}