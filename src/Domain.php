<?php

namespace Kregel\Basement;

abstract class Domain
{
    /**
     * @var string|int
     */
    public $id;

    /**
     * The record type. A, CNAME, NS, MX, etc...
     * @var string
     */
    public $type;

    /**
     * The name of the record. `www`, `dev`, `test`, `prod1`, `ns1`, etc..
     * @var string
     */
    public $name;

    /**
     * The ip address for the record
     * @var string
     */
    public $address;

    /**
     * @var int|null
     */
    public $tls;

    /**
     * @var int|null
     */
    public $priority;
}
