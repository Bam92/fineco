<h1>Recette</h1>
<p><a href="../index.php">Nouveau payement</a></p>
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
        <td><?= $payment->getName() ?></td>
        <td><?= $payment->getAmount() ?></td>
        <td><?= $payment->getCurrency() ?></td>
        <td><?= $payment->getDescription() ?></td>
        <td><?= $payment->getDate() ?></td>
    </tr>

    <?php } ?>
</table>