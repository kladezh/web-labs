<?php

class Database
{
    private static $instance = null;
    
    private $pdo;

    private function __construct()
    {
        $this->init();
    }

    public static function getInstance() : self
    {
        if(self::$instance == null){
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function init()
    {
        $config = $this->getConfig();

        try {
            // хардкод драйвера MySQL
            $pdo = new \PDO(
                "mysql:dbname={$config['name']};host={$config['host']}",
                $config['user'],
                $config['password'],
                [
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                    \PDO::MYSQL_ATTR_LOCAL_INFILE => true
                ]
            );
        } catch (\PDOException $exc) {
            die($exc->getMessage());
        }

        $this->pdo = $pdo;
    }

    private function getConfig() : array
    {
        $config = Config::getInstance();

        return $config->get('database');
    }
    
    public function query(string $sql, array $params = []) : \PDOStatement
    {
        $statement = $this->pdo->prepare($sql);
        $statement->execute($params);

        return $statement;
    }

    public function lastInsertId() : int
    {
        return intval($this->pdo->lastInsertId());
    }
}