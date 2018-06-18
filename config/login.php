<?php

// INCLUI O ARQUIVO DE INICIALIZAÇÃO
require 'init.php';

// RESGATA AS VARIÁVEIS DO FORMULÁRIO
$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

if (empty($usuario) || empty($senha))
{
    echo "Informe seu usuário e senha";
    exit;
}

//CRIA O HASH DA SENHA
$senhaHash = make_hash($senha);

$PDO = db_connect();

$sql = "SELECT ID_USUARIO, NOME_USUARIO FROM USUARIOS
        WHERE LOGIN_USUARIO = :usuario AND SENHA_USUARIO = :senha";
$stmt = $PDO->prepare($sql);

$stmt->bindParam(':usuario', $usuario);
$stmt->bindParam(':senha', $senhaHash);

$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($users) <=0)
{
    echo "Usuário ou senha inválidos";
    exit;
}

// PEGA O PRIMEIRO USUÁRIO
$user = $users[0];

session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['ID_USUARIO'];
$_SESSION['user_name'] = $user['NOME_USUARIO'];

header('location: ../admin/index.php');



