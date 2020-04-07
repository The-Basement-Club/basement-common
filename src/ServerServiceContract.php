<?php

namespace Kregel\Basement;

interface ServerServiceContract
{
    public function createServer(array $config): Server;
    public function createServerKey(array $config): SshKey;
    public function removeServerKey($identifier): void;

    public function deleteServer(int $identifier): void;

    /**
     * Power off is generally considered a hard shutdown, similar to cutting the power.
     */
    public function powerOnServer(int $identifier): void;
    public function powerOffServer(int $identifier): void;
    public function shutdownServer(int $identifier): void;
    public function rebootServer(int $identifier): void;

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

    /**
     * @return SshKey[]
     */
    public function findAllSshkeys(): array;
}
