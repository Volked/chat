<?php
require_once 'inc/database.php';

if (isset($_POST['submit'])) 
{
    if (empty($_POST['login'])) 
    {
        $info_reg = '�� �� ����� �����';
    }                 
    elseif (empty($_POST['password'])) 
    {
        $info_reg = '�� �� ����� ������';
    }                      
   else 
    {
        $login = $_POST['login'];
        $color = $_POST['color'];               
        $password = md5($_POST['password']);
		$ip = 'localhost';
  
	$query = "SELECT `id`
      FROM `login`
      WHERE `login`='{$login}'
      ";
      $sql = mysqli_query($db, $query) or die(mysql_error());
	  if (mysqli_num_rows($sql) > 0){
		  echo '�������:'. $_POST['login'] ."\n��� ����������!����������� ������ ��� ������������";
	  }
	  else
	  {
		  $query = "INSERT INTO `login` (login, color, password)
        VALUES ('$login', '$color', '$password')";
        $result = mysqli_query($db, $query) or die(mysql_error());
                    
        $info_reg = '�� ������� ������������������!';
	  }
}
}

$info_reg = isset($info_reg) ? $info_reg : NULL;
echo $info_reg;
?>