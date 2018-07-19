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
                                    echo 'Avaliar Atendimento - ';
                                    echo ($row['avaliacaoOP1atendimento1'] + $row['avaliacaoOP1atendimento2'] + $row['avaliacaoOP1atendimento3'])/3;
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
                                    <input type="submit" value="Salvar" style="margin-top: 3%;" />
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
                                    echo 'Avaliar Atendimento - ';
                                    echo ($row['avaliacaoOP2atendimento1'] + $row['avaliacaoOP2atendimento2'])/2;
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
                                                <td>Sobre a Trajetória da bancada ao mercado</td>
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
                                    <input type="submit" value="Salvar" style="margin-top: 3%;" />
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
                                    Avaliar Atendimento
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
                                                <td>nº1</td>
                                                <td><input type="number" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>nº2</td>
                                                <td><input type="number" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>nº3</td>
                                                <td><input type="number" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>nº4</td>
                                                <td><input type="number" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>nº5</td>
                                                <td><input type="number" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>nº6</td>
                                                <td><input type="number" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>nº7</td>
                                                <td><input type="number" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>nº8</td>
                                                <td><input type="number" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>nº9</td>
                                                <td><input type="number" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>nº10</td>
                                                <td><input type="number" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>nº11</td>
                                                <td><input type="number" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>nº12</td>
                                                <td><input type="number" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>nº13</td>
                                                <td><input type="number" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>nº14</td>
                                                <td><input type="number" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>nº15</td>
                                                <td><input type="number" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>nº16</td>
                                                <td><input type="number" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>17</td>
                                                <td>nº17</td>
                                                <td><input type="number" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>18</td>
                                                <td>nº18</td>
                                                <td><input type="number" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>19</td>
                                                <td>nº19</td>
                                                <td><input type="number" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>20</td>
                                                <td>nº20</td>
                                                <td><input type="number" /> %</td>
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
                                    <textarea style="width: 100%"></textarea>
                                </div>
                                <div class="hvr-fade">
                                    <input type="submit" value="Salvar" style="margin-top: 3%;" />
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
                                    Avaliar Atendimento
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
                                                <td><input type="number" /> %</td>
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
                                    <textarea style="width: 100%"></textarea>
                                </div>
                                <div class="hvr-fade">
                                    <input type="submit" value="Salvar" style="margin-top: 3%;" />
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
                                    Avaliar Atendimento
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
                                                <td><input type="number" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Autores / CPF / Filiação</td>
                                                <td><input type="number" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Resumo</td>
                                                <td><input type="number" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Abstract</td>
                                                <td><input type="number" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Introdução</td>
                                                <td><input type="number" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Desenvolvimento (OP1, OP2 e OP3)</td>
                                                <td><input type="number" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Discussão dos resultados (OP4)</td>
                                                <td><input type="number" /> %</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Considerações finais</td>
                                                <td><input type="number" /> %</td>
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
                                    <textarea style="width: 100%"></textarea>
                                </div>
                                <div class="hvr-fade">
                                    <input type="submit" value="Salvar" style="margin-top: 3%;" />
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
                                    <textarea style="width: 100%"></textarea>
                                </div>
                                <div class="hvr-fade">
                                    <input type="submit" value="Salvar" style="margin-top: 3%;" />
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
include 'rodape.php';
?>  