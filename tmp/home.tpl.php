<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Чат</title>
    <script type="text/javascript" src="tmp/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/tmp/js/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="/tmp/js/chat.js"></script>
    <link rel="stylesheet" type="text/css" href="/tmp/js/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="/tmp/css/style.css"/>
</head>
<body>
<?php if (isset($_SESSION['user']['login']) && !empty($_SESSION['user']['login'])): ?>
    <a href="?logout=true">Выход</a>
    <div class="result"></div>
    <div class="chat_area">
        <div align="center">
            <div class="result_message">В чате нет сообщений</div>
        </div>
        <br>
        <hr>
        <br>

        <h1>Добро пожаловать в наш чат!</h1>
        <br>
        <textarea autofocus class="message"></textarea>
        <br>
        <button class="btn btn-primary green" id="button">Написать сообщение</button>
        <a href="#modal" role="button" class="btn" data-toggle="modal">
            Выбрать цвет ваших сообщений
        </a>
        <!--modal-->
        <div id="modal" class="modal hide fade">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <br>

                <h2>Введите цветовой-код ваших сообщений</h2>
            </div>
            <div class="modal-body">
                <p>
                    <input autofocus id="colorpickerField" type="text" class="color" value="<?= $this->color; ?>"/>
                    <input type="hidden" class="id" value="<?= $_SESSION['user']['id']; ?>">
                    <br>
                    <button class="btn btn-primary" id="color">Готово</button>
                </p>
            </div>
        </div>
        <!--end_modal-->
    </div>
<?php else: ?>
    <?php include_once 'login.tpl.php'; ?>
<?php endif; ?>
</body>
</html>