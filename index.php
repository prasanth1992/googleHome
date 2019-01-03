<?php
$rawJSON = file_get_contents('php://input');
$EchoReqObj = json_decode($rawJSON);
print_r($EchoReqObj);


?>
