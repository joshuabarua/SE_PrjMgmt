<?php
session_start();
    if(isset($_SESSION['user_level']))
    {
        if($_SESSION['user_level'] != 0 )
        {
            header('Location: user.php');
        }
    }
    else 
    {
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Admin </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>

    <body>
       <p> Welcome <?php echo $_SESSION['AdminUser']; ?> </p>
    </body>
</html>
