<?php
session_start();

$_SESSION['isPayOk'] = 'not';

//$secret_key = 'PBEGLC6DcZUGigtxGFQ0t7D8';
$secret = '2oKThOeHI1/H8rkQaK4DEpFm'; //real

$sha1_hash = sha1( $_POST['notification_type'] . '&'. $_POST['operation_id']. '&' . $_POST['amount'] . '&643&' . $_POST['datetime'] . '&'. $_POST['sender'] . '&' . $_POST['codepro'] . '&' . $secret_key . '&' . $_POST['label'] );

if ($sha1_hash != $_POST['sha1_hash']) {
	// тут содержится код на случай, если верификация не пройдена
	exit();
}

if($sha_hash === $_POST['sha1_hash']) {
  http_response_code(200);
  $_SESSION['isPayOk'] = 'ok';
}

exit();

?>
