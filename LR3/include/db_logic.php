<?php

// db config
$db_config = [
    'name' => 'online_tours',
    'host' => 'localhost',
    'user' => 'root',
    'password' => ''
];

// a global pdo for connection
$pdo;

// connection to db
function db_connect(array $config)
{
    global $pdo;

    try {
        $pdo = new PDO('mysql:' . "dbname={$config['name']};" . "host={$config['host']}",
            $config['user'], $config['password']);
    } catch (PDOException $exc) {
        die($exc->getMessage());
    }
}

// $sql_query - a sql request string with or without PDO placeholders
// $sql_params - an array in which 'key' = PDO placeholder and 'value' = a value that put into placeholder 
function db_fetch_row(string $sql_query, array $sql_params = NULL): array|bool
{
    global $pdo;

    // do sql query
    $statement = $pdo->prepare($sql_query);
    $statement->execute($sql_params);

    // get data as an array
    $item = $statement->fetch(PDO::FETCH_ASSOC);

    return $item;
}

function db_fetch_array(string $sql_query, array $sql_params = NULL): array
{
    global $pdo;
  
    $statement = $pdo->prepare($sql_query);
    $statement->execute($sql_params);
   
    $items = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $items;
}

function db_change_values(string $sql_query,  array $sql_params = NULL) : bool
{
    global $pdo;

    return $pdo->prepare($sql_query)->execute($sql_params);
}