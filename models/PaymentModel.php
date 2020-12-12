<?php

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
            return $this->db->query($sql);
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
}