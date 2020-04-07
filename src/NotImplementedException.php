<?php

namespace Kregel\Basement;

use DomainException;
use Illuminate\Contracts\Support\Responsable;

/**
 * For the moment we want to be able to handle unsupported features in a graceful way in the frontend. Giving this a unique
 * response code, and a specific format for the response will help us do that. The idea behind the 555 response code is a
 * reference to the fake numbers which are given in movies, and will indicate a feature "exists" but the feature isn't implemented.
 */
class NotImplementedException extends DomainException implements Responsable
{
    public function __construct(string $message = "This feature has not been implemented yet.", ?\Throwable $throwable = null)
    {
        parent::__construct($message, 555, $throwable);
    }

    public function toResponse($request)
    {
        return response()->json([
            'message' => $this->message
        ], $this->code);
    }
}
