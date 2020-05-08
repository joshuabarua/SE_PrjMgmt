<?php
    define('DB_SERVER', '127.0.0.1');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'password123');
    define('DB_DATABASE', 'tour_management_db');
    $db_connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    
    if(!$db_connection){
        echo "Connection Unsuccessful";
    }

 ?>
