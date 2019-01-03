<?php 

$method = $_SERVER['REQUEST_METHOD'];

// Process only when method is POST
if($method == 'POST'){
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);
	$inputText="Prasanth";
	$text = $json->result->metadata->intentName;

	switch ($text) {
		case 'welcome':
			if($id=$json->result->parameters->id){
				
$ch = curl_init('http://ec2-34-228-218-131.compute-1.amazonaws.com/AlexaIvanti/Api/Incident/GetStatusOfIncident/'.$id);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  
    $speech=curl_exec($ch);
				curl_close($ch);
			}
			break;

		case 'subject':
			$speech = $inputText;
			break;

		case 'anything':
			$speech = "Yes, you can type anything here.";
			break;
		
		default:
			$speech = "Sorry, I didnt get that. Please ask me something else.";
			break;
	}

	$response = new \stdClass();
	$response->speech = $speech;
	$response->displayText = $speech;
	$response->source = "webhook";
	echo json_encode($response);
}
else
{
	echo "Method not allowed";
}

?>
