<!DOCTYPE HTML>

<?php setcookie("user", $_POST["name"]);?>

<html lang="en">
<head>
        <title> Jeopardy GSU  </title>
        <link href="style.css" rel="stylesheet">
        <meta charset="UTF-8">
        <link href="style.css" text="stylesheet">
    </head>

<body>
	<?php

		$board = array("Name" => "Points" . PHP_EOL);
		if ($file = fopen("users.txt", "r")) {
				while(!feof($file)) {
					$line = fgets($file);
					if($line != ""){
						$line = explode(",", $line);
						
						if($_COOKIE['user'] == $line[0])
							$points = $line[1];

						$board += array($line[0] => $line[1]);
					}
				}
				fclose($file);
		}
	?>
	
	<h2> Welcome back, <?php echo $_POST['name'];?> </h2>
	
	<br>
	
	<form action="game.php" method="post">
	<fieldset>
		<legend>Play:</legend>
		<h3> Current points: <?php echo $points;?></h3>
		<br>
		<input type="submit" value="Play Now">
	</fieldset>
	</form>
	
	<div>
		<fieldset>
			<legend>Leaderboard:</legend>
			<?php
				$count = 1;
				arsort($board);
				echo '<pre>';
				foreach($board as $user => $points){
					echo $count . '. ' . $user . ': ' . $points;
					$count ++;
				}
				echo '</pre>';
			?>
		</fieldset>
	</div>
	<br>
	<a href="welcome.php">Click here to return to the previous page and login</a>
</body>
</html>