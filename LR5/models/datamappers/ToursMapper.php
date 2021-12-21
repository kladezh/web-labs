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
        $sql = "SELECT COUNT(*) FROM tours";

        return $sql; 
    }
    protected function sqlDelete() : string
    {
        $sql = "DELETE FROM `tours` WHERE id = ?";

        return $sql;
    }

    public function insert(DomainObject $object)
    {
        // указываем uuid для импорта из файла (по хорошему здесь можно реализовать разные запросы или пробежку в цикле)
        $sql = "INSERT INTO tours (uuid, name, preview_img, country_id, description, cost) VALUES (?, ?, ?, ?, ?, ?)";

        $properties = $object->properties();
        $params = [
            $properties['uuid'],
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
        // находи по uuid, опять же из-за импорта
        $sql = "UPDATE tours SET name=?, preview_img=?, country_id=?, description=?, cost=? WHERE uuid=?";

        $properties = $object->properties();

        $params = [
            $properties['name'],
            $properties['preview_img'],
            (new CountriesMapper)->getCountryId($properties['country']),
            $properties['description'],
            $properties['cost'],
            $properties['uuid']
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

    public function export(FileCoder $filecoder) : string
    {
        $objects = $this->findAll();

        $datacoder = DataCoder::getByFileCoder($filecoder);
        $data = $datacoder->encode($objects);

        $handler = new FileHandler($filecoder);
        $content = $handler->encode($data);

        return $content;
    }

    public function import(string $content, FileCoder $filecoder)
    {
        $handler = new FileHandler($filecoder);
        $data = $handler->decode($content);

        $datacoder = DataCoder::getByFileCoder($filecoder); 
        $objects = $datacoder->decode($data);

        $this->importObjects($objects);
    }
    private function importObjects(array $objects)
    {
        $checksums = $this->getTableChecksums();

        foreach ($objects as $object) {
            $obj_uuid = $object->properties()['uuid'];
            $obj_checksum = $object->checksum();

            $was_found = false;
            foreach($checksums as $record => $data){
                if($data['uuid'] == $obj_uuid){
                    if($data['checksum'] != $obj_checksum){
                        $this->update($object);
                    }

                    $was_found = true;
                    unset($checksums[$record]);
                    break;
                }
            }
            if(!$was_found){
                $this->insert($object);
            }
        }
    }
    private function getTableChecksums() : array 
    {
        $sql = "SELECT 
        tours.uuid,\n 
        CRC32(CONCAT(\n
            tours.name,\n
            tours.preview_img,\n
            tours.country_id,\n
            tours.description,\n
            tours.cost\n
        ))\n
        AS checksum\n
        FROM `tours`";

        return $this->db->query($sql)->fetchAll();
    }
}