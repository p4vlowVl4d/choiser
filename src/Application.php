<?php declare(strict_types=1);

namespace App;

use App\Depends\Container;
use P4vlowVl4d\Collection\ArrayCollection;

global $themes;
/**
 * Class Application
 * @package App
 */
class Application
{
    /**
     * @var Container
     */
    protected Container $container;

    /**
     * @return Application
     */
    public function init(): Application
    {
        $server = require dirname(__DIR__) . '/config/server.php';
        $services = require dirname(__DIR__) . '/config/services.php';
        $factorise = require dirname(__DIR__) . '/config/factories.php';
        return $this;
    }

    protected function resolve(string $service)
    {
       return $this->container->service($service);
    }

    /**
     * @param string $path
     */
    private function configure(string $path)
    {

    }
}