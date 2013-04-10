<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="/favicon.ico" rel="icon" type="image/x-icon" />
	<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<title> Заявка </title>
</head>
<body>

<?php
$conn = pg_connect("host=localhost dbname=surv user=postgres password=postgres") or die ('pgDB connect ERROR!');

$fam = $_POST['fam'];
$name = $_POST['name'];
$pname = $_POST['pname'];
$email = $_POST['email'];
$result = pg_query($conn, "select email from demands where email='".$email."'"); 

$num = pg_num_rows($result);

if (($num)==1){
echo "<p align='center'>Заявка для данного e-mail уже существует! <a href='authorization.php'>Попробуйте ещё раз</a></p>";
$q=0;
}
else {
$q=1;
}

if ($q==1){
if (strlen($_POST['fam'])<30 and strlen($_POST['name'])<30 and strlen($_POST['pname'])<30 and strlen($_POST['email'])<30){ 
$query=pg_query($conn,"insert into demands (fam,name,pname,email) values('$fam','$name','$pname','$email')"); 
echo "<p align='center'>Заявка успешно отправлена. Как только она будет рассмотрена, ответ поступит на e-mail</p>";
}
if (strlen($_POST['fam'])<2 and strlen($_POST['name'])<2 and strlen($_POST['email'])<5){
echo "<p align='center'>Неправильно заполнены поля! <a href='authorization.php'>Попробуйте ещё раз</a></p>";
}
}
pg_close($conn);
?>

</body>
</html>