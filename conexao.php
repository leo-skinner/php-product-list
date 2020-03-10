<?php
    define('HOST', 'endereço do MySQL');
    define('USUARIO', 'root');
    define('SENHA', 'root');
    define(('DB', 'login'));

    $conexao = mysqli_connect(HOST, USUARIO,,SENHA, DB) or die ('Cannot connect with server.');
    



    

?>