<?php
include 'cabecalho.php';
?>
<?php
$mensagem_da_acao = '';
if ($_GET['nome'] != '') {
    if ($_GET['usuario'] != '') {
        if ($_GET['tipo'] != '') {
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
            $sql = "SELECT usuario FROM usuarios";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                $mensagem_da_acao = 'Este usuário/email ' . $_GET['usuario'] . ' já existe no sistema';
                mysqli_close($conn);
            } else {
                mysqli_close($conn);
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
                $sql = "INSERT INTO usuarios (nome, usuario, senha, tipo)
                VALUES ('" . $_GET['nome'] . "', '" . $_GET['usuario'] . "', 'gecti123', '" . $_GET['tipo'] . "')";
                if (mysqli_query($conn, $sql)) {
                    //echo "New record created successfully";
                    $mensagem_da_acao = 'Novo Usuário ' . $_GET['nome'] . ' criado';
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
        echo '<h2>' . $mensagem_da_acao . '</h2>';
    }
    ?>    
    <h3>Cadastro Novo Usuário</h3>
    <br />
    <form action="novo-usuario.php" method="get">
        <div class="formulario_cadastro_2">
            <label>Primeiro Nome:</label>
            <input type="text" name="nome"/>
        </div>
        <div class="formulario_cadastro_2">
            <label>Email:</label>
            <input type="email" name="usuario"/>
        </div>
        <div class="formulario_cadastro_2">
            <label>Tipo de Conta:</label>
            <br />
            <input type="radio" name="tipo" value="Aluno" checked/> <i>Aluno</i> <br />
            <input type="radio" name="tipo" value="Professor" /> <i>Professor</i>
        </div>                        
        <div class="hvr-fade">
            <input type="submit" value="Cadastrar" />
        </div>
    </form>
</div>
<?php
include 'rodape.php';
?> 