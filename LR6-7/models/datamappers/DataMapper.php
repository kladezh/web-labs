<?php

/**
 * 
 * Классы для работы с таблицами
 * 
 * ---
 * Достаточно коряво реализованно наследование,
 * потому что таблицы `tours` и `countries` - разные
 * `tours` - основная таблица, работает с полноценными сущностями, нужных для приложения,
 * `countries` - таблица, но по факту служит лишь хранилищем доступных значений одной категории
 * и реализует правильное отношение на стороне БД, но для приложения - это не полноценная сущность
 * 
 * возможно стоит отказаться от наследования 
 * и сделать класс DataMapper композиционным для классов таблиц
 * 
 * Code Smells: Refused Bequest, Duplicate Code
 */

abstract class DataMapper
{
    protected $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function find(mixed $id) : DomainObject
    {
        $sql = $this->sqlSelect();
        $params = [ $id ];

        $record = $this->db->query($sql, $params)->fetch();

        if(!is_array($record)){
            return null;
        }

        return $this->createObject($record);
    }

    public function findAll() : array
    {
        $sql = $this->sqlSelectAll();

        $records = $this->db->query($sql)->fetchAll();

        if(!is_array($records)){
            return null;
        }

        $objects = [];
        foreach($records as $record){
            $objects[] = $this->createObject($record);
        }

        return $objects;
    }

    public function rowsCount() : int
    {
        $sql = $this->sqlCount();

        $value = $this->db->query($sql)->fetchColumn();

        return $value;
    }

    public function delete(int $id) 
    {
        $sql = $this->sqlDelete();
        $params = [ $id ];

        $this->db->query($sql, $params);
    }

    abstract protected function sqlSelect() : string;
    abstract protected function sqlSelectAll() : string;
    abstract protected function sqlCount() : string;
    abstract protected function sqlDelete() : string;

    abstract public function insert(DomainObject $object);
    abstract public function update(DomainObject $object);

    abstract public function createObject(array $record) : DomainObject;
}