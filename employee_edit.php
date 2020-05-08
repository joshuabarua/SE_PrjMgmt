<?php
$_REQUEST['act'] = 'edit';
include "action.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="container">
        <div class="form">

            <form action="action.php" style="width: 500px;margin:auto;margin-top: 150px">
                <h3 class="form-item-group" style="text-align: center"> Update Employee Information</h3>
                <div class="form-item-group">
                    <label class="form-item-title">First Name :</label>
                    <input class="form-item-input" name="f_name" required value="<?=$info['f_name']?>" />
                </div>
                <div class="form-item-group">
                    <label class="form-item-title">Last Name :</label>
                    <input class="form-item-input" name="l_name" required  value="<?=$info['l_name']?>" />
                </div>
                <div class="form-item-group">
                    <label class="form-item-title">Email :</label>
                    <input class="form-item-input" type="email" name="email"  value="<?=$info['email']?>"  required />
                </div>
                <div class="form-item-group">
                    <label class="form-item-title">Password :</label>
                    <input class="form-item-input" name="password" type="password"  />
                </div>
                <div class="form-item-group">
                    <label class="form-item-title">Level :</label>
                    <input class="form-item-input" name="level" type="number"  value="<?=$info['user_level']?>"  required />
                </div>
                <div class="form-item-group">
                    <label class="form-item-title">&nbsp</label>
                    <input type="hidden" name="act" value="store">
                    <input type="hidden" name="id" value="<?=$info['employee_id']?>">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</body>
</html>