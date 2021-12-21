<?php

class CountryObject extends DomainObject
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function properties(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }
}