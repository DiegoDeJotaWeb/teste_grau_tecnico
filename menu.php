<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand" href="index.php">
        <h3>
            CRM
            <small class="text-muted">Força do Hábito</small>
        </h3>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

        <?php if($_SESSION["user_perfil"] == 'a'){?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cadastro
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="formularioUsuario.php">Usuário</a>
                    <a class="dropdown-item" href="formularioCliente.php">Cliente</a>
                    <a class="dropdown-item" href="formularioCategoria.php">Categoria</a>
                </div>
            </li>
            <?php }else{}?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Relatorio
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="relatorioUsuarios.php">Usuário</a>
                    <a class="dropdown-item" href="relatorioCliente.php">Cliente</a>
                    <a class="dropdown-item" href="relatorioCategoria.php">Categoria</a>
                </div>
            </li>

        </ul>




        <div class="d-inline p-2 ">
            <div class="avatar">
                <!-- <img src="assets/img/avatar.jpg" alt=""> -->
            </div>
        </div>
        <div class="d-inline p-2 ">
            <h6><?php echo $_SESSION["user_nome"]?></h6>
        </div>
        <div class="d-inline p-2 ">
            <a href="./vendor/logout.php" class="btn btn-danger text-white">Sair</a>
        </div>
    </div>
</nav>