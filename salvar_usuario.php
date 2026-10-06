<?php

//salvar_usuario.php recebe os dados do formulário de cadastro, verifica se o email já está cadastrado no banco de dados e, se não estiver, insere o novo usuário com a senha criptografada. Em caso de sucesso, redireciona para a página de login; caso contrário, redireciona de volta para o cadastro com uma mensagem de erro.

//conceitos: password_hash, INSERT no mySQL, header() INSERT, para redirecionamento 

// inclui o arquivo d econexao com o banco de dados
include("conexao.php");

//recebe os dados enviados pelo formulario via metdo post
$NOME = $_POST['nome'];
$EMAIL = $_POST['email'];
$SENHA = $_POST['senha'];

//==============================================
// verifica se o email esta duplicado no banco de dados
// antes de cadastrar,verifica se o email ja existe no banco de dados
//==============================================

// ,omta a conslrta SQL (SELECT ) para buscar o email
$sqlverificar = "SELECT id FROM usuarios WHERE email = '$EMAIL'"; 

//executa a consulta no MSQL
 $resultadoVerificar = mysqli_query($conexao, $sqlverificar);

 // validação: mysqli_num_rows() retorna o número de linhas do resultado da consulta
 if(mysqli_num_rows($resultadoVerificar) == 0) {
    //se o email ja existe, redireciona de volta ao cadastro
    //com mensagem de erro
    header("location: cadastro.php?erro=email");
    exit();
 }

 //==============================================
 // criptografia da senha
 //nunca armazena a senha em texto puro, sempre criptografa antes de salvar no banco de dados
 //==============================================
 //password_hash() cria um hash seguro da senha fornecida
 //pasword_default é o algoritmo de hash padrão do PHP, atualmente é o BCRYPT (padrao php)
 $senhaCriptografada = password_hash($SENHA, PASSWORD_DEFAULT);
 //==============================================
 // inserçao no banco (create do crud)
 //==============================================

 $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$NOME', '$EMAIL', '$senhaCriptografada')";

 // executa o inset no banco de date_isodate_set()
 mysqli_query($conexao, $sql);


 //rediceriona o usuario para a pagina d eloginapos o cadastro bem sucedido
 header("location: login.php");
 exit();