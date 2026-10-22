<?php
 
// excluir_livro.php
// Remove um livro do banco de dados pelo ID
// conceitos: $_GET, MySQL, DELETE (D DO CRUD)
 
// protege a página: só usuários cadastrados podem excluir livros
include("verificar_sessao.php");
 
// inclui a conexão com o banco de dados.
include("conexao.php");
 
// Recebe o ID do livro pela URL (ex: excluir_livro.php?id=3)
$id = $_GET['id'];
 
//montar o comando SQL DELETE para remover o livro
 
$sql = "DELETE FROM livros WHERE id = $id";
 
// executa o DELET no banco de dados
mysqli_query($conexao, $sql);
 
// redireciona para a listagem de livros após a exlusão.
header("Location: listar_livro.php");
exit();
 