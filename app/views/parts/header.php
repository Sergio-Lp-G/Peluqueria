<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <!-- <a class="navbar-brand" href="#">App MVC</a> -->
    <img id="logo" src="../img/BELLEZAcapello-01.jpg" alt="logo">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?= PATH."home"?>">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= PATH."trabajador"?>">Trabajadores</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= PATH."servicio"?>">Servicios</a>
            </li>
        </ul>

        <!-- nuevo -->
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="<?= PATH."login"?>">Login</a>
            </li>
        </ul>
    </div>
</nav>
