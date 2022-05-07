<?php
require_once('./config.php');
require_once('./conn.php');

$winkelwagentje = [
    1 => 2,
    2 => 5,
    3 => 1,
];
$winkelwagentje = implode("", $winkelwagentje);
$orderNumber = rand();

$query = <<<SQL
INSERT INTO orders (order_number, status, products, email_recipient)
VALUES ({$orderNumber}, 1, {$winkelwagentje}, 'jelle.kootwijk@mailcampaigns.nl');
SQL;

$statement = $conn->prepare($query);
$statement->execute();