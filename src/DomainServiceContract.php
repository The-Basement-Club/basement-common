<?php

namespace Kregel\Basement;

interface DomainServiceContract
{
    public function findAll(): array;
    public function create(array $configuration): Domain;
}
