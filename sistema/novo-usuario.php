<?php
    include 'cabecalho.php';
?>
<div class="inner-block">
    <?php
        if(true==true){
            echo '<h2>Usuário cadastrado com sucesso !!!</h2>';
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