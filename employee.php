<?php
    $_REQUEST['act'] = 'list';
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
    <div style="margin: 15px 0">
        <a href="employee_add.php" style="text-decoration: none;display: inline-block;padding: 5px 8px;border: 1px solid #cccccc">+ Add</a>
    </div>
    <table class="table">
        <tr>
            <th>employee_id</th>
            <th>fast name</th>
            <th>last name</th>
            <th>email</th>
            <th>Operation</th>
        </tr>
        <?php foreach ($list as $val){ ?>
        <tr>
            <td><?=$val['employee_id']?></td>
            <td><?=$val['f_name']?></td>
            <td><?=$val['l_name']?></td>
            <td><?=$val['email']?></td>
            <td>
                <a href="employee_edit.php?id=<?=$val['employee_id']?>">Edit</a>
                <a href="employee_delete.php?id=<?=$val['employee_id']?>"  onclick="if(confirm('are you sure ?')==false)return false;">Delete</a>
            </td>
        </tr>
        <?php }?>
    </table>
</div>
</body>
</html>