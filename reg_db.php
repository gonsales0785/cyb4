<?php
session_start();

$user = $_REQUEST["txtUser"];
$pwd = $_REQUEST["txtPwd"];
$mail = $_REQUEST["txtEmail"];
$hash = hash("sha256", $pwd);

$server = getenv("cyb4_db_server");
$login = getenv("cyb4_db_user");
$pwd = trim(getenv("cyb4_db_pwd"));
$conn = mysqli_connect($server,$login,$pwd,"cyb4");


if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  }

$sql = "INSERT INTO users (Login,PwdHash,email) 
VALUES('$user','$hash','$mail')";
mysqli_query($conn, $sql);


echo " Пользователь зарегистрирован. Вы будете перенаправлены на страницу входа.";
header( 'Refresh: 3; url=login.php' );
//sleep(5);
//header( 'Location: login.php' );
mysqli_close($conn);
