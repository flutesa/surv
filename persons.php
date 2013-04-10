<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="/favicon.ico" rel="icon" type="image/x-icon" />
	<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<title> Сотрудники </title>
</head>
<body>
<br>
<br>
<h2 align='center'>Управление сотрудниками</h2><br>
<table align="center"><td> 
	<form action="person_new.php" method="post">
	<td align='center'><button type="submit">Добавить</button></td>
	</form></td>
	<td> 
	<form action="person_change.php" method="post">
	<td align='center'><button type="submit">Изменить</button></td>
</form></td>
	<td> 
	<form action="person_remove.php" method="post">
	<td align='center'><button type="submit">Удалить</button></td>
</form></td>
	<td> 
	<form action="main.php" method="post">
	<td align='center'><button type="submit">Выйти</button></td>
</form></td>
</table>
<br>
<br>

<?php
$conn = pg_connect("host=localhost dbname=surv user=postgres password=postgres") or die ('pgDB connect ERROR!');

$result = pg_query($conn, "select tab_num, fam, name, pname, post, department from persons inner join departments on persons.id_department=departments.id_department inner join posts on persons.id_post=posts.id_post order by departments.department, persons.fam");

$total_rows = pg_num_rows($result); 
  if (!$total_rows) { 
    print "<h1>В таблице сотрудников отсутствуют данные</h1>"; 
    return; 
  } 

$row = pg_fetch_row($result); 
$total_cols = count($row); 

  print "<table width='100%' border='1' cellspacing='1' cellpadding='2' align='center'>"; 
  print "<tr><td align=center><b>№</b></td><td align=center><b>Фамилия</b></td><td align=center><b>Имя</b></td><td align=center><b>Отчество</b></td><td align=center><b>Должность</b></td><td align=center><b>Подразделение<b/></td></tr>";  
  print "<tr>"; 
  $i = 0; 
  while($i < $total_cols){ 
    print "<td>"; 
    print $row[$i]; 
    print "</td>"; 
    $i++; 
  } 
  print "</tr>"; 

  while($row = pg_fetch_row ($result)) { 
    $i = 0; 
    print "<tr>"; 
    while($i < $total_cols){ 
      print "<td>"; 
      print $row[$i]; 
      print "</td>"; 
      $i++; 
    } 
    print "</tr>"; 
  }
  print "<tr><td colspan=$total_cols align=center>всего $total_rows сотрудников</td></tr>";  
  print "</TABLE>"; 

pg_close($conn);
?>

</body>
</html>
