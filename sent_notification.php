<?php
 curl_setopt_array($ch = curl_init(), array(
  CURLOPT_URL => "https://api.pushover.net/1/messages.json",
  CURLOPT_POSTFIELDS => array(
  "token" => "application_api_token",
  "user" => "your_api_key",
  "message" => "Hello, World!",
  "priority" => "0",
)));
curl_exec($ch);
curl_close($ch);
?>