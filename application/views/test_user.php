<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<div class="container">
		<div class="container">
			<form action="<?php echo site_url("user/User/login_admin"); ?>" method="POST" class="form">
				<input type="email" name="username" id="">
				<input type="password" name="password" id="">
				<input type="submit" value="Test Connexion">
			</form>
		</div>
	</div>	

</body>
</html>