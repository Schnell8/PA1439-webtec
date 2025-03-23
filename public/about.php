<?php

include("../config/config.php");

$title = 'About';

require "../view/header.php";

// Create a DSN for the database using its filename
$fileName = "../db/bmo.sqlite";
if ($_SERVER["SERVER_NAME"] !== "www.student.bth.se") {
    $fileName = "C:\db\bmo.sqlite";
}
$dsn = "sqlite:$fileName";
$db = connectToDatabase($dsn);

// Create the SQL statement
$sql = <<<EOD
SELECT
    title,
    content,
    pubdate
FROM article
WHERE id = 4
;
EOD;

// Prepare the SQL statement so it can be executed
$stmt = $db->prepare($sql);

// Execute the SQL statement towards the database
$stmt->execute();

// Get the resultset
$res = $stmt->fetch();

require "../view/about.php";
