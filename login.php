<?php include "header.php";?>
<?php include "nav.php";?>
<div id = "continut_pag">
  <div class="formular-login"> 
    
    <div class="col-sm-12 col-md-12 col-lg-12" style="background-color: :#1c1e1c;">
      <h1 class="centrat"><br><br> Autentificare</h1><br />
    <form name="formular" method="post" action="verificare.php" class="centrat">
       <table class="centrat">
        <tr>
           <td>User </td>
           <td><input type="text" required="yes" name="numeletau"  minlength="3" maxlength="50"/></td>
        </tr>

        <tr>
           <td>Parola </td>
           <td><input type="password" required="yes" name="parolata" minlength="4" maxlength="6"/></td>
        </tr>

        <tr>
            <td colspan="2" class="centrat"><input type="submit" name="trimite" value="Verifica" /></td>
        </tr>
       </table>
    </form>
</div>
</div> 
</div>
<?php include "footer.php";?>
</body>
</html> 