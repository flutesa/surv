<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="/favicon.ico" rel="icon" type="image/x-icon" />
	<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<title> Удаление сотрудника </title>
</head>
<body>
<?php
$conn = pg_connect("host=localhost dbname=surv user=postgres password=postgres") or die ('pgDB connect ERROR!');

$tab_num = $_POST['tab_num'];
$fam = $_POST['fam'];
$name = $_POST['name'];
$pname = $_POST['pname'];
$id_post = $_POST['id_post'];
$id_department = $_POST['id_department'];

$query=pg_query($conn,"delete from persons where tab_num='$tab_num'"); 
echo "<p align='center'>Данные успешно удалены</p>";
echo "<p align='center'><a href='person_remove.php'>Вернуться</a></p>";

pg_close($conn);

?>

</body>
</html>