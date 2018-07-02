<?php include "header.php";?>
<?php include "nav.php";?>
<div id = "continut_pag">
  <main>
    <?php
 include("conn.php");

   function testare($data) {
    $data = trim($data); 
    $data = stripslashes($data); 
    $data = htmlspecialchars($data); 
    return $data; 
  }
  if (testare($_FILES["fisier"]["error"]) > 0) {
    echo "Error: " . $_FILES["fisier"]["error"] . ""; 
    exit; 
  }
  
  $numeimagine = testare($_FILES["fisier"]["name"]); 
  $poz = strrpos($numeimagine, "."); 
  $extensie = substr ($numeimagine, $poz); 
  $nmtmp = $_FILES["fisier"]["tmp_name"]; 
  $id_categ = testare($_REQUEST["combo"]); 
  $name = testare($_REQUEST["name"]); 
  $description = testare($_REQUEST["description"]); 
  $price = testare($_REQUEST["price"]);

 
  if(isset($cnx)) {
  $cda= "INSERT INTO products (id, id_categ, img, name, description, price ) VALUES (null, :id_categ, :numeimagine, :name, :description, :price)";

   $stmt = $cnx->prepare($cda); 
   $stmt->bindParam(':id_categ', $id_categ, PDO::PARAM_STR); 
   $stmt->bindParam(':numeimagine', $numeimagine, PDO::PARAM_STR);
   $stmt->bindParam(':name', $name, PDO::PARAM_STR); 
   $stmt->bindParam(':description', $description, PDO::PARAM_STR);
   $stmt->bindParam(':price', $price, PDO::PARAM_STR); 
   // se foloseste PARAM_STR chiar si pentru numere 
   $stmt->execute(); 
   // Preiau ID-ul pozei introduse in baza si construiesc un nou nume 
   $id = $cnx->lastInsertId(); 
   $numeimaginenou = "img".$id.$extensie; 
   $cda = "UPDATE products SET img='$numeimaginenou' WHERE id = $id";
   $stmt = $cnx->prepare($cda); 
   $stmt->execute();
   // Construiesc calea pe care sa incarc fisierul 
   $cale = "images/$numeimaginenou"; 
   $rezultat = move_uploaded_file($nmtmp, $cale); 
   if (!$rezultat) { 
    echo "Eroare la incarcarea fisierului"; 
    exit; 
  } 
  echo "<br><br><br><br><p class=\"inserare centrat\">";
  echo "<h3 class=\"centrat\">Produsul s-a adaugat in baza de date!</h3><br><br>";
  echo "<form class=\"centrat\"><input type=button value=\"Adauga alt produs\"
  onClick=\"location.href='adaugare.php'\">";
  echo "<input type=button value=\"Acasa\" onClick=\"location.href='index.php'\"></form>";
  echo "</p><br /><br />";
  /*echo "<p class=\"inserare centrat\">Numele vechi al fisierului: $numeimagine</p>";
  echo "<p class=\"inserare centrat\">Numele vechi al fisierului mare:   $numeimaginemare</p>";
  echo "<p class=\"inserare centrat\">Categoria fisierului: $categ</p>";
  echo "<p class=\"centrat inserare\">Noul nume al fisierului: $numeimaginenou</p>";
  echo "<p class=\"inserare centrat\">Imaginea mare: $numeimaginemarenou</p>"; */
  $cnx = null;
}
?>
</main>

</div>
<?php include "footer.php";?>
</body>
</html> 