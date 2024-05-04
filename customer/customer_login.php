<div class="box" ><!-- box Starts -->

<div class="box-header" ><!-- box-header Starts -->

<center>

<h1>Entrar</h1>

<p class="lead" >Seja nosso cliente</p>


</center>

<p class="text-muted" >
Como novo cliente, você é mais do que apenas uma transação para nós. Você se torna parte de uma comunidade dedicada à qualidade, inovação e compromisso com a sua satisfação. Queremos que você se sinta valorizado e apoiado em cada etapa do seu percurso conosco.
</p>




</div><!-- box-header Ends -->

<form action="checkout.php" method="post" ><!--form Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label>Email</label>

<input type="text" class="form-control" name="c_email" required >

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label>Senha</label>

<input type="password" class="form-control" name="c_pass" required >

<h4 align="center">

<a href="forgot_pass.php"> Esqueceu sua senha </a>

</h4>

</div><!-- form-group Ends -->

<div class="text-center" ><!-- text-center Starts -->

<button name="login" value="Login" class="btn btn-primary" >

<i class="fa fa-sign-in" ></i> Entrar


</button>

</div><!-- text-center Ends -->


</form><!--form Ends -->

<center><!-- center Starts -->

<a href="customer_register.php" >

<h3>Registre-se aqui</h3>

</a>


</center><!-- center Ends -->


</div><!-- box Ends -->

<?php

if(isset($_POST['login'])){

$customer_email = $_POST['c_email'];

$customer_pass = $_POST['c_pass'];

$select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";

$run_customer = mysqli_query($con,$select_customer);

$get_ip = getRealUserIp();

$check_customer = mysqli_num_rows($run_customer);

$select_cart = "select * from cart where ip_add='$get_ip'";

$run_cart = mysqli_query($con,$select_cart);

$check_cart = mysqli_num_rows($run_cart);

if($check_customer==0){

echo "<script>alert('Email ou senha está errada!!!')</script>";

exit();

}

if($check_customer==1 AND $check_cart==0){

$_SESSION['customer_email']=$customer_email;

echo "<script>alert('Você está logado!!!')</script>";

echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";

}
else {

$_SESSION['customer_email']=$customer_email;

echo "<script>alert('Você está logado!!!')</script>";

echo "<script>window.open('checkout.php','_self')</script>";

} 


}

?>