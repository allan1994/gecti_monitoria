<?php
    include 'cabecalho.php';
?>
<div class="inner-block">
    <h3>Configurações</h3>
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
            <label>Senha:</label>
            <input type="password" />
        </div>                       
        <div class="hvr-fade">
            <input type="submit" value="Atualizar" />
        </div>
    </form>
</div>
<?php
    include 'rodape.php';
?>