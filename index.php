<?php

$API_KEY = "6288067873:AAGMtPuFeI22Gs1wVFZgSw8NnNXrlJmS1so";
$chat_id = "-1001515231503";
$admins = array("1751269357", "1557708565");
$locked = false;

function sendMessage($chat_id, $text) {
  global $API_KEY;
  file_get_contents("https://api.telegram.org/bot$API_KEY/sendMessage?chat_id=$chat_id&text=$text");
}

$update = file_get_contents("php://input");
$update = json_decode($update, true);

$message = $update["message"];
$from = $message["from"]["username"];
$text = $message["text"];

if (in_array($from, $admins)) {
  if ($text == "قفل گروه") {
    $locked = true;
    sendMessage($chat_id, "گروه قفل شد.");
  } else if ($text == "بازکردن قفل") {
    $locked = false;
    sendMessage($chat_id, "گروه باز شد.");
  }
} else if ($locked) {
  sendMessage($chat_id, "گروه قفل است.");
}

?>
