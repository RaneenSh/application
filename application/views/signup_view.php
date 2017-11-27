
        	<html>  
	<head>
	<style>
	div {
		width:300px;
		margin: auto;
		margin-top: 100px;
		border: 1px solid black;
		padding: 50px 30px 50px 80px;
	}
	</style>
	</head>
	<body>
	<div>
	<?php
	?>
	<form action="signup/data_submitted" method="post">
	E-mail: <input type="text" name="email"><br><br>
	Username: <input type="text" name="username"><br><br>
	Password: <input type = "password" name = "password"><br><br>
	Password confir: <input type = "password" name = "password_con"><br><br>
	<br><br>
	<input type="submit" name = "submit"><br><br>
	</form>
	<br>
	<form action="Signup/data_submitted" method="post">
	<input type = "submit" value = "Back">
	</form>
	<br>
	

	</div>

</body>
</html>
