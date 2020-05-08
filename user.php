<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title> User </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>

    <body>
       <p> Welcome <?php echo $_SESSION['User']; ?> </p>
    </body>
</html>
