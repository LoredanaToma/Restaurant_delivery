<?php
// include database configuration file
include 'dbConfig.php';
?>
<?php include "header.php";?>
<?php include "nav.php";?>
<div id="continut_pag">
    <h1 class="centrat"><br>Sosuri</h1><br><br>
  
       <div id="products" >
            <?php
        //get rows query
            $query = $db->query("SELECT * FROM products where id_categ=9 ORDER BY id DESC LIMIT 10");
            if($query->num_rows > 0){ 
                while($row = $query->fetch_assoc()){
                    ?>
               <div class="item col-sm-4">
                        <div class="thumbnail" style="background-color:#1c1e1c ">
                            <div class="caption">
                                <center><h4 class="list-group-item-heading"><?php echo $row["name"]; ?></h4></center>
                            <center><img src="images/<?php echo $row["img"]; ?>" /></center><br />  
                                <p class="list-group-item-text"><?php echo $row["description"]; ?></p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="lead"><?php echo 'Pret:'.$row["price"].' Ron'; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                       <a class="btn btn-success" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">Adauga in cos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    



            <?php } }else{ ?>
                <p>Produsul nu poate fi gasit...</p>
            <?php } ?>
        </div>
    </div>
</body>
</html>