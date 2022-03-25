<?php

    if(isset($_GET['name'])){
        $name = $_GET['name']; 
        echo "<br>"; 

    }
    $user = $_GET['name']; 
    $lines = file("users.txt"); 
    foreach($lines as $line){
        if(strpos($line, $user) !== false){  // gets the users details 
            header('location: index.php');
        //    echo "Welcome " .$user; 
        }
       
    }

?>

<!doctype html>
<html lang="en">
    <head>
        <title> </title>
        <link href="style.css" rel="stylesheet">
        <meta charset="UTF-8">
    </head>

    <body>

    </body>
</html>