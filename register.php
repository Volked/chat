<?php
require_once 'inc/database.php';

if (isset($_POST['submit'])) 
{
    if (empty($_POST['login'])) 
    {
        $info_reg = 'Вы не ввели Логин';
    }                 
    elseif (empty($_POST['password'])) 
    {
        $info_reg = 'Вы не ввели пароль';
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
	  }
	  else
	  {
		  $query = "INSERT INTO `login` (login, password)
        VALUES ('$login', '$password')";
        $result = mysqli_query($db, $query) or die(mysql_error());
                    
        $info_reg = 'Вы успешно зарегистрировались!';
	  }
}
}

$info_reg = isset($info_reg) ? $info_reg : NULL;
echo $info_reg;
?>