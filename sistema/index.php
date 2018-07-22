<?php
include 'cabecalho.php';
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
$sql;
$result;
if ($_SESSION['usuarioTipo'] == 'Aluno') {
    $sql = "SELECT * FROM grupos WHERE (responsavel='" . $_SESSION['usuarioID'] . "' AND status='Aberto')";
    $result = mysqli_query($conn, $sql);
}
if ($_SESSION['usuarioTipo'] == 'Professor') {
    $sql = "SELECT * FROM grupos WHERE status='Aberto' ORDER BY responsavel";
    $result = mysqli_query($conn, $sql);
}
?>
<div class="inner-block">
    <!--market updates updates-->
    <?php
    $contador = 1;
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            if ($contador == 1) {
                echo '<div class="market-updates">';
            }
            echo '<div class="col-md-4 market-update-gd">';
            echo '<div class="market-update-block clr-block-1">';
            echo '<div class="col-md-8 market-update-left">';
            echo '<h3>' . $row['codigo'] . '</h3>';
            echo '<h4>' . $row['tipo'] . '</h4>';
            echo '<p>' . $row['objeto'] . '</p>';
            echo '</div>';
            echo '<div class="col-md-4 market-update-right">';
            echo '<a href="editar-grupo.php?idGrupo=' . $row['id'] . '"><i class="fa fa-file-text-o"></i></a>';
            echo '</div>';
            echo '<div class="clearfix"> </div>';
            echo '</div>';
            echo '</div>';            
            $contador++;
        }
    } else {
        echo ''
        .'<div class="alert alert-info" role="alert">'
        .'<strong>Atenção!</strong> Não há grupos Abertos.'
        .'</div>';
    }
    mysqli_close($conn);
    ?>
</div>
<?php
include 'rodape.php';
?>