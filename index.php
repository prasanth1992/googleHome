<?php
$rawJSON = file_get_contents('php://input');
$EchoReqObj = json_decode($rawJSON);
if($EchoReqObj->queryResult->intent->displayName =="welcome"){
  $array = array ('payload' =>array ('google' => array ('expectUserResponse' => true,'richResponse' => array ('items' => array (
          array (
            'simpleResponse' => 
            array (
              'textToSpeech' => 'this is a simple response',
            ),
          ),
        ),
      ),
    ),
  ),
)
  echo json_encode($array);
 }



?>
