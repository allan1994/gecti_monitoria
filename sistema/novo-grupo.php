<?php
include 'cabecalho.php';
?>
<?php
$mensagem_da_acao = '';
if ($_POST['acao']) {
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
    $sql = "INSERT INTO grupos (resposavel, status, codigo, tipo, obejto) "
            . "VALUES ('" . $_SESSION['usuarioID'] . "', 'Aberto', '"
            . $_POST['codigo'] . "', '" . $_POST['tipo'] . "', '" . $_POST['objeto'] . "')";
    $last_id;
    if (mysqli_query($conn, $sql)) {
        //echo "New record created successfully";
        $mensagem_da_acao = 'Novo Grupo ' . $_POST['codigo'] . ' criado com sucesso !!!';
        $last_id = mysqli_insert_id($conn);
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
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
    for ($matricula_numero = 1; $matricula_numero <= 9; $matricula_numero++) {
        if ($_POST['matricula']) {
            if ($_POST['nome']) {
                $sql = "UPDATE grupos SET matricula" . $matricula_numero . "='" . $_POST['matricula' . $matricula_numero] . "' WHERE id=" . $last_id;
                if (mysqli_query($conn, $sql)) {
                    //echo "Record updated successfully";
                } else {
                    echo "Error updating record: " . mysqli_error($conn);
                }
                $sql = "UPDATE grupos SET nome" . $matricula_numero . "='" . $_POST['nome' . $matricula_numero] . "' WHERE id=" . $last_id;
                if (mysqli_query($conn, $sql)) {
                    //echo "Record updated successfully";
                } else {
                    echo "Error updating record: " . mysqli_error($conn);
                }
                $sql = "UPDATE grupos SET email" . $matricula_numero . "='" . $_POST['email' . $matricula_numero] . "' WHERE id=" . $last_id;
                if (mysqli_query($conn, $sql)) {
                    //echo "Record updated successfully";
                } else {
                    echo "Error updating record: " . mysqli_error($conn);
                }
            }
        }
    }
    mysqli_close($conn);
}
?>
<div class="inner-block">
    <?php
    if ($mensagem_da_acao != '') {
        echo '<h2>' . $mensagem_da_acao . '</h2>';
    }
    ?>
    <h3>Cadastro Novo Grupo</h3>
    <br />
    <form action="novo-grupo.php" method="POST">
        <div class="formulario_cadastro_2">
            <label>Cógido do Grupo:</label>
            <input type="text" nome="codigo" required=""/>
        </div>
        <div class="formulario_cadastro_2">
            <label>Tipo do Projeto:</label>
            <input type="text" nome="tipo" required=""/>
        </div>
        <div class="formulario_cadastro_2">
            <label>Objeto de pesquisa:</label>
            <input type="text" style="width: 100%;" nome="objeto" required=""/>
        </div>
        <div class="formulario_cadastro_2">
            <div class="formulario_cadastro_1 col-md-4">
                <label>Componente 1</label>
                <div>
                    <div>
                        <label>Matrícula:</label>
                        <input type="text" style="width: 100%;" nome="matricula1" required=""/>
                    </div>
                    <div>
                        <label>Nome:</label>
                        <input type="text" style="width: 100%;" nome="nome1" required=""/>
                    </div>
                    <div>
                        <label>Email:</label>
                        <input type="email" style="width: 100%;" nome="email1" required=""/>
                    </div>
                </div>
            </div>
            <div class="formulario_cadastro_1 col-md-4">
                <label>Componente 2</label>
                <div>
                    <div>
                        <label>Matrícula:</label>
                        <input type="text" style="width: 100%;" nome="matricula2"/>
                    </div>
                    <div>
                        <label>Nome:</label>
                        <input type="text" style="width: 100%;" nome="nome2"/>
                    </div>
                    <div>
                        <label>Email:</label>
                        <input type="email" style="width: 100%;" nome="email2"/>
                    </div>
                </div>
            </div>
            <div class="formulario_cadastro_1 col-md-4">
                <label>Componente 3</label>
                <div>
                    <div>
                        <label>Matrícula:</label>
                        <input type="text" style="width: 100%;" nome="matricula3"/>
                    </div>
                    <div>
                        <label>Nome:</label>
                        <input type="text" style="width: 100%;" nome="nome3"/>
                    </div>
                    <div>
                        <label>Email:</label>
                        <input type="email" style="width: 100%;" nome="email3"/>
                    </div>
                </div>
            </div>
            <div class="formulario_cadastro_1 col-md-4">
                <label>Componente 4</label>
                <div>
                    <div>
                        <label>Matrícula:</label>
                        <input type="text" style="width: 100%;" nome="matricula4"/>
                    </div>
                    <div>
                        <label>Nome:</label>
                        <input type="text" style="width: 100%;" nome="nome4"/>
                    </div>
                    <div>
                        <label>Email:</label>
                        <input type="email" style="width: 100%;" nome="email4"/>
                    </div>
                </div>
            </div>
            <div class="formulario_cadastro_1 col-md-4">
                <label>Componente 5</label>
                <div>
                    <div>
                        <label>Matrícula:</label>
                        <input type="text" style="width: 100%;" nome="matricula5"/>
                    </div>
                    <div>
                        <label>Nome:</label>
                        <input type="text" style="width: 100%;" nome="nome5"/>
                    </div>
                    <div>
                        <label>Email:</label>
                        <input type="email" style="width: 100%;" nome="email5"/>
                    </div>
                </div>
            </div>
            <div class="formulario_cadastro_1 col-md-4">
                <label>Componente 6</label>
                <div>
                    <div>
                        <label>Matrícula:</label>
                        <input type="text" style="width: 100%;" nome="matricula6"/>
                    </div>
                    <div>
                        <label>Nome:</label>
                        <input type="text" style="width: 100%;" nome="nome6"/>
                    </div>
                    <div>
                        <label>Email:</label>
                        <input type="email" style="width: 100%;" nome="email6"/>
                    </div>
                </div>
            </div>
            <div class="formulario_cadastro_1 col-md-4">
                <label>Componente 7</label>
                <div>
                    <div>
                        <label>Matrícula:</label>
                        <input type="text" style="width: 100%;" nome="matricula7"/>
                    </div>
                    <div>
                        <label>Nome:</label>
                        <input type="text" style="width: 100%;" nome="nome7"/>
                    </div>
                    <div>
                        <label>Email:</label>
                        <input type="email" style="width: 100%;" nome="email7"/>
                    </div>
                </div>
            </div>
            <div class="formulario_cadastro_1 col-md-4">
                <label>Componente 8</label>
                <div>
                    <div>
                        <label>Matrícula:</label>
                        <input type="text" style="width: 100%;" nome="matricula8"/>
                    </div>
                    <div>
                        <label>Nome:</label>
                        <input type="text" style="width: 100%;" nome="nome8"/>
                    </div>
                    <div>
                        <label>Email:</label>
                        <input type="email" style="width: 100%;" nome="email8"/>
                    </div>
                </div>
            </div>
            <div class="formulario_cadastro_1 col-md-4">
                <label>Componente 9</label>
                <div>
                    <div>
                        <label>Matrícula:</label>
                        <input type="text" style="width: 100%;" nome="matricula9"/>
                    </div>
                    <div>
                        <label>Nome:</label>
                        <input type="text" style="width: 100%;" nome="nome9"/>
                    </div>
                    <div>
                        <label>Email:</label>
                        <input type="email" style="width: 100%;" nome="email9"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="hvr-fade">
            <input type="submit" name="acao" value="Cadastrar" />
        </div>
    </form>
</div>
<?php
include 'rodape.php';
?>                          