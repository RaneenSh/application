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
<form action="blog_model/delete" method="post">
<table>
<th><tr><td>id</td><td>title</td><td>body</td></tr></th>
<?php
if($records) {
      foreach ($records->result_array() as $row) {
   echo '<tr>
        <td><input type="checkbox" name="list[]" >' . $row['id']  . '</td>
        <td>' . $row['title'] . '</td>
        <td>' . $row['body'] . ' </td>
    </tr>';
	  }
}
?>
	<input type="submit" name = "delete_submit" value = "delete"><br>
	</form>		
<form action="index" method="post">
	<input type="submit" name = "submit" value = "back"><br>
	</form>

</table>




</div>
</body>
</html>