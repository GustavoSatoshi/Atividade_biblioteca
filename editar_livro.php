<?php

//editar_livro.php
//exibe o formulario preenchimento com os dados do livro para endição
//Conceitos : $_GET, MySQL, UPDATE ,Formulario de edição

//protege a página: só usuários cadastrados podem editar livros
include("verificar_sessao.php");

//inclui a conexão com o banco de dados.
include("conexao.php");

//recebe o id do livro do URL (ex: editar_livro.php?id=3)
$id = $_GET['id'];

// consulta SQL que busca o livro pelo ID 
$sql = "SELECT * FROM livros WHERE id = $id";

//executa a consulta e guarda o resultado
$resultado = mysqli_query($conexao, $sql);

//trasnforma o resultado em um array associativo
$livro = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Livro</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
       <h1>Editar Livro</h1>
       <p class="subtitulo">
        altere os dados do livro e clique em atualizar
       </p>
    <!-- Formulario envia os dados para atualizar_livro.php -->
     <form action="atualizar_livro.php" method="post">
        <input type="hidden" name="id" value="<?php echo $livro['id']; ?>">

        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" value="<?php echo $livro['titulo']; ?>" required>
        </div>

        <div class="form-group">
            <label for="autor">Autor:</label>
            <input type="text" id="autor" name="autor" value="<?php echo $livro['autor']; ?>" required>
        </div>

        <div class="form-group">
            <label for="ano">Ano:</label>
            <input type="number" id="ano" name="ano" value="<?php echo $livro['ano']; ?>" required>
        </div>
        
        <button type="submit">Atualizar</button>
     </form>
    </div>
</body>
</html>