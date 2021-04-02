<?php
require 'connec.php';

function addbribe(array $brideData)

{
    $pdo = new PDO(DSN, USER, PASS);
    $name = trim($brideData['name']);
    $payment = trim($brideData['payment']);
    $query = "INSERT INTO bribe (name, payment) VALUES (:name, :payment)";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':payment', $payment);
    $statement->bindValue(':name', $name);
    $statement->execute();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    addbribe($_POST);
}

function showAll(): array
{
    $pdo = new PDO(DSN, USER, PASS);
    $query = "SELECT * FROM bribe ORDER BY name";
    $statement = $pdo->query($query);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}


$bribes = showAll();

$payments = array_column($bribes, 'payment');



