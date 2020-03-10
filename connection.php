<?php
    define('HOST', 'endereço do MySQL');
    define('USER', 'root');
    define('PASSWORD', 'root');
    define(('DB', 'login'));

    $connection = mysqli_connect(HOST, USER, PASSWORD, DB) or die ('Cannot connect with server.');
?>