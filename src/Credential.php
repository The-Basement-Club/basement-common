<?php

namespace Kregel\Basement;

use Illuminate\Database\Eloquent\Model;

abstract class Credential extends Model
{
    public $fillable = [
        'user_id',
        'name', // Just a pretty name for the credential in the database
        'type', // just a slugified version of the name. Essentially used in a switch statement to build the services
        'access_token', // Passed to services. May also be an API key, or app username
        'refresh_token', // Passed to services. May also be an app password.
        'enabled_on', // A nullable timestamp for when the user enabled the service, if it's null, it's assumed to be disabled.
    ];

    abstract public function domainService(): ?DomainServiceContract;
    abstract public function serverService(): ?ServerServiceContract;
}
