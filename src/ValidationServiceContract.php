<?php

namespace Kregel\Basement;

interface ValidationServiceContract
{
    public function serverRules(): array;
    public function serverKeyRules(): array;
}
