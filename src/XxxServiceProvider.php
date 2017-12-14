<?php

namespace YourVendor;


use TheCodingMachine\Funky\Annotations\Factory;
use TheCodingMachine\Funky\ServiceProvider;

class XxxServiceProvider extends ServiceProvider
{
    /**
     * @Factory()
     * @return MyService
     */
    public function getMyService(): MyService
    {
        return new MyService;
    }
}
