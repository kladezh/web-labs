<?php

class TourObject extends DomainObject
{
    private $name;
    private $preview_img;
    private $country;
    private $description;
    private $cost;
    private $uuid;

    public function __construct(
        string $name,
        string $preview_img,
        string $country,
        string $description,
        int $cost,
        int $id = null,
        string $uuid = null
    ) {
        $this->name = $name;
        $this->preview_img = $preview_img;
        $this->country = $country;
        $this->description = $description;
        $this->cost = $cost;

        $this->uuid = $uuid;
        parent::__construct($id);
    }

    public function setUuid(string $uuid) 
    {
        $this->uuid = $uuid;
    }

    public function properties(): array
    {
        return [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'name' => $this->name,
            'preview_img' => $this->preview_img,
            'country' => $this->country,
            'description' => $this->description,
            'cost' => $this->cost,
        ];
    }
}