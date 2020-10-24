<!DOCTYPE html>
<html>
<head>
	<title>PHP Practice</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		.main{border: 2px solid black;
			margin:auto; display: flex;align-items: center;justify-content: center;}

		/*.main form table{width: 400px;}*/


	</style>
</head>
<body>
	
 <div class="main">
	<form action="post.php" method="post">
		<table>
			<tr>
				<td>
					<h1>Name:</h1>
				</td>
				<td style="height: 30px">
					<input type="text" name="user">
				</td>
			</tr>
			<tr>
				<td>
					<h1>Email:</h1>
				</td>
				<td>
					<input type="email" name="email">
				</td>
			</tr>
			<tr>
				<td>
					<h1>Password:</h1>
				</td>
				<td>
					<input type="password" name="pass">
				</td>
			</tr>
			<tr>
				<td>
					
				</td>
				<td>
					<input type="submit" name="submit">
				</td>
			</tr>
		</table>
	</form>

	</div>


</body>