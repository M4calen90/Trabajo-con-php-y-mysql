
<?php

   include "conexion.php";

   if(isset($_POST['btnsesion'])){


    $nomuser=$connect->real_escape_string($_POST['usuario']);
    $passwordd=$connect->real_escape_string($_POST['contra']);
    

    $con="SELECT * FROM sesion WHERE User='$nomuser' and Contraseña = '$passwordd'";
    if($result=$connect->query($con)){
        while($row=$result->fetch_array()){
            $userok =$row['User'];
            $passok =$row['Contraseña'];

        }
        $result->close();

    }
    $connect->close();
      if(isset($nomuser)  && isset($passwordd)){
          if($nomuser==$userok && $passwordd== $passok){
            $_SESSION['login']= TRUE;
            $_SESSION['Usuario']= $usuario;

            header("location:index2R.php");
        }
        else{
            
            
            //header("location:recuperar.html");
            ?>
            <h3 class="bad"> primero ve al apartado de "registrare" para poder acceder y despues inicia sesion</h3>
            <?php
        
       }
    }
   
 }
    
    
?>
