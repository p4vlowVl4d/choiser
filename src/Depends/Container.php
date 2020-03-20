<?php

namespace App\Depends;


use P4vlowVl4d\Collection\ArrayCollection;

class Container
{
    /**
     * @var ArrayCollection
     */
    protected ArrayCollection $factories;

    /**
     * @var array
     */
    protected array $services;

    /**
     * Container constructor.
     * @param array $factories
     * @param array $services
     */
    public function __construct(array $factories, array $services)
    {
        $this->factories = new ArrayCollection($factories);
        $this->services = $services;
    }

    public function service(string $class): object
    {
    }
}