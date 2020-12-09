<?php

require "model.php";

$feeDesciptions = getFees();
$payments = getPayment();

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $description = $_POST["description"];
    $amount = $_POST["amount"];
    $currency = $_POST["currency"];
    $d_date = $_POST["date"];

    if (new_payment($name, $description, $amount, $currency, $d_date)) {
        $confirm_message = "Paiement effectué avec succès";
    };
}