<?php

namespace TheBasement\Common\Contracts\Services;

use TheBasement\Common\Contracts\Models\Serverlike;
use TheBasement\Common\Contracts\Models\SshKeylike;

interface ServerServiceContract
{
    public function createServer(array $config): Serverlike;

    public function deleteServer(int|string $identifier): void;

    // SSH key management may not be possible depending on the API connector.
    public function createServerKey(array $config): SshKeylike;

    public function removeServerKey(int|string $identifier): void;

    /**
     * Power off is generally considered a hard shutdown, similar to cutting the power.
     */
    public function powerOnServer(int|string $identifier): void;

    /**
     * Power off is generally considered a hard shutdown, similar to cutting the power.
     */
    public function powerOffServer(int|string $identifier): void;

    /**
     * Soft shutdown is generally considered a graceful shutdown, similar to pressing the power button.
     */
    public function shutdownServer(int|string $identifier): void;

    public function rebootServer(int|string $identifier): void;

    /**
     * @return Region[]
     */
    public function findAllRegions(): array;

    /**
     * @return Size[]
     */
    public function findAllSizes(): array;

    /**
     * @return Serverlike[]
     */
    public function findAllServers(): array;

    /**
     * @return SshKey[]
     */
    public function findAllSshkeys(): array;
}
