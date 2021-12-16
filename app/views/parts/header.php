<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <!-- <a class="navbar-brand" href="#">App MVC</a> -->
    <a id="logoLink" class="nav-link" href="<?= PATH."home"?>"><img id="logo" src="../../img/BELLEZAcapello-01.jpg" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?= PATH."nosotros"?>">Sobre Nosotros</a>
            </li>
        
            <li class="nav-item active">
            <a class="nav-link" href="<?php echo isset($_SESSION['trabajador']) ? PATH."trabajador":"" ?>">
                <?php echo isset($_SESSION['trabajador']) ? "Trabajadores":""?></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo PATH."servicio" ?>">Servicios</a>
            </li>
        </ul>

        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo isset($_SESSION['trabajador']) ? PATH."login/logout" : PATH."login"?>">
                    <?php echo isset($_SESSION['trabajador']) ? "Logout" : "Login"?></a>
            </li>
        </ul>
    </div>
</nav>
