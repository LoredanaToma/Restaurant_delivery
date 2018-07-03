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
    $nume=testare($_REQUEST["nume"]);
    $prenume=testare($_REQUEST["prenume"]);
    $email=testare($_REQUEST["email"]);
    $mesaj=testare($_REQUEST["mesaj"]);

     date_default_timezone_set('Europe/Bucharest');
    $data = date('Y-m-d H:i:s'); // data in format 
   
    if(isset($cnx)) {
      $cda = "INSERT INTO guest (nr, nume, prenume, data, email, mesaj) VALUES (NULL, :nume, :prenume,'$data', :email, :mesaj)";
      $stmt = $cnx->prepare($cda); 
      $stmt->bindParam(':nume', $nume, PDO::PARAM_STR);
      $stmt->bindParam(':prenume', $prenume, PDO::PARAM_STR);
      $stmt->bindParam(':email', $email, PDO::PARAM_STR);
      $stmt->bindParam(':mesaj', $mesaj, PDO::PARAM_STR);
      $stmt->execute(); 
      echo "<p class=\"inserare centrat\">"; 
      echo "<h1 class=\"italic centrat\">$nume $prenume</span><br /> Mesajul dv. s-a adaugat in cartea noastra de oaspeti<br /><br /> Va multumim!</h1><br />";
      echo "<br /><br /><br /><br />";
      $cnx = null;
    }
    ?>
    <h6 class="centrat"><a href="vizite.php">Alte impresii</a>   |
  <a href="opinie.php">Mai trimite o impresie</a>   |   <a
  href="index.php">Acasa</a></h6>
</main>

</div>
<?php include "footer.php";?>
</body>
</html> 