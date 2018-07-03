<?php include "header.php";?>
<?php include "nav.php";?>
<div id = "continut_pag">
  <br>
  <main>
 <h3 class="centrat"><br><br>Impresiile clientilor nostri</h3><br>
 
<?php
include("conn.php");
 
 class Guest {
   public $nr;  //  Cheia primara
   public $nume;
   public $prenume;
   public $data;
   public $email;
   public $mesaj;
}
   
   if(isset($cnx)) {
      $cda = "SELECT * FROM guest ORDER BY nr DESC";
      $stmt = $cnx->prepare($cda);
      $stmt->execute();
      echo "<table style=\"width:100%; \">";
      $i=1; //  Contor de linii
      while ($guest = $stmt->fetchObject('Guest')) {
         if ($i%2==0) {
            echo "<tr style=\"background-color:#0e1110; \"><td>";
         }
         else {
            echo "<tr style=\"background-color:#171918; \"><td>";
        }
        //echo $guest->nr; echo ".    ";
  
       echo "<p class=\" data \">"; 
        echo $guest->data;
        echo "<br />";
        echo "<p class=\" guest alineat\">"; 
        echo $guest->nume; echo "    ";
        echo $guest->prenume; echo "    ";
        echo "<br />";
        echo $guest->mesaj;
        
        echo "<br />";
     
        $i++;
   }
   $cnx = null;
   }
?>
        </table>
</main>
</div>
<?php include "footer.php";?>
</body>
</html> 