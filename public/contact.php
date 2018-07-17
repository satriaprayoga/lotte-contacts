<?php 
header('Content-type: application/json');
header('Access-Control-Allow-Headers: Content-Type');
header("Access-Control-Allow-Origin: *");

$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE);
//echo $input;
$name = $input['name'];
$email = $input['email'];
$message = "msg:";//$input['message'];
$number = 10;//$input['number'];


$result['message'] = '';
$result['error']  = false;

if($name){
  $result['message']  = "Posted Values => ".$name."-".$email."-".$message."-".$number;
  $result['error']  = false;
}
else {
  $result['error']  = 'Form submission failed.';
}


echo json_encode($result);
/*
if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') != 0){
    throw new Exception('Request method must be POST!');
}
 
//Make sure that the content type of the POST request has been set to application/json
$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
if(strcasecmp($contentType, 'application/json') != 0){
    throw new Exception('Content type must be: application/json');
}
 
//Receive the RAW post data.
$content = trim(file_get_contents("php://input"));
 
//Attempt to decode the incoming RAW post data from JSON.
$decoded = json_decode($content, true);
var_dump($decoded);
 
//If json_decode failed, the JSON is invalid.
if(!is_array($decoded)){
    throw new Exception('Received content contained invalid JSON!');
}
/*
error_reporting(E_ALL & ~E_NOTICE);
$rr='test';
var_dump($rr);
print_r($rr);
try{
    if(count($_POST) == 0) throw new \Exception('Form is empty');
    
    foreach ($_POST as $key => $value) {
        // If the field exists in the $fields array, include it in the email 
      //  if (isset($fields[$key])) {
            echo "'$value\n'";
            var_dump($value);
            print_r(json_decode($value));
            echo "<script>console.log( 'Debug Objects: " . $value . "' );</script>";
       // }
    }
}catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}

/*
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
// else just display the message
else {
    echo $responseArray['message'];
}
*/
