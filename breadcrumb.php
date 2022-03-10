<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    
    <?php
    if(isset($home)){
      echo '<li class="breadcrumb-item"><a href="index.php">Home</a></li>';
    }
    if(isset($cUsuario)){
      echo '<li class="breadcrumb-item"><a href="formularioUsuario.php">Cadastro de usuário</a></li>';
    }
    if(isset($cCliente)){
      echo '<li class="breadcrumb-item"><a href="formularioCliente.php">Cadastro de cliente</a></li>';
    }
    if(isset($cCategoria)){
      echo '<li class="breadcrumb-item"><a href="formularioCategoria.php">Cadastro de categoria</a></li>';
    }
    if(isset($rUsuario)){
      echo '<li class="breadcrumb-item"><a href="relatorioUsuarios.php">Relatorio de usuário</a></li>';
    }
    if(isset($rCliente)){
      echo '<li class="breadcrumb-item"><a href="relatorioCliente.php">Relatorio de cliente</a></li>';
    }
    if(isset($rCategoria)){
      echo '<li class="breadcrumb-item"><a href="relatorioCategoria.php">Relatorio de categoria</a></li>';
    }
    if(isset($rAUsuario)){
      echo '<li class="breadcrumb-item"><a href="relatorioUsuarios.php">Alterar dados do usuário</a></li>';
    }
    if(isset($rACliente)){
      echo '<li class="breadcrumb-item"><a href="relatorioCliente.php">Alterar dados do cliente</a></li>';
    }

    if(isset($rACategoria)){
      echo '<li class="breadcrumb-item"><a href="relatorioCategoria.php">Alterar dados da categoria</a></li>';
    }
    
    
    ?>
  </ol>
</nav>