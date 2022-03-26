<!DOCTYPE HTML>

<?php setcookie("user", $_POST["name"]);?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Welcome!</title>
  <link rel="stylesheet" href="css/styles.css?v=1.0">
</head>

<body>
	<?php 
		$continue = true;
		
		if ($file = fopen("users.txt", "r")) {
			while(!feof($file)) {
				$line = fgets($file);
			    if (explode(",", $line)[0] == $_POST["name"])
					$continue = false;
			}
			fclose($file);
		}

		if ($continue){
			print '<h1>Thank you for joining Jeopardy GSU, ' . $_POST["name"] . '</h1>';
			file_put_contents("users.txt",$_POST["name"] . ",0" . PHP_EOL, FILE_APPEND);
		}else
			print '<h1>You are already a member of Jeopardy GSU, ' . $_POST["name"] . '</h1>';

	?>
	
	<a href="welcome.php">Click here to return to the previous page and login</a>
</body>
</html>