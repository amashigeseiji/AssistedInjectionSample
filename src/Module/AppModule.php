<?php
namespace Amashige\Test\Module;

use BEAR\Package\AbstractAppModule;
use BEAR\Package\PackageModule;
use josegonzalez\Dotenv\Loader;

class AppModule extends AbstractAppModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure() : void
    {
        $env = dirname(__DIR__) . '/.env';
        if (file_exists($env)) {
            (new Loader($env))->parse()->putenv(true);
        }
        $this->bind(HogeInterface::class)->toProvider(HogeProvider::class);
        $this->install(new PackageModule);
    }
}
