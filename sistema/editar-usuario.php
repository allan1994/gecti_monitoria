<?php
include 'cabecalho.php';
?>
<?php
$mensagem_da_acao = '';
if ($_POST['nome']) {
    $servername = "10.6.0.81";
    $username = "gecti";
    $password = "g3cT1@(20)18";
    $dbname = "gecti";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "UPDATE usuarios SET nome='" . $_POST['nome'] . "' WHERE id=" . $_SESSION['usuarioID'] . "";

    if (mysqli_query($conn, $sql)) {
        //echo "Record updated successfully";
        $mensagem_da_acao = ''
                . '<div class="alert alert-success" role="alert">'
                . '<strong>Atualizado!</strong> Usuário atualizado com sucesso.'
                . '</div>';
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
if ($_POST['usuario']) {
    $servername = "10.6.0.81";
    $username = "gecti";
    $password = "g3cT1@(20)18";
    $dbname = "gecti";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "UPDATE usuarios SET usuario='" . $_POST['usuario'] . "' WHERE id=" . $_SESSION['usuarioID'] . "";

    if (mysqli_query($conn, $sql)) {
        //echo "Record updated successfully";
        $mensagem_da_acao = ''
                . '<div class="alert alert-success" role="alert">'
                . '<strong>Atualizado!</strong> Usuário atualizado com sucesso.'
                . '</div>';
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
if ($_POST['senha']) {
    $servername = "10.6.0.81";
    $username = "gecti";
    $password = "g3cT1@(20)18";
    $dbname = "gecti";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "UPDATE usuarios SET senha='" . $_POST['senha'] . "' WHERE id=" . $_SESSION['usuarioID'] . "";

    if (mysqli_query($conn, $sql)) {
        //echo "Record updated successfully";
        $mensagem_da_acao = ''
                . '<div class="alert alert-success" role="alert">'
                . '<strong>Atualizado!</strong> Usuário atualizado com sucesso.'
                . '</div>';
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
<?php
$servername = "10.6.0.81";
$username = "gecti";
$password = "g3cT1@(20)18";
$dbname = "gecti";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM usuarios WHERE id=" . $_SESSION['usuarioID'];
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<div class="inner-block">
    <?php
    if ($mensagem_da_acao != '') {
        echo $mensagem_da_acao;
    }
    ?>    
    <h3>Configurações</h3>
    <br />
    <form action="editar-usuario.php" method="post">
        <div class="formulario_cadastro_2">
            <label>Primeiro Nome:</label>
            <input type="text" name="nome" value="<?php echo $row['nome'] ?>"/>
        </div>
        <div class="formulario_cadastro_2">
            <label>Email:</label>
            <input type="email" name="usuario" value="<?php echo $row['usuario'] ?>"/>
        </div>
        <div class="formulario_cadastro_2">
            <label>Senha:</label>
            <input type="password" name="senha" value="<?php echo $row['senha'] ?>"/>
        </div>                       
        <div class="hvr-fade">
            <input type="submit" name="acao" value="Atualizar" />
        </div>
    </form>
</div>
<?php
include 'rodape.php';
?>