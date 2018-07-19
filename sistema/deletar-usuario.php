<?php
include 'cabecalho.php';
?>
<?php
$mensagem_da_acao = '';
if ($_GET['deletar'] != '') {
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
    $sql = "DELETE FROM usuarios WHERE id=" . $_POST['deletar'] . "";
    if (mysqli_query($conn, $sql)) {
        //echo "Record deleted successfully";
        $mensagem_da_acao = 'Usuário de ID ' . $_POST['deletar'] . ' deletado com sucesso !!!';
    } else {
        echo "Falha ao deletar <br>";
        echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
if ($_GET['senha'] != '') {
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
    $sql = "UPDATE usuarios SET senha='gecti123' WHERE id=" . $_POST['senha'] . "";

    if (mysqli_query($conn, $sql)) {
        //echo "Record updated successfully";
        $mensagem_da_acao = 'Usuário de ID ' . $_POST['senha'] . ' atualizado com sucesso !!! Nova Senha: gecti123';
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
<?php
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
$sql = "SELECT id, nome, usuario, tipo FROM usuarios";
$result = mysqli_query($conn, $sql);
?>
<div class="chit-chat-layer1">
    <div class="col-md-12 chit-chat-layer1-left">
        <div class="work-progres">
            <?php
            if ($mensagem_da_acao != '') {
                echo '<h2>' . $mensagem_da_acao . '</h2>';
            }
            ?>
            <div class="chit-chat-heading">
                Usuários do Sistema
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Tipo</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $number_x = 1;
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>';
                                echo '<td>' . $number_x . '</td>';
                                $number_x++;
                                echo '<td>' . $row['nome'] . '</td>';
                                echo '<td>' . $row['usuario'] . '</td>';
                                echo '<td>' . $row['tipo'] . '</td>';
                                echo '<td> <a href="deletar-usuario.php?deletar=' . $row['id'] . '"><i class="fa fa-trash" aria-hidden="true"></i></a></td>';
                                echo '<td> <a href="deletar-usuario.php?senha=' . $row['id'] . '"><i class="fa fa-key" aria-hidden="true"></i></a></td>';
                                echo '</tr>';
                            }
                        }
                        mysqli_close($conn);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
include 'rodape.php';
?>                    