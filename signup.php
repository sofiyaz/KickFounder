<!DOCTYPE html>
<html>
	<body>
	<h1>New User Registration</h1>
	<?php
		if(!empty($_POST['sign'])){
			echo $_POST['username'];
			echo $_POST['loginname'];
			echo $_POST['password'];
		}
	?>
	<form action='signupprocess.php' method='post'>
		<p>Your name: <input type='text' name='username'></p>
		<p>Login name: <input type='text' name='loginname'></p>
		<p>password: <input type='text' name='password'></p>
		<p><input type='submit' value='submit',name='sign'></p>
	</form>

	</body>
</html>