<?php

declare(strict_types=1);
namespace TheBasement\Common\Tests\Unit;

use TheBasement\Common\Contracts\Services\DomainServiceContract;
use TheBasement\Common\Exceptions\NotImplementedException;

class ExampleDomainService implements DomainServiceContract
{
    public function createDnsRecord(string $domain, array $dnsRecordArray): void
    {
        throw new NotImplementedException('Service unknown is not implemented');
    }

    public function createDomain(string $domain): array
    {
        throw new NotImplementedException('Service unknown is not implemented');
    }

    public function deleteDnsRecord(string $domain, string $dnsRecordId): void
    {
        throw new NotImplementedException('Service unknown is not implemented');
    }

    public function deleteDomain(string $domain): bool
    {
        throw new NotImplementedException('Service unknown is not implemented');
    }

    public function getDns(string $domain, ?string $type = null, int $limit = 10, int $page = 1): array
    {
        throw new NotImplementedException('Service unknown is not implemented');
    }

    public function getDomains(int $limit = 10, int $page = 1): array
    {
        throw new NotImplementedException('Service unknown is not implemented');
    }
}