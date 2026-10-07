<?php

//verificar_sessao.php
//verifica se o usuario esta logado, caso não esteja redireciona para a
//pagina de login

//inicia sessa odo usuarrio ou retoma a sessao existente
session_start();

//cabeçaçhos HTTP para impedir cache do navegador
 //isso evita que o usuario acesse a pagina protegida usando o botão voltar do navegador

 header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

//verifica se a variavel de sesão 'nome' existe
// se não existir, significa que o usuario não esta logado
if (!isset($_SESSION['nome'])) {
    //redireciona para a pagina de login
    header("Location: login.php");
    exit();
}