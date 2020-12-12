<h1>Paiement Frais Scolaire</h1>
<p><a href="./paymentView.php">Voir recette</a></p>

<p><?= $confirm_message ?? NULL; ?></p>

<form method="POST">
    <input type="text" name="name" placeholder="nom de l'élève" required>
    <select name="description" required>
        <option value="">Choisir un motif</option>

        <?php foreach ($allFees as $fee) { ?>

        <option value="<?= $fee['description'] ?>">
            <?= $fee['description'] ?>
        </option>

        <?php } ?>
    </select>
    <input type="number" name="amount" laceholder="500" required>
    <select name="currency" required>
        <option value="CDF">CDF</option>
        <option value="USD">USD</option>
    </select>
    <input type="date" name="date" required>

    <input type="submit" name="submit" value="Valider">
    <input type="reset" value="Annuler">
</form>