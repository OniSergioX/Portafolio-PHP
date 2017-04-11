<?php
require_once "clases/controlador/SessionController.php";
$sesion = new SessionController();
?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Navegación</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php?vista=inicio"><span class="glyphicon glyphicon-home"></span> Inicio</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php?vista=usuarios"><span class="glyphicon glyphicon-list-alt"></span> Carta</a>
                    </li>
                    <li>
                        <a href="index.php?vista=inicio#promociones"><span class="glyphicon glyphicon-usd"></span> Promociones</a>
                    </li>
                    <li>
                        <a href="index.php?vista=inicio#contacto"><span class="glyphicon glyphicon-earphone"></span> Contacto</a>
                    </li>
                </ul>
                
         <?php  if ($sesion->esCliente()) { $usuario = $_SESSION["usuario"]; ?>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php?vista=registro"><span class="glyphicon glyphicon-user"></span> 
                            <?php 
                                $usuario->getNombre()."&nbsp;".
                                $usuario->getApellidoPaterno()."&nbsp;".
                                $usuario->getApellidoMaterno(); 
                            ?>
                        </a>
                    </li>
                </ul>

        <?php   }
                else{?>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php?vista=registro"><span class="glyphicon glyphicon-user"></span> Registro</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#login-box"><span class="glyphicon glyphicon-log-in"></span> Acceso</a>
                    </li>
                </ul>

        <?php   }?>   

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <?php
        include dirname( __FILE__ )."/login.php";
    ?> 

    <header>
        <br>
        <div class="jumbotron text-center Aclonica">
            <h1>Master John</h1>
            <h3>Fuente Online</h3>
        </div>
    </header>