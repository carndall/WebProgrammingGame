<?php 
	require("helpers.php");
	session_start();
?>

<!DOCTYPE HTML>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Question</title>
  <link rel="stylesheet" href="style.css">
</head>
<?php
	$questionid = explode(",", array_keys($_POST)[0]);
	$col = $questionid[0];
	$row = $questionid[1];
?>
	<body>
	
		<h1><?php echo $_SESSION["questions"][$col][$row]->get_question(); ?></h1>
		
		<br>
		
		<form action="question-submit.php" method="post">
		<p>
			Answer: 
			<input name="answer" type="text" class="Input">
			<?php echo '<input type="submit" name="' . $col . "," . $row . '" value="Submit" class="Question">'; ?>
		</p>
		</form>
	</body>
</html>