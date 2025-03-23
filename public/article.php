<?php

include("../config/config.php");

$title = 'Article';

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
    id,
    category,
    title,
    content,
    author,
    pubdate
FROM article
;
EOD;

// Prepare the SQL statement so it can be executed
$stmt = $db->prepare($sql);

// Execute the SQL statement towards the database
$stmt->execute();

// Get the resultset and print it out
$res = $stmt->fetchAll();

require "../view/article.php";
