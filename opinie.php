
<?php include "header.php";?>
<?php include "nav.php";?>
<div id = "continut_pag">
  <main>
    <h3 class="formular centrat"><br><br>Trimite mesajul tau!</h3>
    <div class="col-sm-12 col-md-12 col-lg-12" style="background-color: #1c1e1c;">
      <br>  <br>  <br>   <br>  
     <form name="formular" method="post" action="introducere.php" class="centrat">
       <table class="login centrat">
        <tr>
         <td>Numele *</td>
         <td><input type="text"placeholder="Numele dvs" required="yes" name="nume" minlength="3" maxlength="50" /></td>   
       </tr>

       <tr>
         <td>Prenumele</td>
         <td><input type="text" placeholder="Prenumele dvs"name="prenume" /></td>
       </tr>

       <tr>
         <td>E-mail</td>
         <td><input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"required="yes"></td>
       </tr>

       <tr>
         <td>Mesajul tau * </td>
         <td><textarea name="mesaj" placeholder="Mesajul dvs" required="yes" rows=5 minlength="10" maxlength="500"></textarea></td>
       </tr>

       <tr>
        <td colspan="2">
          <input type="submit" style="float:left;" value="Trimite mesajul ">
          <input type="reset" style="float:right;" value="Sterge">
        </tr>
      </table>
    </form>	
  </main>	
</div>
<?php include "footer.php";?>
</div>
</body>
</html> 
