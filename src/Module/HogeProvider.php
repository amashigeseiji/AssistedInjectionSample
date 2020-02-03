<?php
namespace Amashige\Test\Module;

use Ray\Di\ProviderInterface;

class HogeProvider implements ProviderInterface
{
    public function get()
    {
        return new Hoge();
    }
}
