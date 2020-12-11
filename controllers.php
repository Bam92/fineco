<?php

require "model.php";

$feeDesciptions = getFees();
$payments = getPayments();

if (isset($_POST["submit"])) {
    $paymentInfo = array(
    $name = $_POST["name"],
    $description = $_POST["description"],
    $amount = $_POST["amount"],
    $currency = $_POST["currency"],
    $d_date = $_POST["date"]
    );
    
    if (new_payment($paymentInfo)) {
        $confirm_message = "Paiement effectué avec succès";
    };
}