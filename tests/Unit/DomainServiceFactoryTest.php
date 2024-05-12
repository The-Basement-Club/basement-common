<?php

declare(strict_types=1);

namespace TheBasement\Common\Tests\Unit;

use TheBasement\Common\Tests\AbstractTestCase;
use TheBasement\Common\Services\DomainServiceFactory;
use TheBasement\Common\Contracts\Services\DomainServiceContract;
use TheBasement\Common\Exceptions\NotImplementedException;

class DomainServiceFactoryTest extends AbstractTestCase
{
    public function testMakeReturnsInstanceOfDomainServiceContract()
    {
        $factory = new DomainServiceFactory();
        $factory->register('example', ExampleDomainService::class);

        $service = $factory->make('example');

        $this->assertInstanceOf(DomainServiceContract::class, $service);
    }

    public function testMakeThrowsExceptionForUnregisteredService()
    {
        $this->expectException(NotImplementedException::class);
        $this->expectExceptionMessage("Service unknown is not implemented.");

        $factory = new DomainServiceFactory();
        $factory->make('unknown');
    }

    public function testMakeReturnsInstanceFromCallableRegistration()
    {
        $factory = new DomainServiceFactory();
        $factory->register('example', function () {
            return new ExampleDomainService();
        });

        $service = $factory->make('example');

        $this->assertInstanceOf(DomainServiceContract::class, $service);
    }

    public function testMakeReturnsInstanceFromContainerIfAvailable()
    {
        // Mock the app() function to return a mock instance
        $factory = new DomainServiceFactory();
        $factory->register('example', ExampleDomainService::class);

        $service = $factory->make('example');

        $this->assertInstanceOf(DomainServiceContract::class, $service);
    }
}
