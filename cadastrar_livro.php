<?php
//protege a PAGINA: SO USUARIOS LOGADOS PODEM CADASTRAR LIVROS
include("verificar_sessao.php");

?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrar livro - biblioteca</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Cadastrar livro</h1>
        <p class="subtitulo">Preencha os campos abaixo para cadastrar um novo livro.</p>
        <form action="salvar_livro.php" method="POST">


            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" id="titulo" name="titulo" placeholder="Digite o título do livro" required>

            </div>

            <div class="form-group">
                <label for="autor">Autor</label>
                <input type="text" id="autor" name="autor" placeholder="Digite o nome do autor" required>
            </div>

            <div class="form-group">
                <label for="status">status</label>
                <select name="status" id="status" required>
                    <option value="disponivel">Disponível</option>
                    <option value="emprestado">Emprestado</option>
                </select>
            </div>
            <button type="submit" class="btn btn-block btn-sucesso">
                Salvar livro
            </button>
        </form>
        <!-- link para voltar ao painel -->
        <a href="painel.php" class="btn btn-voltar">Voltar para painel</a>
    </div>
</body>

</html>