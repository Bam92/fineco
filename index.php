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
    <p><a href="./paymentView.php">Voir recette</a></p>

    <form method="POST">
        <input type="text" name="name" placeholder="nom de l'élève" required>
        <select name="description" required>
            <option value="">Choisir un motif</option>

            <?php foreach ($feeDesciptions as $feeDesciption) { ?>

            <option value="<?php echo $feeDesciption['description'] ?>">
                <?php echo $feeDesciption['description'] ?>
            </option>

            <?php } ?>
        </select>
        <input type="number" name="amount" laceholder="500" required>
        <select name="currency" required>
            <option value="CDF">CDF</option>
            <option value="USD">USD</option>
        </select>
        <input type="date" name="date">

        <input type="submit" name="submit" value="Valider">
        <input type="resert" value="Annuler">
    </form>
</body>

</html>