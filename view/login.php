<?php
session_start();
if (!isset($_SESSION['attempts'])) {
    $_SESSION['attempts'] = 3;
}

if (isset($_GET['msg'])) {
    $mensagem = $_GET['msg'];
} else {
    $mensagem = "";
}

$attempts = $_SESSION['attempts'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../control/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div>
        <form action="../model/usuarios.php" method="POST">
            <input type="text" name="name" placeholder="Nome">
            <br>
            <input type="password" name="password" placeholder="Senha">
            <br>
            <input type="submit" class="btn" value="Entrar">
        </form>
    </div>
<?php
    if ($mensagem != "") {
        echo "<p>$mensagem</p>";
    }
    echo "<p>Você tem $attempts tentativas restantes</p>";
?>
</body>
</html>