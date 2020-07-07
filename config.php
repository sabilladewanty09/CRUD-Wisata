

<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "wisataindo";

    $db = mysqli_connect($server, $user, $password, $database);

    if(!$db) {
        die("Gagal Terhubung ke database: " .mysqli_connect_error());
    }


    


?>

