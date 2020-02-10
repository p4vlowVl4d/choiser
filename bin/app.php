<?php
require dirname(__DIR__) . '/vendor/autoload.php';

try {
    $themes = new \P4vlowVl4d\Collection\ArrayCollection();
    global $themes;

    $application = (new \App\Application())->init();
} catch (\Throwable $e) {
    echo sprintf('Fatal error: %s', $e->getMessage()) . PHP_EOL;
}