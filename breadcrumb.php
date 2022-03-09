<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    
    <?php
    if(isset($home)){
      echo '<li class="breadcrumb-item"><a href="#">Home</a></li>';
    }
    if(isset($cUsuario)){
      echo '<li class="breadcrumb-item"><a href="#">Cadastro de usuário</a></li>';
    }
    if(isset($cCliente)){
      echo '<li class="breadcrumb-item"><a href="#">Cadastro de cliente</a></li>';
    }
    if(isset($cCategoria)){
      echo '<li class="breadcrumb-item"><a href="#">Cadastro de categoria</a></li>';
    }
    if(isset($rUsuario)){
      echo '<li class="breadcrumb-item"><a href="#">Relatorio de usuário</a></li>';
    }
    if(isset($rCliente)){
      echo '<li class="breadcrumb-item"><a href="#">Relatorio de cliente</a></li>';
    }
    if(isset($rCategoria)){
      echo '<li class="breadcrumb-item"><a href="#">Relatorio de categoria</a></li>';
    }

    
    ?>
  </ol>
</nav>