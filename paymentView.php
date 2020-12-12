<?php

require "controllers.php";
?>

<h1>Recette</h1>
<p><a href="./index.php">Nouveau payement</a></p>

<table>
    <thead>
        <tr>
            <td>Eleve</td>
            <td>Montant</td>
            <td>Devise</td>
            <td>Motif</td>
            <td>Date</td>
        </tr>
    </thead>

    <?php foreach ($payments as $payment) { ?>

    <tr>
        <td><?= $payment['name'] ?></td>
        <td><?= $payment['amount'] ?></td>
        <td><?= $payment['currency'] ?></td>
        <td><?= $payment['description'] ?></td>
        <td><?= $payment['d_date'] ?></td>
    </tr>

    <?php } ?>
</table>