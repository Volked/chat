<?php
require 'config.php';
$chat = chat::_self($db);
echo $chat->ShowMessage();

if(isset($_POST['message']) && !empty($_POST['message'])){
    $message = strip_tags(trim($_POST['message'],"<strong><em><u>"));

if(!$chat->newMessage($message)) echo 0;
else echo 1;
}

?>
