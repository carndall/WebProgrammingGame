<!DOCTYPE HTML>

<html lang="en">
	<head>
        <title> Jeopardy GSU  </title>
        <link href="style.css" rel="stylesheet">
        <meta charset="UTF-8">
        <link href="style.css" text="stylesheet">
    </head>

	<body>
		<div class="main">
			<h1> Jeopardy GSU </h1>
			
			<br>
			
				<div>
				
					<form action="login-submit.php" method="post">
						<fieldset>
							<legend>Returning User:</legend>
							<label> Name: </label>
							<input name="name" type="text" class="Input" value="<?php if(isset($_COOKIE['user'])) echo $_COOKIE['user'];?>">
							<p>
								<input type="submit" value="Login" class="Button">
							</p>
						</fieldset>
					</form>

				</div>
				<br>
				<div>
				
					<form action="signup-submit.php" method="post">
						<fieldset>
							<legend>New User:</legend>
							<label> Name: </label>
							<input name="name" type="text" class="Input">
							<p>
								<input type="submit" value="Signup" class="Button">
							</p>
						</fieldset>
					</form>

				</div>
			</div>
	</body>
</html>