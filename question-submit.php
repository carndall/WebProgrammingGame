<?php 
	require("helpers.php");
	session_start(); 
?>

<!DOCTYPE HTML>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Answer</title>
  <link rel="stylesheet" href="style.css">
</head>

	<body>
		<?php
			$questionid = explode(",", array_keys($_POST)[1]);
			$col = $questionid[0];
			$row = $questionid[1];
			
			if(strcasecmp($_POST["answer"], $_SESSION["questions"][$col][$row]->get_answer()) == 0){
				echo "<h1>Correct!</h1>";
				echo "<br>";
				echo "<h2>You have earned $" . $_SESSION["questions"][$col][$row]->get_pointVal();
				if($_SESSION["questions"][$col][$row]->answered == 0)
					$_SESSION["points"] += intval($_SESSION["questions"][$col][$row]->get_pointVal());
			}else{
				echo "<h1>Your answer was incorrect and you lost $" . $_SESSION["questions"][$col][$row]->get_pointVal() . "</h1>";
				echo "<br>";
				echo "<h2>Correct answer: " . $_SESSION["questions"][$col][$row]->get_answer();
				if($_SESSION["questions"][$col][$row]->answered == 0)
					$_SESSION["points"] -= intval($_SESSION["questions"][$col][$row]->get_pointVal());
			}
			
			$_SESSION["questions"][$col][$row]->answered = 1;
		?>
		<br>
		<a href="game.php">Click here to return to the board</a>
	</body>
</html>