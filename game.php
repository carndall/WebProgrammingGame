<?php
	require("helpers.php");
	session_start();
		
	if(!isset($_SESSION["questions"])){
		$points = 0;
		$finished = 0;
		$cat1 = $cat2 = $cat3 = array();
		
		$cat1 = fillCat($cat1, "musicquestions.txt");
		$cat2 = fillCat($cat2, "sportsquestions.txt");
		$cat3 = fillCat($cat3, "miscquestions.txt");
	
		$_SESSION["questions"] = array($cat1, $cat2, $cat3);
		$_SESSION["points"] = 0;
	}else{
		$temp = 1;
		
		foreach($_SESSION["questions"] as $cat){
			foreach($cat as $q){
				if($q->get_answered() == 0)
					$temp = 0;
			}
		}
		
		$finished = $temp;
	}
?>

<!doctype html>
<html lang="en">

    <head>
        <title> Homepage </title>
        <link href="style.css" rel="stylesheet">
        <meta charset="UTF-8">
        <link href="style.css" text="stylesheet">
    </head>
    <body>
        <h1> Jeopardy </h1>
        <h2> <u> Choose a Question </u> </h2>

        <div class="categories">
        <table>
            <tr>
                <th> Music </th>
                <th> Sports </th>
                <th> Misc </th>
            </tr>
            <form action="question.php" method="post">
			<tr>
                <td>
					<?php printQuestion("0,0", 200); ?>
				</td>
                <td>
					<?php printQuestion("1,0", 200); ?>
				</td>
                <td>
					<?php printQuestion("2,0", 200); ?>
				</td>
            </tr>
            <tr>
				<td>
					<?php printQuestion("0,1", 400); ?>
				</td>
                <td>
					<?php printQuestion("1,1", 400); ?>
				</td>
                <td>
					<?php printQuestion("2,1", 400); ?>
				</td>
            </tr>
            <tr>
				<td>
					<?php printQuestion("0,2", 600); ?>
				</td>
                <td>
					<?php printQuestion("1,2", 600); ?>
				</td>
                <td>
					<?php printQuestion("2,2", 600); ?>
				</td>
            </tr>
            <tr>
				<td>
					<?php printQuestion("0,3", 800); ?>
				</td>
                <td>
					<?php printQuestion("1,3", 800); ?>
				</td>
                <td>
					<?php printQuestion("2,3", 800); ?>
				</td>
            </tr>
			</form>
        </table>
        </div>
		
		<br>
		
		<?php
			if($finished == 1){
				echo '<h2>You finished the game with $' . $_SESSION["points"] . '</h2>';
				echo '<br>';
				echo '<a href="login-submit.php">Click here to return to the main page</a>';
				
				$newfile = array();
				
				if ($file = fopen("users.txt", "r")) {
					while(!feof($file)) {
						$line = fgets($file);
						$line = explode(",", $line);
						
						if($line[0] == $_COOKIE['user']){
							$old = implode(",", $line);
							$line[1] = intval($line[1]) + intval($_SESSION["points"]);
							$new = implode(",", $line);
						}
					}
					fclose($file);
				}
				
				$contents = file_get_contents("users.txt");
				$contents = str_replace($old, $new . PHP_EOL, $contents);
				file_put_contents("users.txt", $contents);
				
				session_unset();
				session_destroy();
			}else
				echo "<br> Current Points: " . $_SESSION["points"];
			
		?>
    </body>

</html>