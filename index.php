<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


  <!-- Cover -->
  <main>
  
    <div class="hero">
      <a href="shop.php" class="btn1">Veja todos os produtos
</a>
    </div>
    <!-- Main -->
    <div class="wrapper">
            <h1>Produtos em destaque<h1>
            
      </div>



    <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

    <?php

    getPro();

    ?>

    </div><!-- row Ends -->

    </div><!-- container Ends -->
    <!-- FOOTER -->
    <footer class="page-footer">

      <div class="footer-nav">
        <div class="container clearfix">

          <div class="footer-nav__col footer-nav__col--info">
            <div class="footer-nav__heading">Informações</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Lojas físicas</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Atendimento ao Cliente</a>
            </ul>
          </div>
          
          <div class="footer-nav__col footer-nav__col--account">
            <div class="footer-nav__heading">Conta</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Entrar</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Registrar</a>
              </li>
              <li class="footer-nav__item">
                <a href="cart.php" class="footer-nav__link">Ver carrinho</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Acompanhe um pedido</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Atualizar informação</a>
              </li>
            </ul>
          </div>


          <div class="footer-nav__col footer-nav__col--contacts">
            <div class="footer-nav__heading">Contato</div>
            <address class="address">
            Rua: Antonio Morandi, nº 130<br>
            CEP 17.607-140 Tupã, SP.
          </address>
            <div class="phone">
              Telefone:
              <a class="phone__number" href="tel:0123456789">(14) 99829-0434</a>
            </div>
            <div class="email">
              Email:
              <a href="mailto:willian.yoshimi@gmail.com" class="email__addr">willian.yoshimi@gmail.com</a>
            </div>
          </div>

        </div>
      </div>

      <!-- <div class="banners">
        <div class="container clearfix">

          <div class="banner-award">
            <span>Award winner</span><br> Fashion awards 2016
          </div>

          <div class="banner-social">
            <a href="#" class="banner-social__link">
            <i class="icon-facebook"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-twitter"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-instagram"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-pinterest-circled"></i>
          </a>
          </div>

        </div>
      </div> -->

      <div class="page-footer__subline">
        <div class="container clearfix">

          <div class="copyright">
            &copy; <?php echo date("Y");?> PHARMAPLAIN&trade;
          </div>

          <div class="developer">
            Desenvolvido por Willian Kenichi Yoshimi
          </div>

          <div class="designby">
            Design por Willian Kenichi Yoshimi
          </div>

        </div>
      </div>
    </footer>
</body>

</html>
