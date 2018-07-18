<?php
// CONSTANTES COM AS CREDENCIAIS DE ACESSO AO BANCO MYSQL
define('DB_HOST', 'mysql');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'ITSTRAVEL');

//HABIITA TODAS AS EXIBIÇÕES DE ERROS
ini_set('display_errors', true);
error_reporting(E_ALL);

// INCLUI O ARQUIVO DE FUNÇÕES
require_once 'function.php';
