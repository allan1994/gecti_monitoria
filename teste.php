<form action="teste.php" method="GET">
    <input type="text" name="texto1">
    <input type="number" name="numero1">
    <input type="submit" value="salvar" name="">
    <input type="text" name="idGrupo" value="444" hidden="">
</form>

<?php

if($_GET['texto1']){
    echo 'input 1: '.$_GET['texto1'].'<br><br>';
}
if($_GET['numero1']){
    echo 'input 2: '.$_GET['numero1'].'<br><br>';
}
if($_GET['idGrupo']){
    echo 'input 2: '.$_GET['idGrupo'].'<br><br>';
}

