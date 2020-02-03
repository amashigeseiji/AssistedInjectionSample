<?php
namespace Amashige\Test\Module;

class Hoge implements HogeInterface
{
    public function get()
    {
        return new self();
    }
}
