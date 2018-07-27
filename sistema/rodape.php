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
                    <li><a href="/sistema/">Abertos</a></li>
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
                    <a href="novo-grupo.php">
                        <i class="fa fa-trello"></i>
                        <span>Novo Grupo</span>
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
                        <li><a href="novo-usuario.php">Adicionar</a></li>
                        <li><a href="deletar-usuario.php">Editar</a></li>
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
<?php

function get_browser_name($user_agent)
{
    if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
    elseif (strpos($user_agent, 'Edge')) return 'Edge';
    elseif (strpos($user_agent, 'Chrome')) return 'Chrome';
    elseif (strpos($user_agent, 'Safari')) return 'Safari';
    elseif (strpos($user_agent, 'Firefox')) return 'Firefox';
    elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'Internet Explorer';
   
    return 'Other';
}

// Usage:

//echo get_browser_name($_SERVER['HTTP_USER_AGENT']);

//Editada por ALLAN !
if(get_browser_name($_SERVER['HTTP_USER_AGENT'])=='Chrome'){
    echo '<script src="js/jquery.nicescroll.js"></script>';
    echo '<script src="js/jquery.nicescroll.iframehelper.js"></script>';
    echo '<script src="js/jquery.nicescroll.iframehelper.min.js"></script>';
    echo '<script src="js/jquery.nicescroll.min.js"></script>';
} else {
    echo '<script src="js/jquery.nicescroll.js"></script>';
    echo '<script src="js/jquery.nicescroll.iframehelper.js"></script>';
    echo '<script src="js/jquery.nicescroll.iframehelper.min.js"></script>';
    echo '<script src="js/jquery.nicescroll.min.js"></script>';
    echo '<script src="js/scripts.js"></script>';
}

?>
<!--//scrolling js-->
<script src="js/bootstrap.js"></script>
<!-- mother grid end here-->
</body>
</html>                     