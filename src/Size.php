<?php

namespace Kregel\Basement;

abstract class Size
{
    /**
     * @var string|int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var boolean
     */
    public $is_available;
}
