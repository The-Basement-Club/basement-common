<?php

namespace TheBasement\Common\Contracts\Models;

use Carbon\Carbon;

/**
 * @property string $name
 * @property string $threads
 * @property string $memory
 * @property bool $is_hypervisor
 * @property bool $collect_metrics
 * @property bool $uses_client
 * @property bool $has_backup
 * @property bool $is_powered_on
 * @property string $ip_address
 * @property string $ip_v6_address
 * @property string $kernel
 * @property string $distro
 * @property string $boot_disk
 * @property string $filesystem_format
 * @property int $cost_in_cents
 * @property int $credential_id
 * @property int $user_id
 * @property Carbon $locked_at
 * @property int $locked_by_action_id
 */
interface Serverlike
{
}
