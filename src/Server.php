<?php

namespace Kregel\Basement;

use Carbon\Carbon;

/**
 * @method null|Server firstWhere(string $param, $value);
 * @method Server create(array $data);
 * @property string $name
 * @property string $threads
 * @property string $memory
 * @property boolean $is_hypervisor
 * @property boolean $collect_metrics
 * @property boolean $uses_client
 * @property boolean $has_backup
 * @property boolean $is_powered_on
 * @property string $ip_address
 * @property string $ip_v6_address
 * @property string $kernel
 * @property string $distro
 * @property string $boot_disk
 * @property string $filesystem_format
 * @property integer $cost_in_cents
 * @property integer $credential_id
 * @property integer $user_id
 * @property Carbon $locked_at
 * @property integer $locked_by_action_id
 */
interface Server {}
