
<?php include "header.php";?>
<?php include "nav.php";?>
<div id = "continut_pag">
   <main>

     <h2 class=" centrat"><br><br>Adaugare produse</h2><br><br>
     <form name="formular" enctype="multipart/form-data" method="post" action="inserare.php" class="centrat">
       <table class="login centrat">
        <tr>
         <td>Categoria:</td>
         <td> 
          <select name="combo">
            <option selected value="initial">(Alege categoria)</option>
            <?php
            include("conn.php");

            class Categ {
             public $id_categ;
             public $categ;
           }

           if(isset($cnx)) {
             $cda= "SELECT * FROM categ";
             $stmt = $cnx->prepare($cda);
             $stmt->execute();
             while ($categ = $stmt->fetchObject('Categ')) {
              echo '<option value="' . $categ->id_categ . '">' . $categ->categ . '</option>\n';
            }
            $cnx = null;
          }
          ?>
        </select>
      </td>
    </tr>


<tr>
   <td>Incarcati imaginea la dimensiunea ceruta:<br>width: 250px<br>hight: 170px </td>
   <td><input type="file"  required="yes" name="fisier" /></td>
</tr>


<tr>
   <td>Numele produsului: </td>
   <td><input type="text"placeholder="Numele produsului" required="yes" name="name" /></td>
</tr>

<tr>
   <td>Descriere:</td>
    <td><input type="text"placeholder="Descrierea produsului" name="description" /></td>
</tr>


<tr>
  <td>Pretul:</td>
  <td><input type="number" placeholder="Pretul" required="yes"name="price" /></td>
</tr>

<tr><br>
   <td><input type="submit" name="submita" value="Adauga"></td>
   <td><input type="reset" name="submitr" value="Sterge"></td>
</tr>
 
</table>
</form>
</main>
</div>
<?php include "footer.php";?>
</body>
</html> 
