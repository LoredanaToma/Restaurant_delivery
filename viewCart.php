<?php
// initializ shopping cart class
include 'Cart.php';
$cart = new Cart;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>GoodFood</title>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="imagini/icon-title.png"  />
  <link href="css/GoodFood.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .container{background-color:#1c1e1c;color:#72f972;padding: 10%;}
    input[type="number"]{width: 20%;}
    </style>
    <script>
    function updateCartItem(obj,id){
        $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
            if(data == 'ok'){
                location.reload();
            }else{
               ''
            }
        });
    }
    </script>
</head>
<?php include "header.php";?>
<?php include "nav.php";?>
<body>
<div class="container">
    <h1>Cos de cumparaturi</h1>
    <table class="table">
    <thead>
        <div class="col-sm-12 col-md-12 col-lg-12" style="background-color: #1c1e1c;">
         <tr>
            <th>Produs</th>
            <th>Pret</th>
            <th>Cantitate</th>
            <th>Subtotal</th>
            <th>&nbsp;</th>
        </tr>
    </thead></div>
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
            <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
            <td><?php echo ''.$item["subtotal"].' Ron'; ?></td>
            <td>
                <a href="cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Esti sigur?')"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="5"><p>Cosul tau este gol !</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td><a href="meniu.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i>Inapoi in magazin</a></td>
            <td colspan="2"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo ''.$cart->total().' Ron'; ?></strong></td>
            <td><a href="acount.php" class="btn btn-success btn-block">Continua<i class="glyphicon glyphicon-menu-right"></i></a></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
<?php include "footer.php";?>
</div>
</body>
</html> 