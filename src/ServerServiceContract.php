<?php

namespace Kregel\Basement;

interface ServerServiceContract
{
    public function createServer(array $config): Server;
    public function createServerKey(array $config): SshKey;

    /**
     * @return Region[]
     */
    public function findAllRegions(): array;

    /**
     * @return Size[]
     */
    public function findAllSizes(): array;

    /**
     * @return Server[]
     */
    public function findAllServers(): array;
    public function removeServerKey($identifier): void;
}
