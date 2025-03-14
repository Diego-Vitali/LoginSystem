<?php
session_start();
include_once '../control/data.php';

if (!isset($_SESSION['attempts'])) {
    $_SESSION['attempts'] = 3;
}

if ($_SESSION['attempts'] <= 0) {
    echo "Você excedeu o número de tentativas de login. Tente novamente mais tarde.";
    echo "<br>Teste: Resetar Tentativs: <a href='../control/reset.php'>Reset</a>";
    exit();
}

    include_once '../control/data.php';
    $usuario = new Data();
    $usuario->getNome($_POST['name']);
    $usuario->getPassword($_POST['password']);
    $usuarios = [
        1 => ['name' => 'aluno', 'password' => 'aluno'],
        2 => ['name' => 'professor', 'password' => 'professor'],
    ];
    foreach ($usuarios as $u) {
        if ($u ['name'] == $usuario->showName() && $u['password'] == $usuario->showPassword()) {
            $_SESSION['attempts'] = 3;
            if ($u['name'] == 'professor') {
                header('Location: ../view/professor.php');
            } else {
            header('Location: ../view/aluno.php');
            }
            exit();
        }
    }
    $_SESSION['attempts'] -= 1; 
    header('Location: ../view/login.php?msg=Usuário ou senha inválidos');
    exit();
?>