<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Finance</title>
</head>

<?php

require "connection.php";

$connection = db_connect();

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $amount = $_POST["amount"];
    $d_date = $_POST["date"];

    $new_input = array(
        'name'    => $name,
        'amount'  => $amount,
        'd_date'  => $d_date
    );

    $sql = sprintf(
        "INSERT INTO %s (%s) VALUES (%s)",
        "recette",
        implode(",", array_keys($new_input)),
        ":" . implode(", :", array_keys($new_input))
    );

    $statement = $connection->prepare($sql);
    $affectedLines = $statement->execute($new_input);
}
?>

<form method="POST">
    <input type="text" name="name" id="" placeholder="nom de l'élève" required>
    <input type="number" name="amount" id="" placeholder="500" required>
    <input type="date" name="date" id="">

    <input type="submit" name="submit" value="Valider">
    <input type="resert" value="Annuler">
</form>

<body>

</body>

</html>