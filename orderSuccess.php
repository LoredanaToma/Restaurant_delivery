<?php
if(!isset($_REQUEST['id'])){
    header("Location: element.php");
}
?>
<?php include "header.php";?>
<?php include "nav.php";?>
<div id = "continut_pag">
    
<body>
<div class="container centrat">
    <br><h1>Comanda trimisa!</h1><br>
    <h3>Ve-ti fi contactat telefonic in cel mai scurt timp posibil pentru comfirmarea comenzii! ID-ul dvs este  #<?php echo $_GET['id']; ?></h4>
</div>
<?php include "footer.php";?>
</body>
</html> 
