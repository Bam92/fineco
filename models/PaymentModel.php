<?php
require_once "Payment.php";

class PaymentModel
{
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function new_payment(array $paymentInfo)
    {

        list($name, $description, $amount, $currency, $d_date) = $paymentInfo;
        $new_input = array(
            'name'    => $name,
            'description'  => $description,
            'amount'  => $amount,
            'currency'  => $currency,
            'd_date'  => $d_date,
        );

        $sql = sprintf(
            "INSERT INTO %s (%s) VALUES (%s)",
            "recette",
            implode(", ", array_keys($new_input)),
            ":" . implode(", :", array_keys($new_input))
        );
        try {
            $statement = $this->db->prepare($sql);
            return $statement->execute($new_input);
        } catch (PDOException $exception) {
            echo $sql . "<br>" . $exception->getMessage();
            exit;
        }
    }

    public function getPayments()
    {
        try {
            $sql =  'SELECT *  FROM recette ORDER BY currency';
            $result = $this->db->query($sql)->fetchAll();
            // Convert query result to an array
            $listPayment = array();
            foreach ($result as $row) {
                $paymentId = $row['id'];
                $listPayment[$paymentId] = $this->buildPayment($row);
            }
            return $listPayment;
        } catch (PDOException $exception) {
            echo $sql . "<br>" . $exception->getMessage();
            exit;
        }
    }

    public function getFees()
    {
        try {
            $sql =  'SELECT *  FROM fees';
            return $this->db->query($sql);
        } catch (PDOException $exception) {
            echo $sql . "<br>" . $exception->getMessage();
            exit;
        }
    }

    private function buildPayment(array $row)
    {
        $payment = new Payment();
        $payment->setId($row['id']);
        $payment->setName($row['name']);
        $payment->setDescription($row['description']);
        $payment->setAmount($row['amount']);
        $payment->setCurrency($row['currency']);
        $payment->setDate($row['d_date']);

        return $payment;
    }
}