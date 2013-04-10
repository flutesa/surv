<?php

$login = $_POST['login'];
$password = $_POST['password'];

$conn = pg_connect("host=localhost dbname=surv user=postgres password=postgres") or die ('pgDB connect ERROR!');

$result = pg_query($conn, "select id_user from users where login='".$login."' and password='".$password."'");

$num = pg_num_rows($result); 

if($num<>1){
header('Location: authorization_error.php');}

else{
header('Location: main.php');}
pg_freeresult($result);
pg_close($conn);
?>
