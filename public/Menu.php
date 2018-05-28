<nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-fixed-top">
    <a class="navbar-brand" href="#">
        <a href="index.php"><img src="/images/logo_marco.png" width="30" height="30" class="d-inline-block align-top mr-3" alt=""></a><p class="text-primary m-3">Quooter</p>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/publicar">Publicar cita</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/top-10">Top 10</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contacto">Contacto</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0 mr-3">
            <a class="btn btn-primary" href="/login" role="button">Login</a>
            <a class="btn btn-primary ml-3" href="/registro" role"button">Registro</a>
            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Mi cuenta
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="/perfil">Mi perfil</a>
                    <a class="dropdown-item" href="/administrador">Gestión usuarios</a>
                    <a class="dropdown-item" href="/logout">Cerrar sesión</a>
                </div>
            </div>
        </form>
    </div>
</nav>
