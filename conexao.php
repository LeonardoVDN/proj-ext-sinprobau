<?php
    $dbhost = '';
    $dbname = '';
    $usuario = '';
    $senha = '';
    $dsn = 'mysql:host='.$dbhost.';port=3306;dbname='.$dbname.';';
    $conn = mysqli_connect($dbhost, $usuario, $senha);
    mysqli_select_db($conn, $dbname);
    mysqli_set_charset($conn, "utf8mb4");
?>
