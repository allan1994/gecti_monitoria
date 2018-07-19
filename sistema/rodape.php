<!-- Código aqui -->
</div>
</div>
<!--slider menu-->
<div class="sidebar-menu">
    <div class="logo">
        <a class="sidebar-icon">
            <span class="fa fa-bars"></span>
        </a>
    </div>
    <div class="menu">
        <ul id="menu">
            <li>
                <a>
                    <i class="fa fa-users"></i>
                    <span>Grupos</span>
                </a>
                <ul>
                    <li><a href="#">Abertos</a></li>
                    <?php
                    if ($_SESSION['usuarioTipo'] == "Aluno") {
                        echo '<li><a href="fechados.php">Fechados</a></li>';
                    }
                    ?>
                </ul>
            </li>
            <?php
            if ($_SESSION['usuarioTipo'] == "Aluno") {
                echo
                '<li>
                    <a>
                        <i class="fa fa-trello"></i>
                        <a href="novo-grupo.php"><span>Novo Grupo</span></a>
                    </a>
                </li>';
            }
            ?>
            <?php
            if ($_SESSION['usuarioTipo'] == "Professor") {
                echo
                '<li>
                    <a>
                        <i class="fa fa-user"></i>
                        <span>Usuários</span>
                    </a>
                    <ul>
                        <li><a href="#">Adicionar</a></li>
                        <li><a href="#">Deletar</a></li>
                    </ul>
                </li>';
            }
            ?>                    
        </ul>
    </div>
</div>
<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
    var toggle = true;

    $(".sidebar-icon").click(function () {
        if (toggle) {
            $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
            $("#menu span").css({"position": "absolute"});
        } else {
            $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
            setTimeout(function () {
                $("#menu span").css({"position": "relative"});
            }, 400);
        }
        toggle = !toggle;
    });
</script>
<!--scrolling js-->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!--//scrolling js-->
<script src="js/bootstrap.js"></script>
<!-- mother grid end here-->
</body>
</html>                     