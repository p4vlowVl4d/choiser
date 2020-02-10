<?php declare(strict_types=1);

namespace App;

use App\Depends\Container;
use P4vlowVl4d\Collection\ArrayCollection;

/**
 * Class Application
 * @package App
 */
class Application
{
    /**
     * @var Container
     */
    private ArrayCollection $services;

    /**
     * @var Container
     */
    private ArrayCollection $configuration;

    /**
     * @return Application
     */
    public function init(): Application
    {
        $server = require dirname(__DIR__) . '/config/server.php';
        $services = require dirname(__DIR__) . '/config/services.php';
        return $this;
    }

    protected function resolve()
    {

    }

    /**
     * @param string $path
     */
    private function configure(string $path)
    {

    }
}