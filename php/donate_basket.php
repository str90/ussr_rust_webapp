<?php

require_once('classes/item_pack.php');

session_start();

//mysql credential variables

$db_url = '127.0.0.1';
$db_user = "ussr_rust_db_user";
$db_password = "j8Ko-!AxZ,B7=Q";

//calculating price according to DB cost records

$db_connection = new mysqli($db_url, $db_user, $db_password);
if($db_connection->connect_error) die("Connection failed: " . $db_connection->connect_error);
$db_connection->select_db("ussr_rust_server_db");

$order_sum = 0;

for($i = 0; $i < count($_SESSION['basket_item_objects']); $i++) {
  $queryResult = $db_connection->query("SELECT * FROM billing_table_costs;");
  $queryNumRows = $queryResult->num_rows;
  if($queryNumRows > 0) while($currentRow = $queryResult->fetch_assoc()) {
    if($_SESSION['basket_item_objects'][$i]->getItemName() === $currentRow['Item']) $order_sum += (int)$currentRow['Cost'] * (int)$_SESSION['basket_item_objects'][$i]->getItemAmount();
  }
}

$_SESSION['amount'] = $order_sum;
echo $order_sum;

session_unset();
session_destroy();

?>
