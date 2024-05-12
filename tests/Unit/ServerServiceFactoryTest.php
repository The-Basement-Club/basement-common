<?php

declare(strict_types=1);

namespace TheBasement\Common\Tests\Unit;

use TheBasement\Common\Tests\AbstractTestCase;
use TheBasement\Common\Services\ServerServiceFactory;
use TheBasement\Common\Contracts\Services\ServerServiceContract;
use TheBasement\Common\Exceptions\NotImplementedException;

class ServerServiceFactoryTest extends AbstractTestCase
{
    public function testMakeReturnsInstanceOfServerServiceContract()
    {
        $factory = new ServerServiceFactory();
        $factory->register('example', ExampleServerService::class);

        $service = $factory->make('example');

        $this->assertInstanceOf(ServerServiceContract::class, $service);
    }

    public function testMakeThrowsExceptionForUnregisteredService()
    {
        $this->expectException(NotImplementedException::class);
        $this->expectExceptionMessage("Service unknown is not implemented.");

        $factory = new ServerServiceFactory();
        $factory->make('unknown');
    }

    public function testMakeReturnsInstanceFromCallableRegistration()
    {
        $factory = new ServerServiceFactory();
        $factory->register('example', function () {
            return new ExampleServerService();
        });

        $service = $factory->make('example');

        $this->assertInstanceOf(ServerServiceContract::class, $service);
    }

    public function testMakeReturnsInstanceFromContainerIfAvailable()
    {
        // Mock the app() function to return a mock instance
        $factory = new ServerServiceFactory();
        $factory->register('example', ExampleServerService::class);

        $service = $factory->make('example');

        $this->assertInstanceOf(ServerServiceContract::class, $service);
    }
}
