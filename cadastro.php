<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Cadastro de usuário</h1>
        <p class="substituto">crie sua conta para acesar o sistema da biblioteca</p>
<?php
if (isset($_GET["erro"]) && $_GET["erro"] && $_GET ["erro"] === "email_cadastrado") {
    echo '<div class="mensagem-erro">O email já está cadastrado.</div>';
}
?>
<form action="salvar_usuario.php" method ="POST">
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Digite seu email" required>
    </div>
    <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
    </div>
    <button type="submit" class="btn btn-block">Cadastrar</button>
    </form>
    <div class="nav-links">
       <p>Já tem conta? <a href="login.php">Faça login</a></p>
    </div>
    <a href="login.php" class="btn btn-voltar">voltar para login</a>
    <div class="dica-navegacao">
        <strong> fluxo:</strong> Cadastro → login → menu → painel → gerenciar livros
         </div>
        </div>
</body>

</html>                                         
