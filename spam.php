<?php
ob_start();
$API_KEY = "1808367362:AAHVo54jUgX2Vr_rEGX4F5Bwakbz9Bte0dY"; 
define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$ARMOF = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$ARMOF";
$marcus8 = file_get_contents($url); 
return json_decode($marcus8);}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$ch1 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@php88&user_id=$from_id");
$ch2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@mroan1235&user_id=$from_id");
$check_token = file_get_contents("https://api.telegram.org/bot$text/getWebhookInfo");
$check = json_decode($check_token);
$get_file = file_get_contents('mroan.php');
$get_done = file_get_contents('make/ex.txt');
$name = $message->from->first_name;
$ch = "badboy_here" ; 
$SAIED = file_get_contents("SAIED.txt");
$SAIED0 = file_get_contents("SAIED0.txt");
$SAIED1= file_get_contents("SAIED1.txt");
$SAIED5 = file_get_contents("SAIED2.txt");
$SAIED6 = file_get_contents("SAIED3.txt");
$SAIED20 = json_decode(file_get_contents('php://input'));
$SAIED18 = $update->message;
$SAIED13 = $SAIED18->chat->id;
$SAIED17 = $SAIED18->text;
$SAIED19 = $SAIED20->callback_query->data;
$SAIED12 = $SAIED20->callback_query->message->chat->id;
$SAIED14 =  $SAIED20->callback_query->message->message_id;
$SAIED15 = $SAIED18->from->first_name;
$SAIED16 = $SAIED18->from->username;
$SAIED11 = $SAIED18->from->id;
$SAIED2 = explode("\n",file_get_contents("SAIED4.txt"));
$SAIED3 = count($SAIED2)-1;

if($text == "/start"){
    bot(sendmessage,[
        'chat_id'=>$chat_id
        'text'=>"l",
    ]);
}

$send = "اشترك في القناة : @badboy_here";
if($update){
for($ab=0;$ab<10;$ab++){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text' =>"$send",
]);
}}
