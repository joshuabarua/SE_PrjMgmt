<?php ?>
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
                <h3 class="form-item-group" style="text-align: center"> Add Employee</h3>
                <div class="form-item-group">
                    <label class="form-item-title">First Name :</label>
                    <input class="form-item-input" name="f_name" required />
                </div>
                <div class="form-item-group">
                    <label class="form-item-title">Last Name :</label>
                    <input class="form-item-input" name="l_name" required />
                </div>
                <div class="form-item-group">
                    <label class="form-item-title">Email :</label>
                    <input class="form-item-input" type="email" name="email"  required />
                </div>
                <div class="form-item-group">
                    <label class="form-item-title">Password :</label>
                    <input class="form-item-input" name="password" type="password"  required />
                </div>
                <div class="form-item-group">
                    <label class="form-item-title">Level :</label>
                    <input class="form-item-input" name="level" type="number" min="0" max="1"  required />
                </div>
                <div class="form-item-group">
                    <label class="form-item-title">&nbsp</label>
                    <input type="hidden" name="act" value="add">
                    <input type="submit" value="Submit" class="btn btn-">
                </div>
            </form>
            <h4> *User Level determines administrator priviliges, where 0 is admin and 1 is assistant </h4>
        </div>
    </div>
</body>
</html>