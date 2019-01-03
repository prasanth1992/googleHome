<?php
$rawJSON = file_get_contents('php://input');
$EchoReqObj = json_decode($rawJSON);
if($EchoReqObj->queryResult->queryText =="test it"){
  $array = array (
  'fulfillmentText' => ' ',
  'fulfillmentMessages' => 
  array (
    0 => 
    array (
      'text' => 
      array (
        'text' => 
        array (
          0 => 'Right now its 47.07 degress with clear sky',
        ),
      ),
    ),
  ),
  'source' => '',
)
  echo json_encode($array);
 }



?>
