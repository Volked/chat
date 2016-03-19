<script type="text/javascript" src="tmp/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/tmp/js/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="/tmp/js/chat.js"></script>
<link rel="stylesheet" type="text/css" href="/tmp/js/bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="/tmp/css/style.css"/>
<?php

require_once 'inc/database.php';

if (isset($_POST['submit'])) 
{
    if (empty($_POST['login'])) 
    {
        $info_reg = "<div class='alert alert-error'>Вы не ввели Логин!</div>";
    }                 
    elseif (empty($_POST['password'])) 
    {
        $info_reg = "<div class='alert alert-error'>Вы не ввели пароль/Слишком короткий пароль.Минимальное значение 4!</div>";
    }                      
   else 
    {
        $login = $_POST['login'];
		$login = strip_tags(trim($login));
		$login = $db->real_escape_string($login);
        $password = md5($_POST['password']);
		$ip = 'localhost';
  
	$query = "SELECT `id`
      FROM `login`
      WHERE `login`='{$login}'
      ";
      $sql = mysqli_query($db, $query) or die(mysql_error());
	  if (mysqli_num_rows($sql) > 0){
		  echo 'Аккаунт:'. $_POST['login'] ."\nуже существует!Используйте другое имя пользователя";
		  echo '<br><a href="/">Главная</a>';
	  }
	  else
	  {
		  $query = "INSERT INTO `login` (login, password)
        VALUES ('$login', '$password')";
        $result = mysqli_query($db, $query) or die(mysql_error());
       
		 $info_reg = "<div class='alert alert-success'>Вы успешно зарегистрировались!</div>";
		
	  }
}
}

$info_reg = isset($info_reg) ? $info_reg : NULL;
echo $info_reg;
?>