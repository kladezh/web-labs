<?php

class ToursMapper extends DataMapper
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function sqlSelect() : string
    {
        $sql = "SELECT\n
        tours.id,\n
        tours.uuid,\n 
        tours.preview_img,\n
        tours.name,\n
        countries.name AS country,\n
        tours.description,\n
        tours.cost\n
        FROM `tours` INNER JOIN `countries`\n
        ON tours.country_id=countries.id\n
        WHERE tours.id=?";

        return $sql;
    }
    protected function sqlSelectAll() : string
    {
        $sql = "SELECT\n
        tours.id,\n
        tours.uuid,\n 
        tours.preview_img,\n
        tours.name,\n
        countries.name AS country,\n
        tours.description,\n
        tours.cost\n
        FROM `tours` INNER JOIN `countries`\n
        ON tours.country_id=countries.id";
        
        return $sql;
    }
    protected function sqlCount() : string
    {
        $sql = "SELECT COUNT(*) FROM `tours`";

        return $sql; 
    }
    protected function sqlDelete() : string
    {
        $sql = "DELETE FROM `tours` WHERE id = ?";

        return $sql;
    }

    public function insert(DomainObject $object)
    {
        $sql = "INSERT INTO tours (name, preview_img, country_id, description, cost) VALUES (?, ?, ?, ?, ?)";

        $properties = $object->properties();
        $params = [
            $properties['name'],
            $properties['preview_img'],
            (new CountriesMapper)->getCountryId($properties['country']),
            $properties['description'],
            $properties['cost']
        ];

        $this->db->query($sql, $params);

        $id = $this->db->lastInsertId();
        $object->setId($id);
    }

    public function update(DomainObject $object)
    {
        $sql = "UPDATE tours SET name=?, preview_img=?, country_id=?, description=?, cost=? WHERE id=?";

        $properties = $object->properties();

        $params = [
            $properties['name'],
            $properties['preview_img'],
            (new CountriesMapper)->getCountryId($properties['country']),
            $properties['description'],
            $properties['cost'],
            $properties['id']
        ];

        $this->db->query($sql, $params);
    }

    public function createObject(array $record) : DomainObject
    {
        return new TourObject(
            $record['name'],
            $record['preview_img'],
            $record['country'],
            $record['description'],
            $record['cost'],
            $record['id'] ?? null,
            $record['uuid'] ?? null
        );
    }
}