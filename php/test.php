<?php

$db_url = '127.0.0.1';
$db_user = "ussr_rust_db_user";
$db_password = "j8Ko-!AxZ,B7=Q";

//calculating price according to DB cost records

$db_connection = new mysqli($db_url, $db_user, $db_password);
if($db_connection->connect_error) die("Connection failed: " . $conn->connect_error);
$db_connection->select_db("ussr_rust_server_db");
$queryResult = $db_connection->query("SELECT * FROM billing_table_costs;");
$queryNumRows = $queryResult->num_rows;

$currentRow = $queryResult->fetch_assoc();

while($currentRow = $queryResult->fetch_assoc()) printf("Item: %s | Cost: %d\n", $currentRow['Item'], $currentRow['Cost']);

printf("------------------------------------------------------\n");
while($currentRow = $queryResult->fetch_assoc()) printf("Item: %s | Cost: %d\n", $currentRow['Item'], $currentRow['Cost']);
?>
