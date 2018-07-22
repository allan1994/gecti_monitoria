<?php
if ($_POST['acao'] == 'Componentes') {
    header("Location: editar-componentes.php?idGrupo=" . $_POST['idGrupo']);
}
?>
﻿<?php
include 'cabecalho.php';
?>
<?php
$mensagem_da_acao = '';
if ($_POST['acao'] == 'Salvar') {
    for ($OBS_numero = 1; $OBS_numero <= 6; $OBS_numero++) {
        if ($_POST['avaliacaoOP' . $OBS_numero . 'atendimentoOBS']) {
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
            $sql = "UPDATE grupos SET "
                    . "avaliacaoOP" . $OBS_numero . "atendimentoOBS='"
                    . $_POST['avaliacaoOP' . $OBS_numero . 'atendimentoOBS']
                    . "' WHERE id="
                    . $_REQUEST['idGrupo']
                    . "";
            if (mysqli_query($conn, $sql)) {
                //echo "Record updated successfully";
            } else {
                echo "Error updating record 8: " . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }
    for ($OPs_numero = 1; $OPs_numero <= 6; $OPs_numero++) {
        for ($aluno_numero = 1; $aluno_numero <= 9; $aluno_numero++) {
            if ($_POST['aluno' . $aluno_numero . 'OP' . $OPs_numero . 'status']) {
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
                $sql = "UPDATE grupos SET "
                        . "aluno" . $aluno_numero . "OP" . $OPs_numero . "status='"
                        . $_POST['aluno' . $aluno_numero . 'OP' . $OPs_numero . 'status']
                        . "' WHERE id="
                        . $_REQUEST['idGrupo']
                        . "";
                if (mysqli_query($conn, $sql)) {
                    //echo "Record updated successfully";
                } else {
                    echo "Error updating record 1: " . mysqli_error($conn);
                }
                mysqli_close($conn);
            }
        }
    }
    for ($avaliacao_numero = 1; $avaliacao_numero <= 3; $avaliacao_numero++) {
        if ($_POST['avaliacaoOP1atendimento' . $avaliacao_numero]) {
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
            $sql = "UPDATE grupos SET "
                    . "avaliacaoOP1atendimento" . $avaliacao_numero . "="
                    . $_POST['avaliacaoOP1atendimento' . $avaliacao_numero]
                    . " WHERE id="
                    . $_REQUEST['idGrupo']
                    . "";
            if (mysqli_query($conn, $sql)) {
                //echo "Record updated successfully";
            } else {
                echo "Error updating record 2: " . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }
    for ($avaliacao_numero = 1; $avaliacao_numero <= 2; $avaliacao_numero++) {
        if ($_POST['avaliacaoOP2atendimento' . $avaliacao_numero]) {
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
            $sql = "UPDATE grupos SET "
                    . "avaliacaoOP2atendimento" . $avaliacao_numero . "="
                    . $_POST['avaliacaoOP2atendimento' . $avaliacao_numero]
                    . " WHERE id="
                    . $_REQUEST['idGrupo']
                    . "";
            if (mysqli_query($conn, $sql)) {
                //echo "Record updated successfully";
            } else {
                echo "Error updating record 3: " . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }
    for ($avaliacao_numero = 1; $avaliacao_numero <= 20; $avaliacao_numero++) {
        if ($_POST['avaliacaoOP3atendimento' . $avaliacao_numero]) {
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
            $sql = "UPDATE grupos SET "
                    . "avaliacaoOP3atendimento" . $avaliacao_numero . "="
                    . $_POST['avaliacaoOP3atendimento' . $avaliacao_numero]
                    . " WHERE id="
                    . $_REQUEST['idGrupo']
                    . "";
            if (mysqli_query($conn, $sql)) {
                //echo "Record updated successfully";
            } else {
                echo "Error updating record 4: " . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }
    for ($avaliacao_numero = 1; $avaliacao_numero <= 1; $avaliacao_numero++) {
        if ($_POST['avaliacaoOP4atendimento' . $avaliacao_numero]) {
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
            $sql = "UPDATE grupos SET "
                    . "avaliacaoOP4atendimento" . $avaliacao_numero . "="
                    . $_POST['avaliacaoOP4atendimento' . $avaliacao_numero]
                    . " WHERE id="
                    . $_REQUEST['idGrupo']
                    . "";
            if (mysqli_query($conn, $sql)) {
                //echo "Record updated successfully";
            } else {
                echo "Error updating record 5: " . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }
    for ($avaliacao_numero = 1; $avaliacao_numero <= 8; $avaliacao_numero++) {
        if ($_POST['avaliacaoOP5atendimento' . $avaliacao_numero]) {
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
            $sql = "UPDATE grupos SET "
                    . "avaliacaoOP5atendimento" . $avaliacao_numero . "="
                    . $_POST['avaliacaoOP5atendimento' . $avaliacao_numero]
                    . " WHERE id="
                    . $_REQUEST['idGrupo']
                    . "";
            if (mysqli_query($conn, $sql)) {
                //echo "Record updated successfully";
            } else {
                echo "Error updating record 7: " . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }
    $mensagem_da_acao = ''
            . '<div class="alert alert-success" role="alert">'
            . '<strong>Salvo!</strong> Edições do Grupo salvas com sucesso.'
            . '</div>';
}
if ($_POST['acao'] == 'Fechar') {
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
    $sql = "UPDATE grupos SET status='Fechado' WHERE id=" . $_REQUEST['idGrupo'];
    if (mysqli_query($conn, $sql)) {
        $mensagem_da_acao = ''
                . '<div class="alert alert-success" role="alert">'
                . '<strong>Fechado!</strong> Grupo Fechado com sucesso.'
                . '</div>';
    } else {
        echo "Error updating record 9: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
if ($_POST['acao'] == 'ReAbrir') {
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
    $sql = "UPDATE grupos SET status='Aberto' WHERE id=" . $_REQUEST['idGrupo'];
    if (mysqli_query($conn, $sql)) {
        $mensagem_da_acao = ''
                . '<div class="alert alert-success" role="alert">'
                . '<strong>Aberto!</strong> Grupo ReAberto com sucesso.'
                . '</div>';
    } else {
        echo "Error updating record 10: " . mysqli_error($conn);
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
    die("Connection failed 11: " . mysqli_connect_error());
}
$sql = "SELECT * FROM grupos WHERE id=" . $_REQUEST['idGrupo'];
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<div class="inner-block">
    <?php
    if ($mensagem_da_acao != '') {
        echo $mensagem_da_acao;
    }
    ?> 
    <?php
    echo '<h3> Grupo ' . $row['codigo'] . ' </h3>';
    ?>
    <div style="margin-top:3%;"></div>
    <div class="col-sm-12 col-md-12 col-lg-12 mb-60">
        <div class="horizontal-tab">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#OP1" data-toggle="tab" aria-expanded="true">OP1</a></li>
                <li class=""><a href="#OP2" data-toggle="tab" aria-expanded="false">OP2</a></li>
                <li class=""><a href="#OP3" data-toggle="tab" aria-expanded="false">OP3</a></li>
                <li class=""><a href="#OP4" data-toggle="tab" aria-expanded="false">OP4</a></li>
                <li class=""><a href="#OP5" data-toggle="tab" aria-expanded="false">OP5</a></li>
                <li class=""><a href="#OP6" data-toggle="tab" aria-expanded="false">OP6</a></li>
            </ul>
            <form method="post" action="editar-grupo.php">
                <input name="idGrupo" value="<?php echo $row['id']; ?>" hidden="">
                <div class="tab-content">
                    <div class="tab-pane active" id="OP1">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>
                                    Alunos do grupo
                                </h1>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nome</th>
                                                <th>Email</th>
                                                <th>Presente</th>
                                                <th>Ausente</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            for ($aluno_numero = 1; $aluno_numero <= 9; $aluno_numero++) {
                                                if ($row['matricula' . $aluno_numero] != '') {
                                                    if ($row['aluno' . $aluno_numero . 'OP1status'] == 'true') {
                                                        echo '<tr class="success">';
                                                    } else {
                                                        if ($row['aluno' . $aluno_numero . 'OP1status'] == 'false') {
                                                            echo '<tr class="warning">';
                                                        } else {
                                                            echo '<tr>';
                                                        }
                                                    }
                                                    echo '<td scope="row">' . $aluno_numero . '</td>';
                                                    echo '<td>' . $row['nome' . $aluno_numero] . '</td>';
                                                    echo '<td>' . $row['email' . $aluno_numero] . '</td>';
                                                    echo '<td><input type="radio" name="aluno' . $aluno_numero . 'OP1status" value="true" ';
                                                    if ($row['aluno' . $aluno_numero . 'OP1status'] == 'true') {
                                                        echo 'checked';
                                                    }
                                                    echo ' /></td>';
                                                    echo '<td><input type="radio" name="aluno' . $aluno_numero . 'OP1status" value="false" ';
                                                    if ($row['aluno' . $aluno_numero . 'OP1status'] == 'false') {
                                                        echo 'checked';
                                                    }
                                                    echo ' /></td>';
                                                    echo '</tr>';
                                                }
                                            }
                                            ?>                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h1>
                                    <?php
                                    echo 'Avaliar Atendimento ';
                                    if ($row['avaliacaoOP1atendimento1'] != '') {
                                        if ($row['avaliacaoOP1atendimento2'] != '') {
                                            if ($row['avaliacaoOP1atendimento3'] != '') {

                                                echo '- ' . number_format((($row['avaliacaoOP1atendimento1'] + $row['avaliacaoOP1atendimento2'] + $row['avaliacaoOP1atendimento3']) / 3), 2) . '%';
                                            }
                                        }
                                    }
                                    ?>
                                </h1>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Verificar</th>
                                                <th>Índice</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Trajetória de C&T</td>
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP1atendimento1']; ?>" name="avaliacaoOP1atendimento1"/> %</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Aplicações das possíveis tecnologias</td>
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP1atendimento2']; ?>" name="avaliacaoOP1atendimento2"/> %</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Mercados impactados</td>
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP1atendimento3']; ?>" name="avaliacaoOP1atendimento3"/> %</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h1>
                                    Observações
                                </h1>
                                <div style="margin-top: 2%;">
                                    <textarea style="width: 100%" name="avaliacaoOP1atendimentoOBS"><?php echo $row['avaliacaoOP1atendimentoOBS']; ?></textarea>
                                </div>
                                <div class="hvr-fade">
                                    <?php
                                    if ($row['status'] == 'Aberto') {
                                        echo '<input type="submit" name="acao" value="Salvar" style="margin-top: 3%;" />';
                                        echo '<input type="submit" name="acao" value="Fechar" style="margin-top: 3%;" />';
                                        echo '<input type="submit" name="acao" value="Componentes" style="margin-top: 3%;" />';
                                    } else {
                                        echo '<input type="submit" name="acao" value="Salvar" style="margin-top: 3%;" />';
                                        echo '<input type="submit" name="acao" value="ReAbrir" style="margin-top: 3%;" />';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="OP2">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>
                                    Alunos do grupo
                                </h1>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nome</th>
                                                <th>Email</th>
                                                <th>Presente</th>
                                                <th>Ausente</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            for ($aluno_numero = 1; $aluno_numero <= 9; $aluno_numero++) {
                                                if ($row['matricula' . $aluno_numero] != '') {
                                                    if ($row['aluno' . $aluno_numero . 'OP2status'] == 'true') {
                                                        echo '<tr class="success">';
                                                    } else {
                                                        if ($row['aluno' . $aluno_numero . 'OP2status'] == 'false') {
                                                            echo '<tr class="warning">';
                                                        } else {
                                                            echo '<tr>';
                                                        }
                                                    }
                                                    echo '<td scope="row">' . $aluno_numero . '</td>';
                                                    echo '<td>' . $row['nome' . $aluno_numero] . '</td>';
                                                    echo '<td>' . $row['email' . $aluno_numero] . '</td>';
                                                    echo '<td><input type="radio" name="aluno' . $aluno_numero . 'OP2status" value="true" ';
                                                    if ($row['aluno' . $aluno_numero . 'OP2status'] == 'true') {
                                                        echo 'checked';
                                                    }
                                                    echo ' /></td>';
                                                    echo '<td><input type="radio" name="aluno' . $aluno_numero . 'OP2status" value="false" ';
                                                    if ($row['aluno' . $aluno_numero . 'OP2status'] == 'false') {
                                                        echo 'checked';
                                                    }
                                                    echo ' /></td>';
                                                    echo '</tr>';
                                                }
                                            }
                                            ?>                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h1>
                                    <?php
                                    echo 'Avaliar Atendimento ';
                                    if ($row['avaliacaoOP2atendimento1'] != '') {
                                        if ($row['avaliacaoOP2atendimento2'] != '') {
                                            echo '- ' . number_format((($row['avaliacaoOP2atendimento1'] + $row['avaliacaoOP2atendimento2']) / 2), 2) . '%';
                                        }
                                    }
                                    ?>
                                </h1>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Verificar</th>
                                                <th>Índice</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Diagnóstico dos mercados impactados</td>
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP2atendimento1']; ?>" name="avaliacaoOP2atendimento1"/> %</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Sobre a Trajetória da bancada ao mercado de uma das inovações</td>
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP2atendimento2']; ?>" name="avaliacaoOP2atendimento2"/> %</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h1>
                                    Observações
                                </h1>
                                <div style="margin-top: 2%;">
                                    <textarea style="width: 100%" name="avaliacaoOP2atendimentoOBS"><?php echo $row['avaliacaoOP2atendimentoOBS']; ?></textarea>
                                </div>
                                <div class="hvr-fade">
                                    <?php
                                    if ($row['status'] == 'Aberto') {
                                        echo '<input type="submit" name="acao" value="Salvar" style="margin-top: 3%;" />';
                                        echo '<input type="submit" name="acao" value="Fechar" style="margin-top: 3%;" />';
                                    } else {
                                        echo '<input type="submit" name="acao" value="Salvar" style="margin-top: 3%;" />';
                                        echo '<input type="submit" name="acao" value="ReAbrir" style="margin-top: 3%;" />';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="OP3">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>
                                    Alunos do grupo
                                </h1>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nome</th>
                                                <th>Email</th>
                                                <th>Presente</th>
                                                <th>Ausente</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            for ($aluno_numero = 1; $aluno_numero <= 9; $aluno_numero++) {
                                                if ($row['matricula' . $aluno_numero] != '') {
                                                    if ($row['aluno' . $aluno_numero . 'OP3status'] == 'true') {
                                                        echo '<tr class="success">';
                                                    } else {
                                                        if ($row['aluno' . $aluno_numero . 'OP3status'] == 'false') {
                                                            echo '<tr class="warning">';
                                                        } else {
                                                            echo '<tr>';
                                                        }
                                                    }
                                                    echo '<td scope="row">' . $aluno_numero . '</td>';
                                                    echo '<td>' . $row['nome' . $aluno_numero] . '</td>';
                                                    echo '<td>' . $row['email' . $aluno_numero] . '</td>';
                                                    echo '<td><input type="radio" name="aluno' . $aluno_numero . 'OP3status" value="true" ';
                                                    if ($row['aluno' . $aluno_numero . 'OP3status'] == 'true') {
                                                        echo 'checked';
                                                    }
                                                    echo ' /></td>';
                                                    echo '<td><input type="radio" name="aluno' . $aluno_numero . 'OP3status" value="false" ';
                                                    if ($row['aluno' . $aluno_numero . 'OP3status'] == 'false') {
                                                        echo 'checked';
                                                    }
                                                    echo ' /></td>';
                                                    echo '</tr>';
                                                }
                                            }
                                            ?>                                         
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h1>
                                    <?php
                                    echo 'Avaliar Atendimento ';
                                    for ($atendimentoOP3 = 1, $soma_avaliacao = 0; $atendimentoOP3 <= 20; $atendimentoOP3++) {
                                        if ($row['avaliacaoOP3atendiemnto' . $atendimentoOP3] == '') {
                                            break;
                                        }
                                        $soma_avaliacao = $row['avaliacaoOP3atendiemnto' . $atendimentoOP3] + $soma_avaliacao;
                                        if ($atendimentoOP3 == 20) {
                                            echo '- ';
                                            echo number_format(($soma_avaliacao / 20), 2) . '%';
                                        }
                                    }
                                    ?>
                                </h1>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Verificar</th>
                                                <th>Índice</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            for ($atendimentoOP3 = 1; $atendimentoOP3 <= 20; $atendimentoOP3++) {
                                                echo '<tr>';
                                                echo '<td>' . $atendimentoOP3 . '</td>';
                                                echo '<td>nº' . $atendimentoOP3 . '</td>';
                                                echo '<td><input type="number" value="' . $row['avaliacaoOP3atendiemnto' . $atendimentoOP3] . '" name="avaliacaoOP5atendimento' . $atendimentoOP3 . '" /> %</td>';
                                                echo '</tr>';
                                            }
                                            ?>                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h1>
                                    Observações
                                </h1>
                                <div style="margin-top: 2%;">
                                    <textarea style="width: 100%" name="avaliacaoOP3atendimentoOBS"><?php echo $row['avaliacaoOP3atendimentoOBS']; ?></textarea>
                                </div>
                                <div class="hvr-fade">
                                    <?php
                                    if ($row['status'] == 'Aberto') {
                                        echo '<input type="submit" name="acao" value="Salvar" style="margin-top: 3%;" />';
                                        echo '<input type="submit" name="acao" value="Fechar" style="margin-top: 3%;" />';
                                    } else {
                                        echo '<input type="submit" name="acao" value="Salvar" style="margin-top: 3%;" />';
                                        echo '<input type="submit" name="acao" value="ReAbrir" style="margin-top: 3%;" />';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="OP4">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>
                                    Alunos do grupo
                                </h1>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nome</th>
                                                <th>Email</th>
                                                <th>Presente</th>
                                                <th>Ausente</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            for ($aluno_numero = 1; $aluno_numero <= 9; $aluno_numero++) {
                                                if ($row['matricula' . $aluno_numero] != '') {
                                                    if ($row['aluno' . $aluno_numero . 'OP4status'] == 'true') {
                                                        echo '<tr class="success">';
                                                    } else {
                                                        if ($row['aluno' . $aluno_numero . 'OP4status'] == 'false') {
                                                            echo '<tr class="warning">';
                                                        } else {
                                                            echo '<tr>';
                                                        }
                                                    }
                                                    echo '<td scope="row">' . $aluno_numero . '</td>';
                                                    echo '<td>' . $row['nome' . $aluno_numero] . '</td>';
                                                    echo '<td>' . $row['email' . $aluno_numero] . '</td>';
                                                    echo '<td><input type="radio" name="aluno' . $aluno_numero . 'OP4status" value="true" ';
                                                    if ($row['aluno' . $aluno_numero . 'OP4status'] == 'true') {
                                                        echo 'checked';
                                                    }
                                                    echo ' /></td>';
                                                    echo '<td><input type="radio" name="aluno' . $aluno_numero . 'OP4status" value="false" ';
                                                    if ($row['aluno' . $aluno_numero . 'OP4status'] == 'false') {
                                                        echo 'checked';
                                                    }
                                                    echo ' /></td>';
                                                    echo '</tr>';
                                                }
                                            }
                                            ?>                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h1>
                                    Avaliar Atendimento <?php
                                    if ($row['avaliacaoOP4atendimento1'] != '') {
                                        echo '- ' . $row['avaliacaoOP4atendimento1'] . '%';
                                    }
                                    ?>
                                </h1>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Verificar</th>
                                                <th>Índice</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Discussão dos conceitos-chaves de GECTI em contraponto as informações das pesquisas</td>
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP4atendimento1']; ?>" name="avaliacaoOP4atendimento1"/> %</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h1>
                                    Observações
                                </h1>
                                <div style="margin-top: 2%;">
                                    <textarea style="width: 100%" name="avaliacaoOP4atendimentoOBS"><?php echo $row['avaliacaoOP4atendimentoOBS']; ?></textarea>
                                </div>
                                <div class="hvr-fade">
                                    <?php
                                    if ($row['status'] == 'Aberto') {
                                        echo '<input type="submit" name="acao" value="Salvar" style="margin-top: 3%;" />';
                                        echo '<input type="submit" name="acao" value="Fechar" style="margin-top: 3%;" />';
                                    } else {
                                        echo '<input type="submit" name="acao" value="Salvar" style="margin-top: 3%;" />';
                                        echo '<input type="submit" name="acao" value="ReAbrir" style="margin-top: 3%;" />';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="OP5">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>
                                    Alunos do grupo
                                </h1>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nome</th>
                                                <th>Email</th>
                                                <th>Presente</th>
                                                <th>Ausente</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            for ($aluno_numero = 1; $aluno_numero <= 9; $aluno_numero++) {
                                                if ($row['matricula' . $aluno_numero] != '') {
                                                    if ($row['aluno' . $aluno_numero . 'OP5status'] == 'true') {
                                                        echo '<tr class="success">';
                                                    } else {
                                                        if ($row['aluno' . $aluno_numero . 'OP5status'] == 'false') {
                                                            echo '<tr class="warning">';
                                                        } else {
                                                            echo '<tr>';
                                                        }
                                                    }
                                                    echo '<td scope="row">' . $aluno_numero . '</td>';
                                                    echo '<td>' . $row['nome' . $aluno_numero] . '</td>';
                                                    echo '<td>' . $row['email' . $aluno_numero] . '</td>';
                                                    echo '<td><input type="radio" name="aluno' . $aluno_numero . 'OP5status" value="true" ';
                                                    if ($row['aluno' . $aluno_numero . 'OP5status'] == 'true') {
                                                        echo 'checked';
                                                    }
                                                    echo ' /></td>';
                                                    echo '<td><input type="radio" name="aluno' . $aluno_numero . 'OP5status" value="false" ';
                                                    if ($row['aluno' . $aluno_numero . 'OP5status'] == 'false') {
                                                        echo 'checked';
                                                    }
                                                    echo ' /></td>';
                                                    echo '</tr>';
                                                }
                                            }
                                            ?>                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h1>
                                    <?php
                                    echo 'Avaliar Atendimento ';
                                    for ($atendimentoOP5 = 1, $soma_avaliacao = 0; $atendimentoOP5 <= 8; $atendimentoOP5++) {
                                        if ($row['avaliacaoOP5atendiemnto' . $atendimentoOP5] == '') {
                                            break;
                                        }
                                        $soma_avaliacao = $row['avaliacaoOP5atendiemnto' . $atendimentoOP5] + $soma_avaliacao;
                                        if ($atendimentoOP5 == 8) {
                                            echo '- ';
                                            echo number_format(($soma_avaliacao / 8), 2) . '%';
                                        }
                                    }
                                    ?>
                                </h1>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Verificar</th>
                                                <th>Índice</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Título</td>
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP5atendimento1']; ?>" name="avaliacaoOP5atendimento1"/> %</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Autores / CPF / Filiação</td>
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP5atendimento2']; ?>" name="avaliacaoOP5atendimento2"/> %</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Resumo</td>
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP5atendimento3']; ?>" name="avaliacaoOP5atendimento3"/> %</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Abstract</td>
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP5atendimento4']; ?>" name="avaliacaoOP5atendimento4"/> %</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Introdução</td>
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP5atendimento5']; ?>" name="avaliacaoOP5atendimento5"/> %</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Desenvolvimento (OP1, OP2 e OP3)</td>
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP5atendimento6']; ?>" name="avaliacaoOP5atendimento6"/> %</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Discussão dos resultados (OP4)</td>
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP5atendimento7']; ?>" name="avaliacaoOP5atendimento7"/> %</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Considerações finais</td>
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP5atendimento8']; ?>" name="avaliacaoOP5atendimento8"/> %</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h1>
                                    Observações
                                </h1>
                                <div style="margin-top: 2%;">
                                    <textarea style="width: 100%" name="avaliacaoOP5atendimentoOBS"><?php echo $row['avaliacaoOP5atendimentoOBS']; ?></textarea>
                                </div>
                                <div class="hvr-fade">
                                    <?php
                                    if ($row['status'] == 'Aberto') {
                                        echo '<input type="submit" name="acao" value="Salvar" style="margin-top: 3%;" />';
                                        echo '<input type="submit" name="acao" value="Fechar" style="margin-top: 3%;" />';
                                    } else {
                                        echo '<input type="submit" name="acao" value="Salvar" style="margin-top: 3%;" />';
                                        echo '<input type="submit" name="acao" value="ReAbrir" style="margin-top: 3%;" />';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="OP6">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>
                                    Alunos do grupo
                                </h1>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nome</th>
                                                <th>Email</th>
                                                <th>Presente</th>
                                                <th>Ausente</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            for ($aluno_numero = 1; $aluno_numero <= 9; $aluno_numero++) {
                                                if ($row['matricula' . $aluno_numero] != '') {
                                                    if ($row['aluno' . $aluno_numero . 'OP6status'] == 'true') {
                                                        echo '<tr class="success">';
                                                    } else {
                                                        if ($row['aluno' . $aluno_numero . 'OP6status'] == 'false') {
                                                            echo '<tr class="warning">';
                                                        } else {
                                                            echo '<tr>';
                                                        }
                                                    }
                                                    echo '<td scope="row">' . $aluno_numero . '</td>';
                                                    echo '<td>' . $row['nome' . $aluno_numero] . '</td>';
                                                    echo '<td>' . $row['email' . $aluno_numero] . '</td>';
                                                    echo '<td><input type="radio" name="aluno' . $aluno_numero . 'OP6status" value="true" ';
                                                    if ($row['aluno' . $aluno_numero . 'OP6status'] == 'true') {
                                                        echo 'checked';
                                                    }
                                                    echo ' /></td>';
                                                    echo '<td><input type="radio" name="aluno' . $aluno_numero . 'OP6status" value="false" ';
                                                    if ($row['aluno' . $aluno_numero . 'OP6status'] == 'false') {
                                                        echo 'checked';
                                                    }
                                                    echo ' /></td>';
                                                    echo '</tr>';
                                                }
                                            }
                                            ?>                                         
                                        </tbody>
                                    </table>
                                </div>
                            </div>                                            
                            <div class="col-md-12">
                                <h1>
                                    Observações
                                </h1>
                                <div style="margin-top: 2%;">
                                    <textarea style="width: 100%" name="avaliacaoOP6atendimentoOBS"><?php echo $row['avaliacaoOP6atendimentoOBS']; ?></textarea>
                                </div>
                                <div class="hvr-fade">
                                    <?php
                                    if ($row['status'] == 'Aberto') {
                                        echo '<input type="submit" name="acao" value="Salvar" style="margin-top: 3%;" />';
                                        echo '<input type="submit" name="acao" value="Fechar" style="margin-top: 3%;" />';
                                    } else {
                                        echo '<input type="submit" name="acao" value="Salvar" style="margin-top: 3%;" />';
                                        echo '<input type="submit" name="acao" value="ReAbrir" style="margin-top: 3%;" />';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
mysqli_close($conn);
?>
<?php
include 'rodape.php';
?>  