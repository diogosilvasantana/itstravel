<?php
/** CONEXÃO COM O MYSQL USANDO PDO */
function db_connect(){
    $PDO = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);

    return $PDO;
}

/** CRIA O HASH DA SENHA, USANDO MD5 E SHA-1 */
function make_hash($str){
    return sha1(md5($str));
}

/** VERIFICA SE O USUÁRIO ESTÁ LOGADO */
function isLoggedIn(){
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){
        return false;
    }
    return true;
}
