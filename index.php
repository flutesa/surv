<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="/favicon.ico" rel="icon" type="image/x-icon" />
	<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<title> СУРВ Авторизация </title>
</head>
<body>
<br>
<br>
<h2 align='center'>Авторизация пользователя</h2><br>
<h3 align='center'>Система Учёта Рабочего Времени ОАО "Урайавиа"</h3><br>
<form action="authorization.php" method="post">
    	<table>
     <tr>
	<table align="center">
		<td> Логин<font color=red>*</font></td>
            <td><input type="text" name="login" /></td>
     </tr><tr>
            <td> Пароль<font color=red>*</font></td>
            <td><input type="password" name="password" /></td>
 	      </tr><tr>
            <td></td>
            <td align='center'><input type="submit" value="Войти" /></td> 
		</tr><tr>
        </table>
</form>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<form action="demand.php" method="post">
       <p align='center'><U>Для получения прав доступа отправьте заявку</U></p>   	
        <table>
      <tr>
	<table align="center">
            <td>Фамилия<font color=red>*</font></td>
            	<td><input type="text" name="fam" /></td>
            </tr><tr>
            <td>Имя<font color=red>*</font></td>
            	<td><input type="text" name="name" /></td>           
            </tr><tr>
            <td>Отчество</td>
            	<td><input type="text" name="pname" /></td>
            </tr><tr>
            <td>E-mail<font color=red>*</font></td>
            	<td><input type="text" name="email" /></td>            
 	      </tr><tr>
 	      </tr><tr>
            <td></td>
            <td align='center'><input type="submit" value="Отправить"/></td> 
		</tr><tr>
	</table>
</form>

</body>
</html>