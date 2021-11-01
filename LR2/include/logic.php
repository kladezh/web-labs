<?php


// realize db logic
// $sql_request - a sql request string with or without PDO placeholders
// $params - an array in which 'key' = PDO placeholder and 'value' = a value that put into placeholder 
function db_fetch_array(string $sql_request, array $sql_params = NULL): array
{
    // connection to db
    try {
        $pdo = new PDO('mysql:' . 'dbname=online_tours;' . 'host=localhost', 'root', null);
    } catch (PDOException $except) {
        die($except->getMessage());
    }

    // do sql request
    $statement = $pdo->prepare($sql_request);
    $statement->execute($sql_params);

    // get data as an array
    $items = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $items;
}

// create a sql request for selection all data from `tours` and gather PDO parameters if we use a filter 
// call db_fetch_array()function  and return array
function db_select_tours()
{
    // an array contains the sql request string and parameters for PDO preparing
    $sql = [
        'request' => '',
        'params' => []
    ];

    // prepare sql for all items selection
    $sql['request'] = "SELECT\n"
        . "tours.preview_img AS preview,\n"
        . "tours.name AS name,\n"
        . "countries.name AS country_name,\n"
        . "tours.description AS description,\n"
        . "tours.cost AS cost\n"
        . "FROM `tours` INNER JOIN `countries`\n"
        . "ON tours.country_id=countries.id";

    // check the pressing of the inputs
    if (isset($_GET['clear'])) {
        // clear _GET parameters in URL

        header('location: ' . $_SERVER['PHP_SELF']);
    } else if (isset($_GET['apply'])) {
        // concatenate WHERE statement to sql request

        $sql['request'] .= "\nWHERE\n";

        if (!empty($_GET['name'])) {
            $sql['request'] .= "tours.name LIKE :name";
            $sql['request'] .= "\nAND\n";

            $sql['params'][':name'] = "%{$_GET['name']}%";
        }

        if (!empty($_GET['country_name'])) {
            $sql['request'] .= "countries.name = :country_name";
            $sql['request'] .= "\nAND\n";

            $sql['params'][':country_name'] = $_GET['country_name'];
        }

        if (!empty($_GET['description'])) {
            $sql['request'] .= "tours.description LIKE :description";
            $sql['request'] .= "\nAND\n";

            $sql['params'][':description'] = "%{$_GET['description']}%";
        }

        if (!empty($_GET['cost_from']) and !empty($_GET['cost_to'])) {
            $sql['request'] .= "tours.cost BETWEEN :cost_from AND :cost_to";
            $sql['request'] .= "\nAND\n";

            $sql['params'][':cost_from'] = $_GET['cost_from'];
            $sql['params'][':cost_to'] = $_GET['cost_to'];
        } else if (!empty($_GET['cost_from'])) {
            $sql['request'] .= "tours.cost >= :cost_from";
            $sql['request'] .= "\nAND\n";

            $sql['params'][':cost_from'] = $_GET['cost_from'];
        } else if (!empty($_GET['cost_to'])) {
            $sql['request'] .= "tours.cost <= :cost_to";
            $sql['request'] .= "\nAND\n";

            $sql['params'][':cost_to'] = $_GET['cost_to'];
        }
    }

    // correct the request in case user clicked 'apply' but without parameters
    if (str_ends_with($sql['request'], "\nWHERE\n")) {
        $sql['request'] = str_replace("\nWHERE\n", '', $sql['request']);
    }

    // replace the last 'AND' word in the request
    if (str_ends_with($sql['request'], "\nAND\n")) {
        $sql['request'] = substr_replace($sql['request'], '', -1 * strlen("\nAND\n"));
    }

    return db_fetch_array($sql['request'], $sql['params']);
}

// create a sql request for selection names from `countries` table
// call db_fetch_array() function and return array
function db_select_countries()
{
    $request = "SELECT name FROM `countries`";

    return db_fetch_array($request);
}

