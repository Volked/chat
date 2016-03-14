<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>���</title>
    <script type="text/javascript" src="tmp/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/tmp/js/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="/tmp/js/chat.js"></script>
    <link rel="stylesheet" type="text/css" href="/tmp/js/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="/tmp/css/style.css"/>
</head>
<body>
<?php if (isset($_SESSION['user']['login']) && !empty($_SESSION['user']['login'])): ?>
    <a href="?logout=true">�����</a>
    <div class="result"></div>
    <div class="chat_area">
        <div align="center">
            <div class="result_message">� ���� ��� ���������</div>
        </div>
        <br>
        <hr>
        <br>

        <h1>����� ���������� � ��� ���!</h1>
        <br>
        <textarea autofocus class="message"></textarea>
        <br>
        <button class="btn btn-primary green" id="button">�������� ���������</button>
        <a href="#modal" role="button" class="btn" data-toggle="modal">
            ������� ���� ����� ���������
        </a>
        <!--modal-->
        <div id="modal" class="modal hide fade">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <br>

                <h2>������� ��������-��� ����� ���������</h2>
            </div>
            <div class="modal-body">
                <p>
                    <input autofocus id="colorpickerField" type="text" class="color" value="<?= $this->color; ?>"/>
                    <input type="hidden" class="id" value="<?= $_SESSION['user']['id']; ?>">
                    <br>
                    <button class="btn btn-primary" id="color">������</button>
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