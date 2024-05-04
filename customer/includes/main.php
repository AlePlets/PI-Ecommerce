</head>

<body>
  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
  <header class="page-header">
    <!-- topline -->
    <div class="page-header__topline">
      <div class="container clearfix">

        <div class="currency">
          <a class="currency__change" href="my_account.php?my_orders">
          <?php
          if(!isset($_SESSION['customer_email'])){
          echo "Bem Vindo: Visitante"; 
          }
          else
          { 
              echo "Bem Vindo: " . $_SESSION['customer_email'] . "";
            }
?>
          </a>
        </div>

        <div class="basket">
          <a href="../cart.php" class="btn btn--basket">
            <i class="icon-basket"></i>
            <?php items(); ?> items
          </a>
        </div>
        
        
        <ul class="login">

<li class="login__item">
<?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="../customer_register.php" class="login__link">Registrar</a>';
} 
  else
  { 
      echo '<a href="my_account.php?my_orders" class="login__link">Minha Conta</a>';
  }   
?>  
</li>


<li class="login__item">
<?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="../checkout.php" class="login__link">Entrar</a>';
} 
  else
  { 
      echo '<a href="../logout.php" class="login__link">Sair</a>';
  }   
?>  
  
</li>
</ul>
      
      </div>
    </div>
    <!-- bottomline -->
    <div class="page-header__bottomline">
      <div class="container clearfix">

      <div class="logo">
          <a class="logo__link" href="../index.php">
            <img class="logo__img" src="images/logo.png" alt="Logotipo Pharmaplain" width="300" height="19">
          </a>
        </div>

        <nav class="main-nav">
          <ul class="categories">                    
          <li class="categories__item">
              <a class="categories__link" href="my_account.php?my_orders">
                Perfil
                <i class="icon-down-open-1"></i>
              </a>
              <div class="dropdown dropdown--lookbook">
                <div class="clearfix">
                  <div class="dropdown__half">
                    <div class="dropdown__heading">Configurações</div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Minha Lista de Desejos</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Meus pedidos</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Ver Carrinho</a>
                      </li>
                    </ul>
                  </div>
                  <div class="dropdown__half">
                    <div class="dropdown__heading"></div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="my_account.php?edit_account" class="dropdown__link">Editar Perfil</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="my_account.php?change_pass" class="dropdown__link">Alterar Senha</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="my_account.php?delete_account" class="dropdown__link">Deletar Conta</a>
                      </li>
                    </ul>
                  </div>
                </div>
             

              </div>

            </li>

          </ul>
        </nav>
      </div>
    </div>
  </header>