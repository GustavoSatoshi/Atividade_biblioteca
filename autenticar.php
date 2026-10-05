<?php 
// autenticar.php verifica se o email e senha fornecidos pelo usuário correspondem a um registro no banco de dados. Se corresponderem, o usuário é autenticado e redirecionado para a página de menu. Caso contrário, ele é redirecionado de volta para a página de login com uma mensagem de erro.
//conceito deles são:session_start, SELECT no mySQL, password_verfy!

//aqui inicia a sessão do usuario
//A sessão permite guardar os dados do usuario logado entre paginas!


// inclui a conexão com o banco de dados
include("conexao.php");
// recebe os dados do formulário de login
$email = $_POST['email'];
$senha = $_POST['senha'];

// ===============================================
// consulta no banco (read do crud)
// busca o usuario com o email e senha fornecidos
// ===============================================

// montando a consulta SQL SELECT 
$sql = "SELECT * FROM usuarios WHERE email = '$email'";

// executando a consulta e guarda o resultado
$resultado = mysqli_query($conexao, $sql);

// mysqli_fetch_assoc() transforma a linha do resultado
// em array associativo
$usuario = mysqli_fetch_assoc($resultado);

//=============================================================
// verifica se o usuário foi encontrado e se a senha está correta
//=============================================================

// verificação se o usuario foi encontrado e se a senha esta correta
// password_verify() compara a senha fornecida com o hash armazenado no banco de dados
if ($usuario && password_verify($senha, $usuario['senha'])) {
    $_SESSION['nome'] = $usuario['nome'];
    // redireciona para o painel principal
    header("Location: painel.php");
    exit();
} else{
    // login invalido : redireciona direto para o login
    header("Location: login.php?erro-login");
    exit();
}