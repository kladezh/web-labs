<?php

require_once 'db_logic.php';

// create a sql query for selection all data from `tours` and gather PDO parameters if we use a filter 
// call db_fetch_array()function  and return array
function db_select_tours()
{
    // prepare sql for all items selection
    $query = "SELECT\n"
        . "tours.preview_img AS preview,\n"
        . "tours.name AS name,\n"
        . "countries.name AS country_name,\n"
        . "tours.description AS description,\n"
        . "tours.cost AS cost\n"
        . "FROM `tours` INNER JOIN `countries`\n"
        . "ON tours.country_id=countries.id";

    $params = [];

    // check the pressing of the inputs
    if (isset($_GET['clear'])) {
        // clear _GET parameters in URL

        header('location: ' . $_SERVER['PHP_SELF']);
    } else if (isset($_GET['apply'])) {
        // concatenate WHERE statement to sql query

        $query .= "\nWHERE\n";

        if (!empty($_GET['name'])) {
            $query .= "tours.name LIKE :name";
            $query .= "\nAND\n";

            $params[':name'] = "%{$_GET['name']}%";
        }

        if (!empty($_GET['country_name'])) {
            $query .= "countries.name = :country_name";
            $query .= "\nAND\n";

            $params[':country_name'] = $_GET['country_name'];
        }

        if (!empty($_GET['description'])) {
            $query .= "tours.description LIKE :description";
            $query .= "\nAND\n";

            $params[':description'] = "%{$_GET['description']}%";
        }

        if (!empty($_GET['cost_from']) and !empty($_GET['cost_to'])) {
            $query .= "tours.cost BETWEEN :cost_from AND :cost_to";
            $query .= "\nAND\n";

            $params[':cost_from'] = $_GET['cost_from'];
            $params[':cost_to'] = $_GET['cost_to'];
        } else if (!empty($_GET['cost_from'])) {
            $query .= "tours.cost >= :cost_from";
            $query .= "\nAND\n";

            $params[':cost_from'] = $_GET['cost_from'];
        } else if (!empty($_GET['cost_to'])) {
            $query .= "tours.cost <= :cost_to";
            $query .= "\nAND\n";

            $params[':cost_to'] = $_GET['cost_to'];
        }
    }

    // correct the query in case user clicked 'apply' but without parameters
    if (str_ends_with($query, "\nWHERE\n")) {
        $query = str_replace("\nWHERE\n", '', $query);
    }

    // replace the last 'AND' word in the query
    if (str_ends_with($query, "\nAND\n")) {
        $query = substr_replace($query, '', -1 * strlen("\nAND\n"));
    }

    return db_fetch_array($query, $params);
}

// create a sql query for selection names from `countries` table
// call db_fetch_array() function and return array
function db_select_countries()
{
    $query = "SELECT name FROM `countries`";

    return db_fetch_array($query);
}

