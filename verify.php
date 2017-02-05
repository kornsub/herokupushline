<?php 
$access_token = "RNiI64Nz6IIxxyyD0hc83r1gNUHEIHONHa3no3s0Eo+xMs2ftaA9d758TQE6Iy06guYt+yo3x5Fhb3ETuWyjmtG3JLGppnC/H3ZamCLLtvTpcew+D9f39TEbPvEVOuV4WFxeH13sk4okTFsTHHCjEwdB04t89/1O/w1cDnyilFU=";

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>