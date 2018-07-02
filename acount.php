
<?php include "header.php";?>
<?php include "nav.php";?>
<div id = "continut_pag">
  <main>
    <h3 class="formular centrat"><br><br>Introduce-ti datele dvs !</h3>
    <div class="col-sm-12 col-md-12 col-lg-12" style="background-color: #1c1e1c;">
      <br>  <br>  <br>   <br>  
     <form name="formular" method="post" action="user.php" class="centrat">
       <table class="login centrat">
        <tr>
         <td>Numele </td>
         <td><input type="text"  name="name"  /></td>   
       </tr>

       <tr>
         <td>Email *</td>
         <td><input type="text"  required="yes" name="email" /></td>
       </tr>

       <tr>
         <td>Telefon *</td>
         <td><input type="text"  required="yes" name="phone"  /></td>
       </tr>
         <tr>
         <td>Adresa </td>
         <td><input type="text" name="address"  /></td>
       </tr> <tr>
  
       <tr>
        <td colspan="2">
          <input type="submit" style="float:left;" value="Continua">
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
