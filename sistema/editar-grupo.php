<?php
include 'cabecalho.php';
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
$sql = "SELECT * FROM grupos WHERE id=" . $_POST['idGrupo'];
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<div class="inner-block">
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
            <form method="get" action="salvar-grupo.php">
                <input name="idGrupo" value="<?php echo $_POST['idGrupo']; ?>" hidden="">
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
                                                    echo '<tr>';
                                                    echo '<td>1</td>';
                                                    echo '<td>' . $row['nome' . $aluno_numero] . '</td>';
                                                    echo '<td>' . $row['email' . $aluno_numero] . '</td>';
                                                    echo '<td><input type="radio" name="OP1p' . $aluno_numero . '" value="presente" ';
                                                    if ($row['aluno' . $aluno_numero . 'OP1status']) {
                                                        echo 'checked';
                                                    }
                                                    echo ' /></td>';
                                                    echo '<td><input type="radio" name="OP1p' . $aluno_numero . '" value="ausente" ';
                                                    if ($row['aluno' . $aluno_numero . 'OP1status'] == false) {
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
                                                echo '- ' . ($row['avaliacaoOP1atendimento1'] + $row['avaliacaoOP1atendimento2'] + $row['avaliacaoOP1atendimento3']) / 3;
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
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP1atendimento1']; ?>" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Aplicações das possíveis tecnologias</td>
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP1atendimento2']; ?>" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Mercados impactados</td>
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP1atendimento3']; ?>" /> %</td>
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
                                    <textarea style="width: 100%"><?php echo $row['avaliacaoOP1atendiemntoOBS']; ?></textarea>
                                </div>
                                <div class="hvr-fade">
                                    <?php
                                    if ($row['status'] == 'aberto') {
                                        echo '<input type="submit" value="Salvar" style="margin-top: 3%;" />';
                                    } else {
                                        echo '<input type="submit" value="Salvar" style="margin-top: 3%;" />';
                                        echo '<input type="submit" value="ReAbrir" style="margin-top: 3%;" />';
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
                                                    echo '<tr>';
                                                    echo '<td>1</td>';
                                                    echo '<td>' . $row['nome' . $aluno_numero] . '</td>';
                                                    echo '<td>' . $row['email' . $aluno_numero] . '</td>';
                                                    echo '<td><input type="radio" name="OP2p' . $aluno_numero . '" value="presente" ';
                                                    if ($row['aluno' . $aluno_numero . 'OP2status']) {
                                                        echo 'checked';
                                                    }
                                                    echo ' /></td>';
                                                    echo '<td><input type="radio" name="OP2p' . $aluno_numero . '" value="ausente" ';
                                                    if ($row['aluno' . $aluno_numero . 'OP2status'] == false) {
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
                                            echo '- ' . ($row['avaliacaoOP2atendimento1'] + $row['avaliacaoOP2atendimento2']) / 2;
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
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP2atendimento1']; ?>" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Sobre a Trajetória da bancada ao mercado de uma das inovações</td>
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP2atendimento2']; ?>" /> %</td>
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
                                    <textarea style="width: 100%"><?php echo $row['avaliacaoOP2atendiemntoOBS']; ?></textarea>
                                </div>
                                <div class="hvr-fade">
                                    <?php
                                    if ($row['status'] == 'aberto') {
                                        echo '<input type="submit" value="Salvar" style="margin-top: 3%;" />';
                                    } else {
                                        echo '<input type="submit" value="Salvar" style="margin-top: 3%;" />';
                                        echo '<input type="submit" value="ReAbrir" style="margin-top: 3%;" />';
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
                                                    echo '<tr>';
                                                    echo '<td>1</td>';
                                                    echo '<td>' . $row['nome' . $aluno_numero] . '</td>';
                                                    echo '<td>' . $row['email' . $aluno_numero] . '</td>';
                                                    echo '<td><input type="radio" name="OP3p' . $aluno_numero . '" value="presente" ';
                                                    if ($row['aluno' . $aluno_numero . 'OP3status']) {
                                                        echo 'checked';
                                                    }
                                                    echo ' /></td>';
                                                    echo '<td><input type="radio" name="OP3p' . $aluno_numero . '" value="ausente" ';
                                                    if ($row['aluno' . $aluno_numero . 'OP3status'] == false) {
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
                                            echo $soma_avaliacao;
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
                                                echo '<td><input type="number" value="' . $row['avaliacaoOP3atendiemnto' . $atendimentoOP3] . '" /> %</td>';
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
                                    <textarea style="width: 100%"><?php echo $row['avaliacaoOP3atendiemntoOBS']; ?></textarea>
                                </div>
                                <div class="hvr-fade">
                                    <?php
                                    if ($row['status'] == 'aberto') {
                                        echo '<input type="submit" value="Salvar" style="margin-top: 3%;" />';
                                    } else {
                                        echo '<input type="submit" value="Salvar" style="margin-top: 3%;" />';
                                        echo '<input type="submit" value="ReAbrir" style="margin-top: 3%;" />';
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
                                                    echo '<tr>';
                                                    echo '<td>1</td>';
                                                    echo '<td>' . $row['nome' . $aluno_numero] . '</td>';
                                                    echo '<td>' . $row['email' . $aluno_numero] . '</td>';
                                                    echo '<td><input type="radio" name="OP4p' . $aluno_numero . '" value="presente" ';
                                                    if ($row['aluno' . $aluno_numero . 'OP4status']) {
                                                        echo 'checked';
                                                    }
                                                    echo ' /></td>';
                                                    echo '<td><input type="radio" name="OP4p' . $aluno_numero . '" value="ausente" ';
                                                    if ($row['aluno' . $aluno_numero . 'OP4status'] == false) {
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
                                    Avaliar Atendimento <?php if ($row['avaliacaoOP4atendimento1'] != '') echo '- ' . $row['avaliacaoOP4atendimento1']; ?>
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
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP4atendimento1']; ?>" /> %</td>
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
                                    <textarea style="width: 100%"><?php echo $row['avaliacaoOP4atendiemntoOBS']; ?></textarea>
                                </div>
                                <div class="hvr-fade">
                                    <?php
                                    if ($row['status'] == 'aberto') {
                                        echo '<input type="submit" value="Salvar" style="margin-top: 3%;" />';
                                    } else {
                                        echo '<input type="submit" value="Salvar" style="margin-top: 3%;" />';
                                        echo '<input type="submit" value="ReAbrir" style="margin-top: 3%;" />';
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
                                                    echo '<tr>';
                                                    echo '<td>1</td>';
                                                    echo '<td>' . $row['nome' . $aluno_numero] . '</td>';
                                                    echo '<td>' . $row['email' . $aluno_numero] . '</td>';
                                                    echo '<td><input type="radio" name="OP5p' . $aluno_numero . '" value="presente" ';
                                                    if ($row['aluno' . $aluno_numero . 'OP5status']) {
                                                        echo 'checked';
                                                    }
                                                    echo ' /></td>';
                                                    echo '<td><input type="radio" name="OP5p' . $aluno_numero . '" value="ausente" ';
                                                    if ($row['aluno' . $aluno_numero . 'OP5status'] == false) {
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
                                            echo $soma_avaliacao;
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
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP5atendimento1']; ?>" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Autores / CPF / Filiação</td>
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP5atendimento2']; ?>" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Resumo</td>
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP5atendimento3']; ?>" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Abstract</td>
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP5atendimento4']; ?>" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Introdução</td>
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP5atendimento5']; ?>" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Desenvolvimento (OP1, OP2 e OP3)</td>
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP5atendimento6']; ?>" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Discussão dos resultados (OP4)</td>
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP5atendimento7']; ?>" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Considerações finais</td>
                                                <td><input type="number" value="<?php echo $row['avaliacaoOP5atendimento8']; ?>" /> %</td>
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
                                    <textarea style="width: 100%"><?php echo $row['avaliacaoOP5atendiemntoOBS']; ?></textarea>
                                </div>
                                <div class="hvr-fade">
                                    <?php
                                    if ($row['status'] == 'aberto') {
                                        echo '<input type="submit" value="Salvar" style="margin-top: 3%;" />';
                                    } else {
                                        echo '<input type="submit" value="Salvar" style="margin-top: 3%;" />';
                                        echo '<input type="submit" value="ReAbrir" style="margin-top: 3%;" />';
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
                                                    echo '<tr>';
                                                    echo '<td>1</td>';
                                                    echo '<td>' . $row['nome' . $aluno_numero] . '</td>';
                                                    echo '<td>' . $row['email' . $aluno_numero] . '</td>';
                                                    echo '<td><input type="radio" name="OP6p' . $aluno_numero . '" value="presente" ';
                                                    if ($row['aluno' . $aluno_numero . 'OP6status']) {
                                                        echo 'checked';
                                                    }
                                                    echo ' /></td>';
                                                    echo '<td><input type="radio" name="OP6p' . $aluno_numero . '" value="ausente" ';
                                                    if ($row['aluno' . $aluno_numero . 'OP6status'] == false) {
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
                                    <textarea style="width: 100%"><?php echo $row['avaliacaoOP6atendiemntoOBS']; ?></textarea>
                                </div>
                                <div class="hvr-fade">
                                    <?php
                                    if ($row['status'] == 'aberto') {
                                        echo '<input type="submit" value="Salvar" style="margin-top: 3%;" />';
                                        echo '<input type="submit" value="Fechar" style="margin-top: 3%;" />';
                                    } else {
                                        echo '<input type="submit" value="Salvar" style="margin-top: 3%;" />';
                                        echo '<input type="submit" value="ReAbrir" style="margin-top: 3%;" />';
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