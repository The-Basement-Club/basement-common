<?php

declare(strict_types=1);

namespace TheBasement\Common\Services;

use Closure;
use TheBasement\Common\Contracts\Services\DomainServiceContract;
use TheBasement\Common\Exceptions\NotImplementedException;

/**
 * <code>
 *   $factory = new ServerServiceFactoryService();
 *   // We can pull the instance from the container if you're using Laravel.
 *   $factory->register('digitalocean', DigitalOceanServerService::class);
 *   // Otherwise you can build your own instance.
 *   $factory->register('linode', fn() => new DigitalOceanDomainService(config('services.linode.api_key')));
 *   $factory->register('vultr', fn() => new CloudflareDomainService(app(ObscureDependency::class)));
 *   $factory->register('custom', fn() => new BindDNSService(config('services.custom'));
 *
 *   $serivce = $factory->make('digitalocean');
 *   $service->getDns('example.com');
 * </code>
 *
 * @throws NotImplementedException
 */
class DomainServiceFactory
{
    public function __construct(
        protected array $services = [],
    ) {
    }

    public function make(string $service): DomainServiceContract
    {

        $registeredServices = $this->services[$service] ?? throw new NotImplementedException("Service $service is not implemented.");

        // I'd like to consider, there are multiple packagages running for the same service
        // so one may not support a function, but another might.
        $registeredService = $registeredServices[0] ?? null;

        if (function_exists('app') && is_string($registeredService)) {
            return app($registeredService);
        }

        $instance = is_callable($registeredService)
            ? call_user_func($registeredService)
            : $registeredService;

        if (is_string($instance)) {
            // pretty basic, but it's a start.
            return new $instance;
        }

        return $instance;
    }

    public function register(string $name, string|Closure $service): void
    {
        if (!isset($this->services[$name])) {
            $this->services[$name] = [];
        }
        $this->services[$name][] = $service;
    }
}
