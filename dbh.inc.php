

<?php

$dsn = "mysql:host=localhost;dbname=magmidas.touch";

$dbusername ="root";
$dbpassword = "";

try {
       $pdo = new PDO($dsn, $dbusername, $dbpassword );
       $pdo->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed:" . $e->getmessage();
}