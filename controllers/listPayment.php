<?php

require "../config.php";
include "../models/PaymentModel.php";

$db = new PDO($dsn, $username, $password, $options);
$paymentModel = new PaymentModel($db);

$payments = $paymentModel->getPayments();

include "../views/listPaymentView.php";