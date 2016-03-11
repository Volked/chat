<?php
require 'config.php';
$chat = chat::_self($db);
if (isset($_POST['color'])) {
    $id = intval($_POST['id']);
    $collor = trim(strip_tags($_POST['color']));
    try {
        if ($chat->collor($collor, $id)) return true;
    } catch (Exception $e) {
        //Запись в лог
    }
}
if (isset($_POST) && !empty($_POST)) {
    if (!$chat->LoginMembers($_POST['login'], $_POST['password'])) {
        echo 0;
    } else {
        echo 1;
    }
}
?>
