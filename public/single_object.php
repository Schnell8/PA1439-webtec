<?php

include("../config/config.php");

$title = 'Single object';

require "../view/header.php";

// Get details from the query string
$query = $_GET['object'] ?? null;

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
    title,
    category,
    text,
    image,
    owner
FROM object
WHERE id = ?
;
EOD;

// Prepare the SQL statement so it can be executed
$stmt = $db->prepare($sql);

// Execute the SQL statement towards the database
$args = [$query];
$stmt->execute($args);

// Get the resultset
$res = $stmt->fetch();

// Include the view that shows the row
require "../view/single_object.php";
