<?php

require "./config.php";
include "./models/PaymentModel.php";

$db = new PDO($dsn, $username, $password, $options);
$paymentModel = new PaymentModel($db);
$allPayments = $paymentModel->getPayments();
$allFees = $paymentModel->getFees();

if (isset($_POST["submit"])) {
    $paymentInfo = array(
        $name = $_POST["name"],
        $description = $_POST["description"],
        $amount = $_POST["amount"],
        $currency = $_POST["currency"],
        $d_date = $_POST["date"]
    );

    $doPay = $paymentModel->new_payment($paymentInfo);

    if ($doPay) {
        $confirm_message = "Paiement effectué avec succès";
    };
}

require "./views/PaymentView.php";