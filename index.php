<?php
$pdo = new PDO("sqlite:src/data.db", null, null, [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$sql = "SELECT expression FROM Locution WHERE positionnement = '1' ORDER BY Random() LIMIT 1";

$statement = $pdo->prepare($sql);
$statement->execute();
$products = $statement->fetchObject();

foreach ($products as $product){
    echo $product;
}

$sql = "SELECT expression FROM Locution ORDER BY Random() LIMIT 1";

$statement = $pdo->prepare($sql);
$statement->execute();
$products = $statement->fetchObject();

foreach ($products as $product){
    echo $product;
}

?>