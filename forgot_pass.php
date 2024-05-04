<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>

  <main>
    <!-- HERO -->
    <div class="nero">
      <div class="nero__heading">
        <span class="nero__bold">Esqueceu a senha</span>      </div>
      <p class="nero__text">
      </p>
    </div>
  </main>

<div id="content" ><!-- content Starts -->
<div class="container" ><!-- container Starts -->

<div class="col-md-12" ><!--- col-md-12 Starts -->

<ul class="breadcrumb" ><!-- breadcrumb Starts -->

<li>
<a href="index.php">Home</a>
</li>

<li>Registrar</li>

</ul><!-- breadcrumb Ends -->



</div><!--- col-md-12 Ends -->


<div class="col-md-12" ><!-- col-md-12 Starts -->

<div class="box"><!-- box Starts -->

<div class="box-header"><!-- box-header Starts -->

<center>

<h3> Digite seu e -mail abaixo que enviaremos sua senha </h3>

</center>

</div><!-- box-header Ends -->

<div align="center"><!-- center div Starts -->

<form action="" method="post"><!-- form Starts -->

<input type="text" class="form-control" name="c_email" placeholder="Digite seu e-mail">

<br>

<input type="submit" name="forgot_pass" class="btn btn-primary" value="Enviar minha senha">

</form><!-- form Ends -->

</div><!-- center div Ends -->

</div><!-- box Ends -->

</div><!-- col-md-12 Ends -->


</div><!-- container Ends -->
</div><!-- content Ends -->



<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>

<?php

if(isset($_POST['forgot_pass'])){

$c_email = $_POST['c_email'];

$sel_c = "select * from customers where customer_email='$c_email'";

$run_c = mysqli_query($con,$sel_c);

$count_c = mysqli_num_rows($run_c);

$row_c = mysqli_fetch_array($run_c);

$c_name = $row_c['customer_name'];

$c_pass = $row_c['customer_pass'];

if($count_c == 0){

echo "<script> alert('Desculpe, não temos seu e -mail!!!') </script>";

exit();

}
else{

$message = "

<h1 align='center'> Sua senha foi enviada para você </h1>

<h2 align='center'> Querido $c_name </h2>

<h3 align='center'>

Sua senha é : <span> <b>$c_pass</b> </span>

</h3>

<h3 align='center'>

<a href='localhost/ecom_store/checkout.php'>

Click aqui para logar na sua conta

</a>

</h3>

";

$from = "willian.yoshimi@gmail.com";

$subject = "Sua senha";

$headers = "De: $from\r\n";

$headers .= "Content-type: text/html\r\n";

mail($c_email,$subject,$message,$headers);

echo "<script> alert('Sua senha foi enviada para você, verifique sua caixa de entrada ') </script>";

echo "<script>window.open('checkout.php','_self')</script>";

}

}

?>
