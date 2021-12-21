<?php

class CountriesMapper extends DataMapper
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function sqlSelect() : string
    {
        $sql = "SELECT * FROM countries WHERE id = ?";

        return $sql;
    }
    protected function sqlSelectAll() : string
    {
        $sql = "SELECT * FROM countries";
        
        return $sql;
    }
    protected function sqlCount() : string
    {
        $sql = "SELECT COUNT(*) FROM countries";
        
        return $sql; 
    }
    protected function sqlDelete() : string
    {
        $sql = "DELETE FROM `countries` WHERE id = ?";

        return $sql;
    }

    public function insert(DomainObject $object)
    {
        $sql = "INSERT INTO countries (name) VALUES (?)";

        $params = [$object->properties()['name']];

        $this->db->query($sql, $params);

        $id = $this->db->lastInsertId();
        $object->setId($id);
    }

    public function update(DomainObject $object)
    {
        $sql = "UPDATE countries SET name=? WHERE id=?";

        $properties = $object->properties();
        $params = [
            $properties['name'],
            $properties['id']
        ];

        $this->db->query($sql, $params);
    }

    public function createObject(array $record) : DomainObject
    {
        return new CountryObject( $record['name'] );
    }

    // костыль для сопоставления названий стран и их id 
    public function getCountryId(string $name) : int
    {
        if(is_numeric($name)){
            return (int)$name;
        }

        $sql = "SELECT id FROM `countries` WHERE name = '{$name}'"; 
        $id = $this->db->query($sql)->fetchColumn();

        return $id;
    }
}