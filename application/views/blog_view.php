<html>
<head>
	<style>
	div {
		width:300px;
		margin: auto;
		margin-top: 150px;
		border: 1px solid black;
		padding: 50px 100px 50px 80px;
	}
	</style>
	</head>
<body>
<div>
<form action="blog/data_submitted" method="post">
	ID: <input type="text" name="id"><br><br>
	Title: <input type = "text" name = "title"><br><br>
	Body: <textarea rows="4" cols="50" name = "body"></textarea><br><br>
	<input type="submit" name = "submit"><br>
</form>

	<form action="blog/display_records" method="post">
	<input type="submit" name = "submit" value = "display"><br>
	</form>
</div>
</body>
</html>
