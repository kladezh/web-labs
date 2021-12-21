<?php

/**
 * 
 * Вспомогательный класс, который преобразует массив спарсенных с файла данных
 * в массив объектов таблиц, и обратно.
 * Он учитывает реализацию парсинга файлов у FileCoder и структуру таблиц в БД.
 * 
 * ---
 * Конкретно этот класс сделан только под таблицу `tours`.
 * В идеале нужно бы реализовать абстрактную фабрику для создания Кодеров под разные таблицы и форматы файлов
 * 
 */

abstract class DataCoder
{   
    public static function getByFileCoder(FileCoder $filecoder) : self
    {
        $ref = new \ReflectionClass($filecoder);

        $filecoder_class = $ref->getName();
        $filecoder_parent = $ref->getParentClass()->getName();

        $class_prefix = str_replace($filecoder_parent, '', $filecoder_class);

        $datacoder = $class_prefix . (new \ReflectionClass(self::class))->getName();
        return new $datacoder;
    }

    // принимает массив спарсенных с файла данных и возращает массив объектов БД
    abstract public function decode(array $file_data) : array;
    
    // принимает массив объектов БД и возвращает массив данных для файла
    abstract public function encode(array $data_objects) : array;
}

class XmlDataCoder extends DataCoder
{
    public function decode(array $file_data): array
    {
        $objects = [];

        foreach($file_data['item'] as $item){
            $objects[] = new TourObject(
                $item['name'],
                $item['preview_img'],
                $item['country'],
                $item['description'],
                $item['cost'],
                null,
                $item['@attributes']['uuid'],
            );
        }

        return $objects;
    }

    public function encode(array $data_objects): array
    {
        $items = [];

        foreach ($data_objects as $object) {
            $properties = $object->properties();
            $items[] = [
                '_attributes' => ['uuid' => $properties['uuid']],
                'preview_img' => $properties['preview_img'],
                'name' => $properties['name'],
                'country' => $properties['country'],
                'description' => $properties['description'],
                'cost' => $properties['cost']
            ];
        }

        $array = ['item' => $items];
        return $array;
    }
}