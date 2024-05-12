<?php

declare(strict_types=1);
namespace TheBasement\Common\Tests\Unit;

use TheBasement\Common\Contracts\Models\Serverlike;
use TheBasement\Common\Contracts\Models\SshKeylike;
use TheBasement\Common\Contracts\Services\ServerServiceContract;
use TheBasement\Common\Exceptions\NotImplementedException;

class ExampleServerService implements ServerServiceContract
{
    public function createServer(array $config): Serverlike
    {
        throw new NotImplementedException('Service unknown is not implemented');
    }

    public function createServerKey(array $config): SshKeylike
    {
        throw new NotImplementedException('Service unknown is not implemented');
    }

    public function deleteServer(int|string $identifier): void
    {
        throw new NotImplementedException('Service unknown is not implemented');
    }

    public function findAllRegions(): array
    {
        throw new NotImplementedException('Service unknown is not implemented');
    }

    public function findAllServers(): array
    {
        throw new NotImplementedException('Service unknown is not implemented');
    }

    public function findAllSizes(): array
    {
        throw new NotImplementedException('Service unknown is not implemented');
    }

    public function findAllSshkeys(): array
    {
        throw new NotImplementedException('Service unknown is not implemented');
    }

    public function powerOffServer(int|string $identifier): void
    {
        throw new NotImplementedException('Service unknown is not implemented');
    }

    public function powerOnServer(int|string $identifier): void
    {
        throw new NotImplementedException('Service unknown is not implemented');
    }

    public function rebootServer(int|string $identifier): void
    {
        throw new NotImplementedException('Service unknown is not implemented');
    }

    public function removeServerKey(int|string $identifier): void
    {
        throw new NotImplementedException('Service unknown is not implemented');
    }

    public function shutdownServer(int|string $identifier): void
    {
        throw new NotImplementedException('Service unknown is not implemented');
    }
}