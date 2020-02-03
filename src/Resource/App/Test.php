<?php
namespace Amashige\Test\Resource\App;

use Amashige\Test\Module\HogeInterface;
use BEAR\Resource\ResourceObject;
use Ray\Di\Di\Assisted;

class Test extends ResourceObject
{
    /**
     * @Assisted({"hoge"})
     */
    public function onGet(HogeInterface $hoge = null) : ResourceObject
    {
        var_dump($hoge);

        return $this;
    }
}
