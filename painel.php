<?php
session_start();
include('verifica-login.php ');
?>

<h2>Olá, <?php echo $_SESSION['user']; ?></h2>
<h1> <a href="logout.php">logout</a></h1>