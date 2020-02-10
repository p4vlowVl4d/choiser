<?php


namespace App\Theme\Theme;


use P4vlowVl4d\Collection\Collection;

interface Theme
{
    public function name(): string;

    public function participants(): Collection;
}