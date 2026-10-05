<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-biblioteca</title>
</head>

<body>
    <div class="container">
        <h1>biblioteca</h1>
        <p class="substituto">Faça login para acessar o sistema da biblioteca</p>
        <?php
        if (isset($_GET["erro"]) && $_GET["erro"] && $_GET ["erro"] === 'login') {
            echo '<div class="mensagem-erro">O login esta incorreto. verifiqude seu email e senha e tente novamente.</div>';
            
        }
        ?>
        <form action="verificar_login.php" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
            </div>
            <button type="submit" class="btn btn-block">Entrar</button> 
        </form>
        <div class="nav-links">
            <p>Não tem conta? <a href="cadastro.php">Cadastre-se</a></p>
        </div>
        <a href="cadastro.php" class="btn btn-voltar">voltar para cadastro</a>
        <div class="dica-navegacao">
            <strong> fluxo:</strong> Cadastro → login → menu → painel → cadastrar livros
         </div>

    </div>
    
</body>

</html>