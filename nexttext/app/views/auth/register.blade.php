<!DOCTYPE html>
<html>
<head>
	<title>My laravel test</title>
</head>
<body>
{{ Form::open(array('action' => 'AuthController@postRegister')) }}

	<h1>Register Form </h1>
	<?php 
	// if( $errors->has('username')) { 
	
	echo $errors->first('username'); 

	// }
	?>

	Username<br><input type="username" name="username"/><br>

	Email<br><input type="email" name="email"/><br>

	Password<br><input type="password" name="password"/><br>

	Confirm Password<br><input type="password" name="confirm_passowrd"/><br>

	<input type="submit" name="submit" value="Register"/>


{{ Form::close() }}
</body>
</html>