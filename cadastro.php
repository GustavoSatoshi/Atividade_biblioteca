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
        </div>
</body>

</html>                                         