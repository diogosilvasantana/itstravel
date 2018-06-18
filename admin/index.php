<?php
session_start();
 
require '../config/init.php';

require '../config/check.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
 
        <title>Painel Administrativo - ITSTRAVEL</title>
    </head>
 
    <body>
         
        <h1>Painel Administrativo - ITSTRAVEL</h1>
 
        <?php if (isLoggedIn()): ?>
            <p>Olá, <?php echo $_SESSION['user_name']; ?>. <a href="panel.php">Painel</a> | <a href="../config/logout.php">Sair</a></p>
        <?php else: ?>
            <?php header('Location: login.php'); ?>
        <?php endif; ?>
 
    </body>
</html>