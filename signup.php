<?php
    if(isset($_POST['submitButton'])){
        $username = $_POST['name'];
        $text = $username ."\n";
        $fp = fopen('users.txt', 'a+');
        if(fwrite($fp, $text))  {
            // echo 'Registered User';
            header('location: login.php');
        }
        fclose ($fp);    
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <title> Sign-Up </title>
        <link href="style.css" rel="stylesheet">
        <meta charset="UTF-8">
    </head>

    <body>
        <div>
            
            <form action="" method="POST">
            <fieldset>
                <h3> Please enter your information to create a new player</h1>

                <label> Name: </label>
                <input name="name" type="text" class="Input">
                <p>
                    <input name= "submitButton" type="submit" value="Sign-Up" class="Button">
                </p>
            </fieldset>
            </form>
            
        </div>
    </body>
</html>