<?php

session_start();

if (!isset($_SESSION['customer_email'])) {
    echo "<script>window.open('../checkout.php','_self')</script>";
} else {
    include("includes/db.php");
    include("includes/header.php");
    include("functions/functions.php");
    include("includes/main.php");

    // Uso seguro de operador de coalescência nula para verificar se o order_id está definido
    $order_id = $_GET['order_id'] ?? 'default_order_id';
?>

<div id="content"> <!-- content Starts -->
<div class="container"> <!-- container Starts -->
<div class="col-md-3"> <!-- col-md-3 Starts -->
    <?php include("includes/sidebar.php"); ?>
</div> <!-- col-md-3 Ends -->

<div class="col-md-9"> <!-- col-md-9 Starts -->
<div class="box"> <!-- box Starts -->
<h1 align="center"> Por favor, confirme seu pagamento </h1>

<form action="confirm.php?update_id=<?php echo $order_id; ?>" method="post" enctype="multipart/form-data"> <!-- form Starts -->
    <div class="form-group"> <!-- form-group Starts -->
        <label>Nº da Fatura:</label>
        <input type="text" class="form-control" name="invoice_no" required>
    </div> <!-- form-group Ends -->

    <div class="form-group"> <!-- form-group Starts -->
        <label>Valor:</label>
        <input type="text" class="form-control" name="amount_sent" required>
    </div> <!-- form-group Ends -->

    <div class="form-group"> <!-- form-group Starts -->
        <label>Selecione o modo de pagamento:</label>
        <select name="payment_mode" class="form-control">
            <option>Selecione o modo de pagamento</option>
            <option>PIX</option>
        </select>
    </div> <!-- form-group Ends -->

    <div class="form-group"> <!-- form-group Starts -->
        <label>ID de transação/referência:</label>
        <input type="text" class="form-control" name="ref_no" required>
    </div> <!-- form-group Ends -->

    <div class="form-group"> <!-- form-group Starts -->
        <label>Código:</label>
        <input type="text" class="form-control" name="code" required>
    </div> <!-- form-group Ends -->

    <div class="form-group"> <!-- form-group Starts -->
        <label>Data de pagamento:</label>
        <input type="text" class="form-control" name="date" required>
    </div> <!-- form-group Ends -->

    <div class="text-center"> <!-- text-center Starts -->
        <button type="submit" name="confirm_payment" class="btn btn-primary btn-lg">
            <i class="fa fa-user-md"></i> Confirme o pagamento
        </button>
    </div> <!-- text-center Ends -->
</form> <!-- form Ends -->

<?php
if (isset($_POST['confirm_payment'])) {
    $update_id = $_GET['update_id'] ?? null;
    $invoice_no = $_POST['invoice_no'] ?? '';
    $amount = $_POST['amount_sent'] ?? '';
    $payment_mode = $_POST['payment_mode'] ?? '';
    $ref_no = $_POST['ref_no'] ?? '';
    $code = $_POST['code'] ?? '';
    $payment_date = $_POST['date'] ?? '';
    $complete = "Complete";

    $insert_payment = "INSERT INTO payments (invoice_no, amount, payment_mode, ref_no, code, payment_date) VALUES ('$invoice_no', '$amount', '$payment_mode', '$ref_no', '$code', '$payment_date')";
    $run_payment = mysqli_query($con, $insert_payment);

    if ($run_payment) {
        $update_customer_order = "UPDATE customer_orders SET order_status='$complete' WHERE order_id='$update_id'";
        $run_customer_order = mysqli_query($con, $update_customer_order);

        $update_pending_order = "UPDATE pending_orders SET order_status='$complete' WHERE order_id='$update_id'";
        $run_pending_order = mysqli_query($con, $update_pending_order);

        if ($run_pending_order) {
            echo "<script>alert('Seu pagamento foi recebido, e o pedido estará pronto em 24 horas.');</script>";
            echo "<script>window.open('my_account.php?my_orders','_self');</script>";
        }
    } else {
        echo "<script>alert('Erro ao processar o pagamento. Por favor, verifique os dados e tente novamente.');</script>";
    }
}
?>

</div> <!-- box Ends -->
</div> <!-- col-md-9 Ends -->
</div> <!-- container Ends -->
</div> <!-- content Ends -->

<?php
include("includes/footer.php");
?>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>

<?php } ?>
