<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="/favicon.ico" rel="icon" type="image/x-icon" />
	<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<title> Добавление сотрудника </title>
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

$q=1;
if ($q==1){
if (strlen($_POST['tab_num'])==3){
$query=pg_query($conn,"insert into persons (tab_num,fam,name,pname,id_post,id_department) values ('$tab_num','$fam','$name','$pname','$id_post','$id_department')"); 
echo "<p align='center'>Данные успешно добавлены</p>";
echo "<p align='center'><a href='person_new.php'>Вернуться</a></p>";
}
if (strlen($_POST['tab_num'])<>3){
 echo "<p align='center'>Неправильно заполнены поля! <a href='person_new.php'>Попробуйте ещё раз</a></p>";
}
}
pg_close($conn);

?>

</body>
</html>