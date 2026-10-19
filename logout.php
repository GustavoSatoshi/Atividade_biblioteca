<?php
 
//logout.php
//encerra a sessaão do usuaroo de forma segura
//cinceitos : session_start, session_destroy, header anti-cache, limpeza de cookies
   
//inicia a sessão do usuario ou retoma a sessão existente
session_start();
 
//limpa todas as variaveis da sessao (nome,etc.)
$_SESSION = array();
 
// remove o cookie de sessao
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
 
// destroi a sessao
session_destroy();
 
// Cabeçalhos que impedem o navegador de usar páginas em cache
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
// redireciona para a pagina de login
header("Location: login.php");
exit();
?>
 