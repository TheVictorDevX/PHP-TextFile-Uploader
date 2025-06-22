<?php
$host="localhost";
$dbname="test";

$dsn = "mysql:host=$host;dbname=$dbname";

$username="root";

$pdo = new PDO($dsn,$username);