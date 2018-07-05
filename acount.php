
<?php include "header.php";?>
<?php include "nav.php";?>
<div id = "continut_pag">
  <main> <div class="col-sm-12 col-md-12 col-lg-12" style="background-color: #1c1e1c;">
    <h3 class="formular centrat"><br><br>Introduceti datele dvs !</h3>
   
      <br>  <br>  <br>   <br>  
     <form name="formular" method="post" action="user.php" class="centrat">
       <table class="login centrat">
        <tr>
         <td>Numele </td>
         <td><input type="text"  name="name" required="yes" placeholder="Numele dvs"/></td>   
       </tr>

       <tr>
         <td>Email *</td>
         <td>
          <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"required="yes"></td>
          
       <tr>
         <td>Telefon *</td>
         <td>
    <fieldset>
    <label for="phone"></label>
    <input type="tel" id="phone" name="phone"placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required />
    <span class="validity"></span>

</fieldset>
  </td>

       </tr>
         <tr>
         <td>Adresa </td>
         <td><input type="text" name="address" placeholder="Adresa dvs" required="yes" /></td>
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
