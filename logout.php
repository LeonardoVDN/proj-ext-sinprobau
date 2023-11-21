<?php
// Inicie a sessão
session_start();

// Encerre a sessão
session_destroy();

// Redirecione para a página de login
header("Location: login.php");
exit();
?>
