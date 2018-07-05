
<?php include "header.php";?>
<?php include "nav.php";?>
<div id = "continut_pag">
    

    <?php
session_start();
    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "goodfood");

     

    // Check connection

    if($link === false){

        die("ERROR: Conectare nereusita! " . mysqli_connect_error());

    }

     

    // Escape user inputs for security


    $name = mysqli_real_escape_string($link, $_REQUEST['name']);

    $email = mysqli_real_escape_string($link, $_REQUEST['email']);

    $phone = mysqli_real_escape_string($link, $_REQUEST['phone']);

    $address = mysqli_real_escape_string($link, $_REQUEST['address']);

    $_SESSION['userEmail'] = $email;
    $_SESSION['userPhone'] = $phone;



    $sql = "INSERT INTO customers (id, name, email, phone, address) VALUES (NULL, '$name', '$email', '$phone', '$address')";

    if(mysqli_query($link, $sql)){

        echo "Comanda dvs a fost inregistrata!";
        header('Location: checkout.php');
        
       // header('Refresh: 10');

    } else{

        echo "ERROR: Conectare nereusita! $sql. " . mysqli_error($link);

    }

    
     

    // close connection

    mysqli_close($link);

    ?>



</div>
<?php include "footer.php";?>
</body>
</html> 
