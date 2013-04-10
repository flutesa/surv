<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="/favicon.ico" rel="icon" type="image/x-icon" />
	<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<title> Удаление сотрудника </title>
</head>
<body>
<br>
<br>
<h2 align='center'>Удаление сотрудника</h2><br>

<?php
$conn = pg_connect("host=localhost dbname=surv user=postgres password=postgres") or die ('pgDB connect ERROR!');
?>

<form action="person_remove_delete.php" method="post">
</table>
	<table align="center"><td> 
	<form action="person_remove_delete.php" method="post">
	<td align='center'><button type="submit">Удалить</button></td>
	</form>
	<td> 
	<form action="persons.php" method="post">
	<td align='center'><button type="submit">Выйти</button></td>
	</form></td>
</table>
<br>
<br>
<table width='50%' border='1' cellspacing='1' cellpadding='2' align='center'>
<tr><td align=center><b>Табельный номер</b></td>
	<td align=center><select name="tab_num"><option value="0" >-Выбрать №-</option>
<? $result=pg_query($conn, "select tab_num, fam, name, pname, id_post, id_department from persons");
$s=pg_num_rows($result);
	if (!empty($s)){
		while($res=pg_fetch_array($result)) {
			$str='<option value="'.$res[0].'">'.$res[0].'</option>';
			print $str;
		}
	pg_freeresult($result);
	}
?></tr>
</form>

<?
pg_close($conn);
?>

</body>
</html>
