<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {




?>

<nav class="navbar navbar-inverse navbar-fixed-top" ><!-- navbar navbar-inverse navbar-fixed-top Starts -->

<div class="navbar-header" ><!-- navbar-header Starts -->

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" ><!-- navbar-ex1-collapse Starts -->


<span class="sr-only" >Toggle Navigation</span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>


</button><!-- navbar-ex1-collapse Ends -->

<a class="navbar-brand" href="index.php?dashboard" >Painel do Administrador</a>


</div><!-- navbar-header Ends -->

<ul class="nav navbar-right top-nav" ><!-- nav navbar-right top-nav Starts -->

<li class="dropdown" ><!-- dropdown Starts -->

<a href="#" class="dropdown-toggle" data-toggle="dropdown" ><!-- dropdown-toggle Starts -->

<i class="fa fa-user" ></i>

<?php echo $admin_name; ?> <b class="caret" ></b>


</a><!-- dropdown-toggle Ends -->

<ul class="dropdown-menu" ><!-- dropdown-menu Starts -->

<li><!-- li Starts -->

<a href="index.php?user_profile=<?php echo $admin_id; ?>" >

<i class="fa fa-fw fa-user" ></i> Perfil


</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="index.php?view_products" >

<i class="fa fa-fw fa-envelope" ></i> Produtos 

<span class="badge" ><?php echo $count_products; ?></span>


</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="index.php?view_customers" >

<i class="fa fa-fw fa-gear" ></i> Clientes

<span class="badge" ><?php echo $count_customers; ?></span>


</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="index.php?view_p_cats" >

<i class="fa fa-fw fa-gear" ></i> Categorias de Produtos

<span class="badge" ><?php echo $count_p_categories; ?></span>


</a>

</li><!-- li Ends -->

<li class="divider"></li>

<li><!-- li Starts -->

<a href="logout.php">

<i class="fa fa-fw fa-power-off"> </i> Sair

</a>

</li><!-- li Ends -->

</ul><!-- dropdown-menu Ends -->




</li><!-- dropdown Ends -->


</ul><!-- nav navbar-right top-nav Ends -->

<div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse Starts -->

<ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav Starts -->

<li><!-- li Starts -->

<a href="index.php?dashboard">

<i class="fa fa-fw fa-dashboard"></i> Dashboard

</a>

</li><!-- li Ends -->

<li><!-- Products li Starts -->

<a href="#" data-toggle="collapse" data-target="#products">

<i class="fa fa-fw fa-table"></i> Produtos

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="products" class="collapse">

<li>
<a href="index.php?insert_product"> Inserir produtos </a>
</li>

<li>
<a href="index.php?view_products"> Ver produtos </a>
</li>


</ul>

</li><!-- Products li Ends -->

<li><!-- Bundles Li Starts --->

<a href="#" data-toggle="collapse" data-target="#bundles">

<i class="fa fa-fw fa-edit"></i> Pacotes

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="bundles" class="collapse">

<li>
<a href="index.php?insert_bundle"> Inserir pacote </a>
</li>

<li>
<a href="index.php?view_bundles"> Ver pacotes </a>
</li>

</ul>

</li><!-- Bundles Li Ends --->

<li><!-- relations li Starts -->

<a href="#" data-toggle="collapse" data-target="#relations"><!-- anchor Starts -->

<i class="fa fa-fw fa-retweet"></i> Atribuir produtos às relações de pacotes

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="relations" class="collapse"><!-- collapse Starts -->

<li>

<a href="index.php?insert_rel"> Inserir relação </a>

</li>


<li>

<a href="index.php?view_rel"> Ver relações </a>

</li>

</ul><!-- collapse Ends -->


</li><!-- relations li Ends -->



<li><!-- manufacturer li Starts -->

<a href="#" data-toggle="collapse" data-target="#manufacturers"><!-- anchor Starts -->

<i class="fa fa-fw fa-briefcase"></i> Fabricantes

<i class="fa fa-fw fa-caret-down"></i>


</a><!-- anchor Ends -->

<ul id="manufacturers" class="collapse"><!-- ul collapse Starts -->

<li>
<a href="index.php?insert_manufacturer"> Inserir o fabricante </a>
</li>

<li>
<a href="index.php?view_manufacturers"> Ver fabricantes </a>
</li>

</ul><!-- ul collapse Ends -->


</li><!-- manufacturer li Ends -->


<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#p_cat">

<i class="fa fa-fw fa-pencil"></i> Categorias de produtos

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="p_cat" class="collapse">

<li>
<a href="index.php?insert_p_cat"> Inserir categoria de produto </a>
</li>

<li>
<a href="index.php?view_p_cats"> Ver categorias de produtos </a>
</li>


</ul>

</li><!-- li Ends -->


<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#cat">

<i class="fa fa-fw fa-arrows-v"></i> Categorias

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="cat" class="collapse">

<li>
<a href="index.php?insert_cat"> Inserir categoria </a>
</li>

<li>
<a href="index.php?view_cats"> Ver categorias </a>
</li>


</ul>

</li><!-- li Ends -->



<li><!-- store section li Starts -->

<a href="#" data-toggle="collapse" data-target="#store">

<i class="fa fa-fw fa-briefcase"></i> Lojas

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="store" class="collapse">

<li>
<a href="index.php?insert_store"> Inserir loja </a>
</li>

<li>
<a href="index.php?view_store"> Ver loja </a>
</li>

</ul>

</li><!-- store section li Ends -->


<li><!-- contact us li Starts -->

<a href="#" data-toggle="collapse" data-target="#contact_us"><!-- anchor Starts -->

<i class="fa fa-fw fa-pencil"> </i> Entre em contato conosco

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="contact_us" class="collapse">

<li>

<a href="index.php?edit_contact_us"> Edite "Entre em contato conosco" </a>

</li>

<li>

<a href="index.php?insert_enquiry"> Insira o tipo de consulta </a>

</li>

<li>

<a href="index.php?view_enquiry"> Ver tipos de consulta </a>

</li>

</ul>

</li><!-- contact us li Ends -->

<li><!-- about us li Starts -->

<a href="index.php?edit_about_us">

<i class="fa fa-fw fa-edit"></i> Editar página sobre nós 

</a>

</li><!-- about us li Ends -->


<li><!-- Coupons Section li Starts -->

<a href="#" data-toggle="collapse" data-target="#coupons"><!-- anchor Starts -->

<i class="fa fa-fw fa-arrows-v"></i> Cupons

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="coupons" class="collapse"><!-- ul collapse Starts -->

<li>
<a href="index.php?insert_coupon"> Inserir cupom </a>
</li>

<li>
<a href="index.php?view_coupons"> Ver cupons </a>
</li>

</ul><!-- ul collapse Ends -->

</li><!-- Coupons Section li Ends -->



<li><!-- terms li Starts -->

<a href="#" data-toggle="collapse" data-target="#terms" ><!-- anchor Starts -->

<i class="fa fa-fw fa-table"></i> Termos

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="terms" class="collapse"><!-- ul collapse Starts -->

<li>
<a href="index.php?insert_term"> Inserir termos </a> 
</li>

<li>
<a href="index.php?view_terms"> Ver termos </a> 
</li>

</ul><!-- ul collapse Ends -->


</li><!-- terms li Ends -->



<li>

<a href="index.php?view_customers">

<i class="fa fa-fw fa-edit"></i> Ver clientes

</a>

</li>

<li>

<a href="index.php?view_orders">

<i class="fa fa-fw fa-list"></i> Ver Pedidos

</a>

</li>

<li>

<a href="index.php?view_payments">

<i class="fa fa-fw fa-pencil"></i> Ver pagamentos

</a>

</li>

<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#users">

<i class="fa fa-fw fa-gear"></i> Usuários

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="users" class="collapse">

<li>
<a href="index.php?insert_user"> Inserir o usuário </a>
</li>

<li>
<a href="index.php?view_users"> Ver usuários </a>
</li>

<li>
<a href="index.php?user_profile=<?php echo $admin_id; ?>"> Editar Perfil </a>
</li>

</ul>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="logout.php">

<i class="fa fa-fw fa-power-off"></i> Sair

</a>

</li><!-- li Ends -->

</ul><!-- nav navbar-nav side-nav Ends -->

</div><!-- collapse navbar-collapse navbar-ex1-collapse Ends -->

</nav><!-- navbar navbar-inverse navbar-fixed-top Ends -->

<?php } ?>