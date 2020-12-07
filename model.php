<?php

require "connection.php";

$connection = db_connect();

function new_payment($name, $description, $amount, $currency, $d_date)
{
    global $connection;
    $new_input = array(
        'name'    => $name,
        'description'  => $description,
        'amount'  => $amount,
        'currency'  => $currency,
        'd_date'  => $d_date,
    );

    $sql = sprintf(
        "INSERT INTO %s (%s) VALUES (%s)",
        "recette",
        implode(", ", array_keys($new_input)),
        ":" . implode(", :", array_keys($new_input))
    );
    try {
        $statement = $connection->prepare($sql);
        $affectedLines = $statement->execute($new_input);

        return $affectedLines;
    } catch (PDOException $exception) {
        echo $sql . "<br>" . $exception->getMessage();
        exit;
    }
}

function getFees()
{
    global $connection;

    try {
        $sql =  'SELECT *  FROM fees';
        $fees = $connection->query($sql);

        return $fees;
    } catch (PDOException $exception) {
        echo $sql . "<br>" . $exception->getMessage();
        exit;
    }
}