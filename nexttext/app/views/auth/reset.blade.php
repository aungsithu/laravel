<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
</head>
<body>
	{{ Form::open(array('action' => 'AuthController@postReset')) }}

		<h1>Reset Password</h1>
		<input type="email" name="email"/><br>
		<input type="submit" name="submit" value="Reset"/>

	{{ Form::close() }}
</body>
</html>