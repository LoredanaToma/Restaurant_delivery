
<?php include "header.php";?>
<?php include "nav.php";?>
<div id = "continut_pag">
    
<body>
<div class="container centrat">
	<?php
if(!isset($_REQUEST['id'])){
    header("Location: viewCart.php");
}
?>
    <br><br><br><h3>Comanda trimisa!</h3><br>
    <h3>Veti fi contactat telefonic in cel mai scurt timp posibil pentru confirmarea comenzii! ID-ul dvs este  #<?php echo $_GET['id']; ?></h4><br><br>
</div>
</div>
<?php include "footer.php";?>
</body>
</html> 