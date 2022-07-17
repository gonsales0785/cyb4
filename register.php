<html>
	<head>
		<title>Регистрация</title>
		<meta charset="utf-8" />
		<style>
			input, button{
				width: 150px;
				margin: 5px;
				text-align: center;
			}
		</style>	
	</head>
	
	<body>
		<a href="index1.html">Домашняя страница</a>
		<h1> Регистрация нового пользователя</h1>
		<form method="POST"  action="reg_db.php">
            <p> Ваш Email: <br />
            <input type="email" name="txtEmail"/> 
            <p> Ваш логин: <br />
			<input type="text" name="txtUser"/> 
            <p> Ваш пароль: <br />
			<input type="password" name="txtPwd" /> <br />
			<button>Зарегистрироваться!</button> <br />
        
        <div align="center">
           <i> Автор: Юрий Гонсалес </i>
        </div>
		</form>
	</body>
</html>

