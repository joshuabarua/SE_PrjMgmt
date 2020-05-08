<?php
   session_start();
   include "login_user.php";
 

  /*if(!isset($SESSION['LoginUser']))
   {
       header('Location: login.php');
   }*/

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>

<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="login_user.php" method="POST">
            <div class="form-group ">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="Enter Email">
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <p style="color:red;">
                <?php echo $message; ?>
            </p>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="btnLogin"value="Login">
            </div>
        </form>
    </div>    
</body>
</html>