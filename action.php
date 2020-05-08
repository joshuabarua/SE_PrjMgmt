<?php
include "connection.php";
$act  = isset($_REQUEST['act']) ? $_REQUEST['act'] : 'list';

switch ($act)
{
    case 'list':
        $list = (new DB())->select("select * from `employee`");
        break;
    case 'add':
        $fName = isset($_REQUEST['f_name']) ? $_REQUEST['f_name'] : '';
        $lName = isset($_REQUEST['l_name']) ? $_REQUEST['l_name'] : '';
        $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : '';
        $password = isset($_REQUEST['password']) ? $_REQUEST['password'] : '';
        $level = isset($_REQUEST['level']) ? $_REQUEST['level'] : '';

        $list = (new DB())->execute("INSERT INTO `employee` (`f_name`,`l_name`,`email`,`password`,`user_level`)
                VALUES ('{$fName}','{$lName}','{$email}','{$password}','{$level}')");
        header("location:employee.php");
        break;
    case 'edit':
        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
        $info = (new DB())->find("select * from `employee` where employee_id = ".$id);
        break;
    case 'store':
        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
        $fName = isset($_REQUEST['f_name']) ? $_REQUEST['f_name'] : '';
        $lName = isset($_REQUEST['l_name']) ? $_REQUEST['l_name'] : '';
        $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : '';
        $password = isset($_REQUEST['password']) ? $_REQUEST['password'] : '';
        $level = isset($_REQUEST['level']) ? $_REQUEST['level'] : '';
        $sql = "update  `employee` set ";
        $sql .= " `f_name` = '{$fName}', ";
        $sql .= " `l_name` = '{$lName}', ";
        $sql .= " `email` = '{$email}', ";
        if (!empty($password)) $sql .= " `password` = '{$password}', ";
        $sql .= " `user_level` = '{$level}' ";
        $sql .= " where `employee_id` = {$id} ";

        $list = (new DB())->execute($sql);
        header("location:employee.php");
        break;
    case 'delete':
        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
        $list = (new DB())->execute("delete from employee where employee_id = ".$id);
        header("location:employee.php");
        break;
}