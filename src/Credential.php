<?php

namespace Kregel\Basement;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $user_id
 * @property string $name Just a pretty name for the credential in the database
 * @property string $type just a slugified version of the name. Essentially used in a switch statement to build the services
 * @property string $access_token Passed to services. May also be an API key, or app username
 * @property string $refresh_token Passed to services. May also be an app password.
 * @property boolean $enabled_on A nullable timestamp for when the user enabled the service, if it's null, it's assumed to be disabled.
 */
class Credential extends Model
{
    public $fillable = [
        'user_id',
        'name',
        'type',
        'access_token',
        'refresh_token',
        'enabled_on',
    ];
}
