<?php

// INICIA A SESSÃO
session_start();

// MUDA O VALOR DE LOGGED_IN PARA FALSE
$_SESSION['logged_in'] = false;

// FINALIZA A SESSÃO
session_destroy;

// RETORNA PARA A PÁGINA DE LOGIN
header('Location:../admin/login.php');