<?php
unset($_SESSION['usuarioID'], $_SESSION['usuarioNome'], $_SESSION['usuarioLogin'], $_SESSION['usuarioSenha'], $_SESSION['usuarioTipo'], $_SESSION['usuarioEmail']);
session_destroy();
?>
﻿<!DOCTYPE HTML>
<html lang="br">
    <head>
        <title>Login</title>
        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!-- Meta tag Keywords -->
        <!-- css files -->
        <link rel="stylesheet" href="login/css/style.css" type="text/css" media="all" />
        <!-- Style-CSS -->
        <link rel="stylesheet" href="login/css/font-awesome.css">
        <!-- Font-Awesome-Icons-CSS -->
        <!-- //css files -->
        <!-- online-fonts -->
        <link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
        <!-- //online-fonts -->
    </head>

    <body>
        <div class="main-content-agile">
            <div class="sub-main-w3">
                <div class="header-w3l">
                    <h1>
                        <span>L</span>OGIN
                    </h1>
                    <br />
                </div>
                <form action="valida.php" method="post">
                    <div class="pom-agile">
                        <span class="fa fa-user-o" aria-hidden="true"></span>
                        <input placeholder="Email" name="usuario" class="user" type="text" required="">
                    </div>
                    <div class="pom-agile">
                        <span class="fa fa-key" aria-hidden="true"></span>
                        <input placeholder="Senha" name="senha" class="pass" type="password" required="">
                    </div>
                    <div class="right-w3l">
                        <input type="submit" value="Entrar">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>