<?php
    include 'cabecalho.php';
?>
<?php
if($_GET['nome']!=''){
    $servername = "localhost";
    $username = "gecti";
    $password = "g3cT1@(20)18";
    $dbname = "gecti";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "UPDATE usuarios SET nome='".$_GET['nome']."' WHERE id=".$_SESSION['usuarioID']."";

    if (mysqli_query($conn, $sql)) {
        //echo "Record updated successfully";
        $mensagem_da_acao='Usuário atualizado com sucesso !!!';
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
if($_GET['usuario']!=''){
    $servername = "localhost";
    $username = "gecti";
    $password = "g3cT1@(20)18";
    $dbname = "gecti";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "UPDATE usuarios SET usuario='".$_GET['usuario']."' WHERE id=".$_SESSION['usuarioID']."";

    if (mysqli_query($conn, $sql)) {
        //echo "Record updated successfully";
        $mensagem_da_acao='Usuário atualizado com sucesso !!!';
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
if($_GET['usuario']!=''){
    $servername = "localhost";
    $username = "gecti";
    $password = "g3cT1@(20)18";
    $dbname = "gecti";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "UPDATE usuarios SET senha='".$_GET['senha']."' WHERE id=".$_SESSION['usuarioID']."";

    if (mysqli_query($conn, $sql)) {
        //echo "Record updated successfully";
        $mensagem_da_acao='Usuário atualizado com sucesso !!!';
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
<div class="inner-block">
    <h3>Configurações</h3>
    <br />
    <form action="editar-usuario.php" method="get">
        <div class="formulario_cadastro_2">
            <label>Primeiro Nome:</label>
            <input type="text" nome="nome" value=""/>
        </div>
        <div class="formulario_cadastro_2">
            <label>Email:</label>
            <input type="email" nome="usuario" value=""/>
        </div>
        <div class="formulario_cadastro_2">
            <label>Senha:</label>
            <input type="password" nome="senha" value=""/>
        </div>                       
        <div class="hvr-fade">
            <input type="submit" value="Atualizar" />
        </div>
    </form>
</div>
<?php
    include 'rodape.php';
?>