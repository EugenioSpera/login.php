<?php

include 'conexao.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {//verifica se o metodo enviado é POST
    $nome = $_POST['nome']; //obtem o nome do formulario
    $email = $_POST['email']; //obtem o email do formulario
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); //obtem a senha do formulario
    $sql = "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    if (mysqli_query($conn, $sql)) {// executa a consulta e verifica se foi bem sucedida

        echo " Cadastro realizado com sucesso ";

    } else {
        echo "Erro: " .$sql. "<br>".mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <form method="post">
        Nome: <input type="text" name="nome" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Senha: <input type="password" name="senha" required><br><br>
        <input type="submit" value="Cadastrar">

    </form>

</body>

</html>