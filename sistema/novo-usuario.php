<?php
    include 'cabecalho.php';
?>
<div class="inner-block">
    <h3>Cadastro Novo Usuário</h3>
    <br />
    <form action="/" method="get">
        <div class="formulario_cadastro_2">
            <label>Primeiro Nome:</label>
            <input type="text" />
        </div>
        <div class="formulario_cadastro_2">
            <label>Email:</label>
            <input type="email" />
        </div>
        <div class="formulario_cadastro_2">
            <label>Tipo de Conta:</label>
            <br />
            <input type="radio" value="Aluno" checked/> <i>Aluno</i> <br />
            <input type="radio" value="Professor" /> <i>Professor</i>
        </div>                        
        <div class="hvr-fade">
            <input type="submit" value="Cadastrar" />
        </div>
    </form>
</div>
<?php
    include 'rodape.php';
?> 