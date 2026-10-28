<?php

//salvar_livro.php
//recebe os dados do formulario e insere um novo livro no banco de dados
//conceitos: POST,MYSQL, INSERT(CREATE DO CRUD)

//PROTEGE A PAGINA: so usuarios logados podem salvar livros
include("verificar_sessao.php");

// incluir a conexão com o banco de dados
include("conexao.php");

//recebe dados enviados pelo formulario via POST 
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$status = $_POST['status'];

//monta o comando SQL INSERT para cadastrar o livro:
$sql = "INSERT INTO livros (titulo, autor, status) VALUES ('$titulo', '$autor', '$status')";

// executa o insert no bsanco de dados
mysqli_query($conexao, $sql);

//rediciona para listagem de livros apos salvar
header("Location: listar_livro.php");
exit();