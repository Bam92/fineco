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
        </tr>
    </thead>

    <?php foreach ($payments as $payment) { ?>

    <tr>
        <td><?php echo $payment['name'] ?></td>
        <td><?php echo $payment['amount'] ?></td>
        <td><?php echo $payment['currency'] ?></td>
        <td><?php echo $payment['description'] ?></td>
    </tr>
    <?php } ?>
</table>