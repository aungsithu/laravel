<!DOCTYPE html>
<html>
<head>
	<title>Login Form for aungsithu</title>
</head>
<body>
	{{ Form::open(array('action' => 'AuthController@postRegister')) }}

		<h1>Login Form</h1>
		<input type="username" name="username"/><br>

		<input type="password" name="password"/><br>

		<input type="submit" name="submit" value="Login"/>

	{{ Form::close() }}
</body>
</html>