<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Finance</title>
</head>

<body>

    <?php
    require "controllers.php";

    echo $confirm_message ?? NULL;
    ?>

    <h1>Paiement Frais Scolaire</h1>

    <form method="POST">
        <input type="text" name="name" id="" placeholder="nom de l'élève" required>
        <select name="description" required>
            <option value="">Choisir un motif</option>
            <?php foreach ($feeDesciptions as $feeDesciption) { ?>

            <option value="<?php echo $feeDesciption['description'] ?>">
                <?php echo $feeDesciption['description'] ?>
            </option>

            <?php } ?>
        </select>
        <input type="number" name="amount" id="" placeholder="500" required>
        <input type="text" name="currency" id="" placeholder="devise: cdf ou usd" required>
        <input type="date" name="date" id="">

        <input type="submit" name="submit" value="Valider">
        <input type="resert" value="Annuler">
    </form>
</body>

</html>