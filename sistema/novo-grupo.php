<?php
    include 'cabecalho.php';
?>
<div class="inner-block">
    <?php
        if(true==true){
            echo '<h2>Grupo cadastrado com sucesso !!!</h2>';
        }
    ?> 
    <h3>Cadastro Novo Grupo</h3>
    <br />
    <form action="/" method="get">
        <div class="formulario_cadastro_2">
            <label>Cógido do Grupo:</label>
            <input type="text" nome="codigo"/>
        </div>
        <div class="formulario_cadastro_2">
            <label>Tipo do Projeto:</label>
            <input type="text" nome="tipo"/>
        </div>
        <div class="formulario_cadastro_2">
            <label>Objeto de pesquisa:</label>
            <input type="text" style="width: 100%;" nome="objeto"/>
        </div>
        <div class="formulario_cadastro_2">
            <div class="formulario_cadastro_1 col-md-4">
                <label>Componente 1</label>
                <div>
                    <div>
                        <label>Matrícula:</label>
                        <input type="text" style="width: 100%;" nome="matricula1"/>
                    </div>
                    <div>
                        <label>Nome:</label>
                        <input type="text" style="width: 100%;" nome="nome1"/>
                    </div>
                    <div>
                        <label>Email:</label>
                        <input type="email" style="width: 100%;" nome="email1"/>
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
            <input type="submit" value="Cadastrar" />
        </div>
    </form>
</div>
<?php
    include 'rodape.php';
?>                          