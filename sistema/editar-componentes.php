<?php
include 'cabecalho.php';
?>
<?php
$mensagem_da_acao = '';
if ($_POST['acao'] == 'Editar') {
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
    for ($aluno_numero = 1; $aluno_numero <= 9; $aluno_numero++) {
        if ($_POST['matricula' . $aluno_numero]) {
            if ($_POST['nome' . $aluno_numero]) {
                if ($_POST['email' . $aluno_numero]) {
                    $sql = "UPDATE grupos SET matricula" . $aluno_numero . "='" . $_POST['matricula' . $aluno_numero] . "' WHERE id=" . $_REQUEST['idGrupo'];
                    if (mysqli_query($conn, $sql)) {
                        //echo "Record updated successfully";
                        $mensagem_da_acao = 'Editado com sucesso !!!';
                    } else {
                        echo "Error updating record: " . mysqli_error($conn);
                    }
                    $sql = "UPDATE grupos SET nome" . $aluno_numero . "='" . $_POST['nome' . $aluno_numero] . "' WHERE id=" . $_REQUEST['idGrupo'];
                    if (mysqli_query($conn, $sql)) {
                        //echo "Record updated successfully";
                        $mensagem_da_acao = 'Editado com sucesso !!!';
                    } else {
                        echo "Error updating record: " . mysqli_error($conn);
                    }
                    $sql = "UPDATE grupos SET email" . $aluno_numero . "='" . $_POST['email' . $aluno_numero] . "' WHERE id=" . $_REQUEST['idGrupo'];
                    if (mysqli_query($conn, $sql)) {
                        //echo "Record updated successfully";
                        $mensagem_da_acao = ''
                                . '<div class="alert alert-success" role="alert">'
                                . '<strong>Editado!</strong> Componentes editados com sucesso.'
                                . '</div>';
                    } else {
                        echo "Error updating record: " . mysqli_error($conn);
                    }
                }
            }
        }
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
$sql = "SELECT * FROM grupos WHERE id=" . $_REQUEST['idGrupo'];
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<?php
if ($mensagem_da_acao != '') {
    echo '<div class="inner-block">';
    echo $mensagem_da_acao;
}
?>
<div class="chit-chat-layer1"> 
    <div class="col-md-12 chit-chat-layer1-left">            
        <div class="work-progres">            
            <div class="chit-chat-heading">
                Usuários do Sistema
            </div>
            <div class="table-responsive">
                <form action="editar-componentes.php" method="post">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Matrícula</th>
                                <th>Nome</th>
                                <th>Email</th>                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($aluno_numero = 1; $aluno_numero <= 9; $aluno_numero++) {
                                echo '<tr>';
                                echo '<td>' . $aluno_numero . '</td>';
                                echo '<td><input type="text" name="matricula' . $aluno_numero . '" value="' . $row['matricula' . $aluno_numero] . '" ></td>';
                                echo '<td><input type="text" name="nome' . $aluno_numero . '" value="' . $row['nome' . $aluno_numero] . '" ></td>';
                                echo '<td><input type="email" name="email' . $aluno_numero . '" value="' . $row['email' . $aluno_numero] . '" ></td>';
                                echo '</tr>';
                            }
                            mysqli_close($conn);
                            ?>
                        </tbody>
                    </table>
                    <input type="text" name="idGrupo" value="<?php echo $_REQUEST['idGrupo']; ?>" hidden="">
                    <input type="submit" name="acao" value="Editar">
                </form>                    
            </div>
        </div>
    </div>
</div>
<?php
if ($mensagem_da_acao != '') {
    echo '</div>';
}
?>
<?php
include 'rodape.php';
?>                    