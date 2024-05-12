<?php

declare(strict_types=1);

namespace TheBasement\Common\Contracts\Services;

/**
 * This domain service operates under the assumption the domain exists.
 * It does not interact with WhoIS and will not look up records.
 */
interface DomainServiceContract
{
    public function createDomain(string $domain): array;

    /**
     * Domain or identifier for the platform
     */
    public function deleteDomain(string $domain): bool;

    public function getDomains(int $limit = 10, int $page = 1): array;

    /**
     * A NULL type will return all DNS records A, CNAME, TXT, etc.
     * Otherwise you can specify a type.
     */
    public function getDns(string $domain, ?string $type = null, int $limit = 10, int $page = 1): array;

    /**
     * Could be an ID or a name depending on the provider.
     */
    public function deleteDnsRecord(string $domain, string $dnsRecordId): void;

    /**
     * DNS Records are all inclusive, A, CNAME, TXT, etc.
     */
    public function createDnsRecord(string $domain, array $dnsRecordArray): void;
}
