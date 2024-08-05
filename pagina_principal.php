<?php
session_start();// Inicia uma nova sessão ou retoma a sessão existente
 
// Verifica se o usuário está logado
//Verifica se a variável de sessão usuario_id está definida.
//Se não estiver, significa que o usuário não está logado.
if (!isset($_SESSION['usuario_id'])) {
    //Esta função é usada para enviar cabeçalhos HTTP brutos diretamente ao navegador.
   // o servidor envia um cabeçalho HTTP ao navegador, instruindo-o a carregar a página index.php
    header("Location: index.php");
    //finaliza o script. Por segurança.
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario_nome']); ?>!</h1>
    <p>Você está logado.</p>
    <a href="logout.php">Sair</a>
</body>
</html>