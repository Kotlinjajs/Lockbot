<?php

const API = "5878095929:AAGCGoyA7nYnRZrYrcgrrsIJujeUGac31Lo";

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

mkdir("flood");
mkdir("ball");
$admin = 1751269357;
$botID = "Emojihkbot";
$update = json_decode(file_get_contents('php://input'));
$message = $update->message ?? null;
$callbackquery = $update->callback_query ?? null;
$text = $message->text ?? null;
$data = $update->callback_query->data ?? null;
$call_id = $update->callback_query->id ?? null;
$name = $message->from->first_name ?? null;

if(isset($callbackquery)){
    $text = 
    $cid = $update->callback_query->message->chat->id ?? null;  
    $type = $update->callback_query->message->chat->type ?? null;
    $mid = $update->callback_query->message->message_id ?? null;
    $from_id = $update->callback_query->from->id ?? null;
}
elseif(isset($message)){
    $from_id = $message->from->id ?? null;
    $cid = $message->chat->id ?? null;
    $type = $message->chat->type ?? null;
    $mid = $message->message_id ?? null;
}

$userflood = file_get_contents("flood/$cid.txt") ?? null;
$userhaa = file_get_contents("user.txt");
$users = substr_count($userhaa,"\n"); 

$ball= file_get_contents("ball/$cid.txt");
if($type=="group" or $type == "supergroup"){
    exit();
}

$key1=json_encode(['inline_keyboard' => [
  [['text'=>'☺️', 'callback_data' => "go"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]], 
]
]);
$key2=json_encode(['inline_keyboard' => [
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺️', 'callback_data' => "go"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  
]
]);
$key3=json_encode(['inline_keyboard' => [
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺️', 'callback_data' => "go"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
]
]);
$key4=json_encode(['inline_keyboard' => [
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☺️', 'callback_data' => "go"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],  
]
]);
$key5=json_encode(['inline_keyboard' => [
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺', 'callback_data' => "go"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
]
]);
$key6=json_encode(['inline_keyboard' => [
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺️', 'callback_data' => "go"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]], 
]
]);
$key7=json_encode(['inline_keyboard' => [
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☺️', 'callback_data' => "go"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
]
]);
$key8=json_encode(['inline_keyboard' => [
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺', 'callback_data' => "go"], ['text'=>'☹️', 'callback_data' => "no"]], 
]
]);
$key9=json_encode(['inline_keyboard'=>[
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺️', 'callback_data' => "go"]],
]
]);
$key11=json_encode(['inline_keyboard' => [
  [['text'=>'☺️', 'callback_data' => "goo"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]], 
]
]);

$key12=json_encode(['inline_keyboard' => [
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺️', 'callback_data' => "goo"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  
]
]);
$key13=json_encode(['inline_keyboard' => [
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺️', 'callback_data' => "goo"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
]
]);
$key14=json_encode(['inline_keyboard' => [
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☺️', 'callback_data' => "goo"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],  
]
]);
$key15=json_encode(['inline_keyboard' => [
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺', 'callback_data' => "goo"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
]
]);
$key16=json_encode(['inline_keyboard' => [
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺️', 'callback_data' => "goo"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]], 
]
]);
$key17=json_encode(['inline_keyboard' => [
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☺️', 'callback_data' => "goo"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
]
]);
$key18=json_encode(['inline_keyboard' => [
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺', 'callback_data' => "goo"], ['text'=>'☹️', 'callback_data' => "no"]], 
]
]);
$key19=json_encode(['inline_keyboard'=>[
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺️', 'callback_data' => "goo"]],
]
]);
/////level 2 ////////
$lvl21 =json_encode(['inline_keyboard' => [
  [['text'=>'☺️', 'callback_data' => "lvl2"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl22 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☺️', 'callback_data' => "lvl2"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl23 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺️', 'callback_data' => "lvl2"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl24 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺', 'callback_data' => "lvl2"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl25 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☺', 'callback_data' => "lvl2"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl26 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺', 'callback_data' => "lvl2"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl27 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺️', 'callback_data' => "lvl2"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl28 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☺', 'callback_data' => "lvl2"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl29 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☺', 'callback_data' => "lvl2"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl210 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺', 'callback_data' => "lvl2"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl211 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺', 'callback_data' => "lvl2"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl212 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺️', 'callback_data' => "lvl2"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl213 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],      
  [['text'=>'☺️', 'callback_data' => "lvl2"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl214 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],      
  [['text'=>'☹️', 'callback_data' => "no"],  ['text'=>'☺️', 'callback_data' => "lvl2"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl215 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],      
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺️', 'callback_data' => "lvl2"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl216 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],    
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],  ['text'=>'☺️', 'callback_data' => "lvl2"]],       
]
]);

$lvl221 =json_encode(['inline_keyboard' => [
  [['text'=>'☺️', 'callback_data' => "lvl22"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl222 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☺️', 'callback_data' => "lvl22"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl223 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺️', 'callback_data' => "lvl22"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl224 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺', 'callback_data' => "lvl22"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl225 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☺', 'callback_data' => "lvl22"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl226 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺', 'callback_data' => "lvl22"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl227 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺️', 'callback_data' => "lvl22"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl228 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☺', 'callback_data' => "lvl22"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl229 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☺', 'callback_data' => "lvl22"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl2210 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺', 'callback_data' => "lvl22"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl2211 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺', 'callback_data' => "lvl22"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl2212 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺️', 'callback_data' => "lvl22"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl2213 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],      
  [['text'=>'☺️', 'callback_data' => "lvl22"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl2214 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],      
  [['text'=>'☹️', 'callback_data' => "no"],  ['text'=>'☺️', 'callback_data' => "lvl22"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl2215 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],      
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☺️', 'callback_data' => "lvl22"], ['text'=>'☹️', 'callback_data' => "no"]],                
]
]);
$lvl2216 =json_encode(['inline_keyboard' => [
  [['text'=>'☹️️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],    
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"],  ['text'=>'☺️', 'callback_data' => "lvl22"]],       
]
]);

$leve2 = array($lvl21, $lvl22, $lvl23, $lvl24, $lvl25, $lvl26, $lvl27,$lvl28,$lvl29,$lvl210,$lvl211,$lvl212,$lvl213,$lvl214, $lvl215,$lvl216);
$lev2 = array_rand($leve2);
$level2 = $leve2[$lev2];

$leve22 = array($lvl221, $lvl222, $lvl223, $lvl224, $lvl225, $lvl226, $lvl227,$lvl228,$lvl229,$lvl2210,$lvl2211,$lvl2212,$lvl2213,$lvl2214, $lvl2215,$lvl2216);
$lev22 = array_rand($leve22);
$level22 = $leve22[$lev22];


$main = json_encode(['inline_keyboard'=>[
  [['text'=>'شروع مجدد', 'callback_data' => "start"]], 
  [['text'=>'🔰 درباره ربات','callback_data'=>'about']],
  [['text'=>"رکوردها 🔝", 'callback_data' => "top"]],    
  [['text'=>"⤵️به اشتراک گذاری", 'url' => "https://telegram.me/share/url?url=t.me/$botID یه بازی جالب و خنده دار و سرگرم کننده"]],   

  ]
]);

$res = json_encode (['inline_keyboard'=>[
    [['text'=>"🎉 شروع بازی",'callback_data'=>'start']], 
    [['text'=>'🔰 درباره ربات','callback_data'=>'about'], ['text'=>'⭐ سازنده','url'=>'https://t.me/A6653']],
    ]
]);
$rest = json_encode (['inline_keyboard'=>[
    [['text'=>"🎉 شروع بازی",'callback_data'=>'start']], 
  [['text'=>"⤵️به اشتراک گذاری", 'url' => "https://telegram.me/share/url?url=t.me/$botID یه بازی خنده دار و جالب و سرگرم کننده."],  ['text'=>'⭐ سازنده','url'=>'t.me/A6653']],
    ]
]);

$help = " ⁉️<b>قوانین بازی:</b>
 5 ثانیه بعد از شروع بازی به شما فرصت داده می شود.  شما باید در عرض 5 ثانیه آن شکلک ☺️ خندان را پیدا کنید.  اگر ایموجی خنداننده☺️ را پیدا کنید 1 امتیاز به شما داده می شود و اگر آن را پیدا نکردید بازی به پایان می رسد و امتیاز شما از 0 شروع می شود.  برای شروع بازی روی دکمه شروع بازی کلیک کنید.
 👨‍💻 توسعه دهنده ربات: @A6653";
$keys = array($key1, $key2, $key3, $key4, $key5, $key6, $key7, $key8, $key9);
$rand = array_rand($keys);
$key = $keys[$rand];

$kays = array($key11, $key12, $key13, $key14, $key15, $key16, $key17, $key18, $key19);
$randd = array_rand($kays);
$kay = $kays[$randd];

$motivarray = array("خوب بود 👍","باریکلا👏","ایول 🤗","آفرین🤩","عالی بود 🤓","براوو 👍");
$randarray = array_rand($motivarray);
$motiv = $motivarray[$randarray];

   if(stripos($userhaa,"$cid")!==false){
    }else{
    file_put_contents("user.txt","$userhaa\n$cid");
   }
function edit($cid,$mid,$text,$menu){
    bot('editMessageText',[
    'chat_id'=>$cid,
     'message_id'=>$mid,
    'text'=>$text,
    'parse_mode'=>'html',
    'reply_markup'=>$menu
  ]);
}

function send($cid,$text,$menu){
    bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>$text,
    'parse_mode'=>'html',
    'reply_markup'=>$menu
  ]);
  exit();
}



$dir = 'ball'; 
$files = scandir($dir);
unset($files[0], $files[1]);
$result = [];

foreach($files as $file){
    $count = file_get_contents($dir.'/'.$file);  
    $userid = str_replace(".txt","",$file);//
    $result[$userid] = $count;
}
    arsort($result);
    $top = '';

$num = 1;
foreach($result as $userid => $count){
     if($num < 11){
        $top .= "$num) <a href='tg://user?id=$userid'>$userid</a> -- $count ta \n";
        $num++;
     }
     else{
         break;
     }
}

if(isset($message)){
if(stripos($userhaa,"$cid")!==false){
}else{
    file_put_contents("statistika/user.txt","$userhaa\n$cid");
}
if($text=="/start"){
    send($cid,"👋سلام $name .\n
❗قبل از اینکه بازی رو شروع کنی از طریق دکمه ی درباره ربات،با شکل بازی آشنا شو.
به مناسبت شب یلدا هم اگه خواستی فال بگیری از دستور
/fal 
استفاده کن. 😉
🍉",$res);
}
elseif($text=="/top"){
    send($cid,"➖➖➖🏆TOP 10🏆➖➖➖\n\n$top",$res);
}
elseif($text=="/help"){
   send($cid,$help,$res);
}
elseif($text=="/my"){
if($ball== ""){
    send($cid,"شما امتیازی ندارید",$res);
    
}else{
    send($cid,"شما در مجموع <b>$ball</b> امتیاز بدست آوردید\nلیست کاربران فعال را با این دستور بدست آوردید\n\n👉/top👈",$res);
}
}
elseif($text=="/stats" and $cid ==$admin){
    send($cid,"<b>👥 در ربات تعداد $users یوزر دیگر وجود دارد</b>",null);
}else{
    send($cid,"این دستور پاسخ داده نشده است!",$res);
}
}

if($data=="start"){
    $text = "5 ثانیه به شما فرصت داده می شود تا ایموجی را پیدا کنید. ربات محاسبه می کند که چقدر زمان باقی مانده است و اگر زمان شما تمام نشده باشد، بازی ادامه می یابد، اگر زمان شما تمام شد، بازی بلافاصله متوقف می شود.\ آیا برای شروع آماده هستید؟";
    $menu = json_encode (['inline_keyboard'=>[
    [['text'=>"بزن بریم 🔍",'callback_data'=>'startgo']], 
    ]
    ]);
    edit($cid,$mid,$text,$menu);
    exit();
}

if($data=="startgo"){
    unlink("ball/$cid.txt");
    edit($cid,$mid,"3️⃣...️",null);
    edit($cid,$mid,"2️⃣...",null);
    edit($cid,$mid,"1️⃣...️",null);
    edit($cid,$mid,"شروع شد✈️",null);
    edit($cid,$mid,"اموجی خندان را پیدا کنید.",$key);
    file_put_contents("flood/$cid.txt",time() + 5);
    exit();
}

elseif($text=="/fal"){
$add = "http://www.beytoote.com/images/Hafez/".rand(1,149).".gif";
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>$add,
 'parse_mode'=>'MarkDown',  
	 ]); }
if($data=="goo"){
    bot('answerCallbackQuery',[
    'callback_query_id'=>$call_id,
    'text'=>''
    ]);
    if($userflood == null or 0 <= (time() - $userflood)){  
        edit($cid,$mid,"😔با عرض پوزش زمان تمام شد",$main);
        exit();
    }else{
        file_put_contents("ball/$cid.txt",$ball + 1);
        edit($cid,$mid,"$motiv\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖ \n<b>به شما +1 امتیاز داده شد</b>",$key);
        unlink("flood/$cid.txt");
        file_put_contents("flood/$cid.txt",time() + 5);
        exit();
    }
}

if($data=="go"){
    bot('answerCallbackQuery',[
    'callback_query_id'=>$call_id,
    'text'=>''
    ]);
    if($userflood == null or 0 <= (time() - $userflood)){  
        edit($cid,$mid,"😔با عرض پوزش زمان تمام شد",$main);
        exit();
    }else{
    if($ball<25 or $ball==25){
        file_put_contents("ball/$cid.txt",$ball + 1);
        edit($cid,$mid,"<b>به شما +1 امتیاز داده شد</b>\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖\n$motiv",$kay);
         unlink("flood/$cid.txt");
        file_put_contents("flood/$cid.txt",time() + 5);
        exit();
    }else{
        edit($cid,$mid,"$motiv \n➖➖➖➖➖➖➖➖➖➖➖➖➖➖ \n<b>به شما +1 امتیاز داده شد</b>",$level2);
         unlink("flood/$cid.txt");
        file_put_contents("flood/$cid.txt",time() + 5);
        exit();
    }
    }
}

if($data=="lvl2"){
    bot('answerCallbackQuery',[
    'callback_query_id'=>$call_id,
    'text'=>''
]);
if($userflood == null or 0 <= (time() - $userflood)){  
    edit($cid,$mid,"😔با عرض پوزش زمان تمام شد",$main);
    exit();
}else{
    file_put_contents("ball/$cid.txt",$ball + 1);
    edit($cid,$mid,"<b>به شما +1 امتیاز داده شد</b>\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖ \n$motiv",$level22);
     unlink("flood/$cid.txt");
    file_put_contents("flood/$cid.txt",time() + 5);
    exit();

}
}
if($data=="lvl22"){
    bot('answerCallbackQuery',[
    'callback_query_id'=>$call_id,
    'text'=>''
    ]);
    if($userflood == null or 0 <= (time() - $userflood)){  
        edit($cid,$mid,"😔با عرض پوزش زمان تمام شد",$main);
        exit();
    }else{
        file_put_contents("ball/$cid.txt",$ball + 1);
        edit($cid,$mid,"$motiv\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖ \n<b>به شما +1 امتیاز داده شد</b>",$level2);
         unlink("flood/$cid.txt");
        file_put_contents("flood/$cid.txt",time() + 5);
        exit();
    }
}

if($data=="about"){
    edit($cid,$mid,$help,$rest);
    exit();
}if($data=="top"){
    edit($cid,$mid,$top,$rest);
}
if($data=="no"){
    edit($cid,$mid,"😔 متاسفانه موفق به یافتن اموجی خندان نشدید.",$main);
     unlink("flood/$cid.txt");
    exit();
}