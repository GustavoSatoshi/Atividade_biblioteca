<?php

//logout.php
//encerra a sessaão do usuaroo de forma segura
//cinceitos : session_start, session_destroy, header anti-cache, limpeza de cookies
    
//inicia a sessão do usuario ou retoma a sessão existente
session_start();

//limpa todas s variaveis da sessao (nome,etc.)
$_SESSION = array();

// remove o cookie de sessao do navegador, se estiver usando cookies para a sessão
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// destroi a sessao do servidor
session_destroy();

header("cache-control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// redireciona para a pagina de login
header("Location: login.php");
exit();
?>