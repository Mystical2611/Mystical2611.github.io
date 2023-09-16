<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style type="text/css">
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
			perspective: 1000px;
		}

		h1 {
			font-size: 36px;
			text-align: center;
			margin-top: 0;
			transform-style: preserve-3d;
			animation: flipin 2s;
		}

		form {
			margin-top: 50px;
			transform-style: preserve-3d;
			animation: flipin 2s;
			animation-delay: 1s;
		}

		label {
			display: block;
			font-size: 18px;
			margin-bottom: 10px;
			color: #666;
			transform-style: preserve-3d;
			animation: flipin 2s;
			animation-delay: 1s;
		}

		input[type="text"],
		input[type="password"] {
			display: block;
			width: 100%;
			padding: 10px;
			font-size: 16px;
			border-radius: 5px;
			border: none;
			background-color: #f2f2f2;
			margin-bottom: 20px;
			transform-style: preserve-3d;
			animation: flipin 2s;
			animation-delay: 1s;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			font-size: 18px;
			padding: 10px 20px;
			border-radius: 5px;
			border: none;
			cursor: pointer;
			transform-style: preserve-3d;
			animation: flipin 2s;
			animation-delay: 1s;
			transition: transform 0.5s;
		}

		input[type="submit"]:hover {
			transform: scale(1.1);
		}

		.error-message {
			color: #f00;
			margin-top: 20px;
			animation: flipin 2s;
			animation-delay: 1s;
			transform-style: preserve-3d;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Login</h1>
		<form action="#" method="post">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required>

			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>

			<input type="submit" value="Login">
		</form>
		<div class="error-message">Invalid username or password</div>
	</div>
</body>
</html>
