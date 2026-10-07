<?php

//inclui a verificacão de sesão (protege a pagina de acesso não autorizada)
include ("verificar_sesao.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel biblioteca</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="conteiner">
    <!--   // exibe o nome do usuario logado (vem da sesão $_session) -->
       <h1>Olá, <?php echo $_SESSION['nome']; ?>!</h1>
       <p class="subtitulo">Bem-vindo ao painel da biblioteca!,Escolha uma opção abaixo:</p>
       <div class="painel-cards">
        <a href="cadastar_livro.php" class="card-link">Cadastrar livro

        </a>
        <a href="listar_livros.php" class="card-link">Listar livros</a>
        <a href="logout.php" class="card-link">Sair</a>
       </div>
       <div class="dica-navegacao">
        <strong>Fluxo:</strong>
        Cadastro → login → menu → painel → cadastrar ou listar livros→ painel
    </div>
    
    
    </div>
</body>
</html>