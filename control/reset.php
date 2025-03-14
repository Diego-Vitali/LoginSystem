<?php
    session_start();
    $_SESSION['attempts'] = 3;
    header('Location: ../view/login.php');
?>