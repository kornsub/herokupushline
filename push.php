<?php 
$access_token = "RNiI64Nz6IIxxyyD0hc83r1gNUHEIHONHa3no3s0Eo+xMs2ftaA9d758TQE6Iy06guYt+yo3x5Fhb3ETuWyjmtG3JLGppnC/H3ZamCLLtvTpcew+D9f39TEbPvEVOuV4WFxeH13sk4okTFsTHHCjEwdB04t89/1O/w1cDnyilFU=";
$headers = array( 'Content-type: application/json', 'Authorization: Bearer'.$access_token); 
$messages = ['type' => 'text','text' => 'Hi'];
$data = ['replyToken' => $replyToken,'messages' => [$messages],];
$post = json_encode($data);

$chOne = curl_init(); 
curl_setopt( $chOne, CURLOPT_URL, "https://api.line.me/v2/bot/message/push"); 
curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt( $chOne, CURLOPT_POSTFIELDS, $post);
curl_setopt( $chOne, CURLOPT_HTTPHEADER, $headers);
curl_setopt( $chOne, CURLOPT_FOLLOWLOCATION, 1); 
curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt( $chOne, CURLOPT_POST, 1); 


$result = curl_exec( $chOne ); 

//Check error 
if(curl_error($chOne)) { echo 'error:' . curl_error($chOne); } 
else { $result_ = json_decode($result, true); 
echo "status : ".$result_['status']; echo "message : ". $result_['message']; } 

curl_close( $chOne ); 
?>