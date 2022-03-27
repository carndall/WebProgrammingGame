<!DOCTYPE HTML>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Jeopardy GSU</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

	<h1> Jeopardy GSU </h1>
	
	<br>
	
	    <div>
        
			<form action="login-submit.php" method="post">
				<fieldset>
					<legend>Returning User:</legend>
					<label> Name: </label>
					<input name="name" type="text" class="Input" value="">
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