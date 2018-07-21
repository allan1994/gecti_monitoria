<?php
include 'cabecalho.php';
?>
<?php
$mensagem_da_acao = '';
if ($_POST['nome']) {
    if ($_POST['usuario']) {
        if ($_POST['tipo']) {
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
            $sql = "SELECT usuario FROM usuarios WHERE usuario='" . $_POST['usuario'] . "'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                $mensagem_da_acao = ''
                        . '<div class="alert alert-danger" role="alert">'
                        . '<strong>Erro!</strong> O usuário ' . $_POST['usuario'] . ' já existe.'
                        . '</div>';
                mysqli_close($conn);
            } else {
                mysqli_close($conn);
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
                $sql = "INSERT INTO usuarios (nome, usuario, senha, tipo, aba)
                VALUES ('" . $_POST['nome'] . "', '" . $_POST['usuario'] . "', 'gecti123', '" . $_POST['tipo'] . "', 'true')";
                if (mysqli_query($conn, $sql)) {
                    //echo "New record created successfully";
                    $mensagem_da_acao = ''
                            . '<div class="alert alert-success" role="alert">'
                            . '<strong>Novo!</strong> Usuário ' . $_POST['usuario'] . ' criado com sucesso.'
                            . '</div>';
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                mysqli_close($conn);
            }
        }
    }
}
?>
<div class="inner-block">
    <?php
    if ($mensagem_da_acao != '') {
        echo $mensagem_da_acao;
    }
    ?>    
    <h3>Cadastro Novo Usuário</h3>
    <br />
    <form action="novo-usuario.php" method="post">
        <div class="formulario_cadastro_2">
            <label>Primeiro Nome:</label>
            <input type="text" name="nome" required=""/>
        </div>
        <div class="formulario_cadastro_2">
            <label>Email:</label>
            <input type="email" name="usuario" required=""/>
        </div>
        <div class="formulario_cadastro_2">
            <label>Tipo de Conta:</label>
            <br />
            <input type="radio" name="tipo" value="Aluno" checked/> <i>Aluno</i> <br />
            <input type="radio" name="tipo" value="Professor" /> <i>Professor</i>
        </div>                        
        <div class="hvr-fade">
            <input type="submit" name="acao" value="Cadastrar" />
        </div>
    </form>
</div>
<?php
include 'rodape.php';
?> 