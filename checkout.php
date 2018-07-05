<?php
// include database configuration file
include 'dbConfig.php';

// initializ shopping cart class
include 'Cart.php';
$cart = new Cart;
 
// redirect to home if cart is empty
if($cart->total_items() <= 0){
    header("Location: meniu.php");
}



// set customer ID in session
//$_SESSION['sessCustomerID'] = 3;

// Interogare ultimul id introdus 
        $sql2 = "SELECT * FROM  customers WHERE email = '".$_SESSION['userEmail']."' AND  phone = '".$_SESSION['userPhone']."'";
      
      if($result=mysqli_query($db, $sql2)){
 
        while($row = $result->fetch_assoc()){
          $_SESSION['sessCustomerID'] = $row['id'];
        }

    } else{

        echo "ERROR: Conectare nereusita! $sql. " . mysqli_error($db);

    }



// get customer details by session customer ID
$query = $db->query("SELECT * FROM customers WHERE id = ".$_SESSION['sessCustomerID']);
$custRow = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GoodFood</title>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="imagini/icon-title.png"  />

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    .container{background-color:#1c1e1c;color:#72f972;width: 1200px;padding: 50px;}
    .table{background-color:#1c1e1c;width: 65%;float: left;}
    .shipAddr{background-color:#1c1e1c;width: 30%;float: left;margin-left: 30px;}
    .footBtn{background-color:#1c1e1c;width: 95%;float: left;}
    .orderBtn {background-color:#1c1e1c;float: right;}


    </style>
</head>
<?php include "header.php";?>
<?php include "nav.php";?>
<body>
<div class="container">

    <h1>Cos de cumparaturi</h1>
    <table class="table">
    <thead>
        <tr>
            <th>Produs</th>
            <th>Pret</th>
            <th>Cantitate</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo ''.$item["price"].' Ron'; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo ''.$item["subtotal"].' Ron'; ?></td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="4"><p>No items in your cart......</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class=><strong>Total <?php echo ''.$cart->total().' Ron'; ?></strong></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
    <div class="shipAddr">  
        <h4>Detaliile cumparatorului</h4>
        <p><?php echo $custRow['name']; ?></p>
        <p><?php echo $custRow['email']; ?></p>
        <p><?php echo $custRow['phone']; ?></p>
        <p><?php echo $custRow['address']; ?></p>
      <a href="acount.php"> <h3><i>Inapoi la formular</i></h3></a>
      
    </div>
    <div class="footBtn">

        <a href="meniu.php" class="btn btn-warning"style="color:black"><i class="glyphicon glyphicon-menu-left"></i> Inapoi in magazin</a>
        <a href="cartAction.php?action=placeOrder" class="btn btn-success orderBtn"style="color:black">Trimite comanda <i class="glyphicon glyphicon-menu-right"></i></a>
    </div>
</div>
<?php include "footer.php";?>
</body>
</html> 