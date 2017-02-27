<?php 
$access_token = "0iUcdcZOrWfzqmAsJvL+4w71v+DKgg+a+QKnZZuu4kO02zRaG03ei2FS1VUgz5M8C0ip/IwOQC7HQMZTHche5CpJUWaxvHjnVH9/uCNcmgvxBbBmLU4zLZ9fg1CQbRCdXPxWN/zGwm48V83918r2kwdB04t89/1O/w1cDnyilFU=";

			// Get text sent

			$text = "Hi, Songpon How are you?";
			$To = "U50db648d0798f19ff5708e8a4e992b08";

			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $text
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/push';
			$data = [
				'to' => $To,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";


echo "OK_push2";
?>