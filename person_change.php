<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="/favicon.ico" rel="icon" type="image/x-icon" />
	<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<title> Изменение сотрудника </title>
</head>
<body>
<br>
<br>
<h2 align='center'>Изменение данных сотрудника</h2><br>

<?php
$conn = pg_connect("host=localhost dbname=surv user=postgres password=postgres") or die ('pgDB connect ERROR!');
?>

<form action="person_change_update.php" method="post">
</table>
	<table align="center"><td> 
	<form action="person_change_update.php" method="post">
	<td align='center'><button type="submit">Сохранить</button></td>
	</form>
	<td> 
	<form action="persons.php" method="post">
	<td align='center'><button type="submit">Выйти</button></td>
	</form></td>
</table>
<br>
<br>
<table width='100%' border='1' cellspacing='1' cellpadding='2' align='center'>
<tr><td align=center><b>Табельный номер</b></td>
	<td align=center><b>Фамилия</b></td>
	<td align=center><b>Имя</b></td>
	<td align=center><b>Отчество</b></td>
	<td align=center><b>Должность</b></td>
	<td align=center><b>Подразделение<b/></td></tr>
<tr><td align=center><select name="tab_num"><option value="0" >-Выбрать №-</option>
<? $result=pg_query($conn, "select tab_num, fam, name, pname, id_post, id_department from persons");
$s=pg_num_rows($result);
	if (!empty($s)){
		while($res=pg_fetch_array($result)) {
			$str='<option value="'.$res[0].'">'.$res[0].'</option>';
			print $str;
		}
	pg_freeresult($result);
	}
?>
</select>
	<td align=center><input type="text" name="fam"/></td>
	<td align=center><input type="text" name="name"/></td>
	<td align=center><input type="text" name="pname" /></td>
	<td align=center><select name="id_post"><option value="0" >-Изменить должность-</option>
<? $result=pg_query($conn, "select id_post, post, post_short from posts");
$s=pg_num_rows($result);
	if (!empty($s)){
		while($res=pg_fetch_array($result)) {
			$str='<option value="'.$res[0].'">'.$res[1].'</option>';
			print $str;
		}
	pg_freeresult($result);
	}
?>
</select>
</td>
	<td align=center><select name="id_department"><option value="0" >-Изменить подразделение-</option>
<? $result=pg_query($conn, "select id_department, department from departments");
$s=pg_num_rows($result);
	if (!empty($s)){
		while($res=pg_fetch_array($result)) {
			$str='<option value="'.$res[0].'">'.$res[1].'</option>';
			print $str;
		}
	pg_freeresult($result);
	}
?>
</select>
</td></tr>
</form>

<?
pg_close($conn);
?>

</body>
</html>
