<?php

namespace Datashaman\Supercluster\Tests;

use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    public function getLogger()
    {
        $logger = new Logger('name');
        $logger->pushHandler(new StreamHandler('tests.log', Level::Debug));

        return $logger;
    }
}
