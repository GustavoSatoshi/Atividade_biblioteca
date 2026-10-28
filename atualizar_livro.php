<?php

include("verificar_sessao.php");
include("conexao.php");
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$status = $_POST['status'];

$sql = "UPDATE livros SET titulo='$titulo', autor='$autor', status='$status' WHERE id=$id";

mysqli_query($conexao, $sql);

header("Location: listar_livro.php");
exit();