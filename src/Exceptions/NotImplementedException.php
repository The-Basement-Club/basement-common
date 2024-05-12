<?php

namespace TheBasement\Common;

use DomainException;

class NotImplementedException extends DomainException
{
    public function __construct(string $message = 'This feature has not been implemented yet.', ?\Throwable $throwable = null)
    {
        parent::__construct($message, 555, $throwable);
    }
}
