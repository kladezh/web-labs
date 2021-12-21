<?php

abstract class DomainObject
{
    protected $id;

    public function __construct(int $id = null)
    {
        $this->id = $id;
    }

    public function id() : int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    // костыль для получения свойств разных DomainObject'ов, которые возвращают DataMapper'ы
    abstract public function properties() : array;

    public function checksum() : string
    {
        $properties = $this->properties();
        unset($properties['id'], $properties['uuid']);

        $concat_string = "";
        foreach($properties as $property){
            $concat_string .= $property;
        }

        return (string)crc32($concat_string);
    }
}