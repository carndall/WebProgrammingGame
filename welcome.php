<!DOCTYPE HTML>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Jeopardy GSU</title>
  <link rel="stylesheet" href="css/styles.css?v=1.0">
</head>

<body>

	<h1> Jeapardy GSU </h1>
	
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
</body>
</html>