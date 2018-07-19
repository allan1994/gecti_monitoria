<?php
unset($_SESSION['usuarioID'], $_SESSION['usuarioNome'], $_SESSION['usuarioLogin'], $_SESSION['usuarioSenha'], $_SESSION['usuarioTipo'], $_SESSION['usuarioEmail']);
session_destroy();
header("Location: " . " ../");
?>