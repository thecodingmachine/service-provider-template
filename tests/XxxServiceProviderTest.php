<?php

namespace YourVendor;

use PHPUnit\Framework\TestCase;
use Simplex\Container;

class XxxServiceProviderTest extends TestCase
{
    public function testServiceProvider(): void
    {
        $container = new Container([new XxxServiceProvider()]);
    }
}
