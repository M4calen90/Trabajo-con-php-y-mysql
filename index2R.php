<?php
error_reporting(0);
include "include/conexion.php";



if(isset($_POST['bntregistrar'])){
    
    $nombres= $_POST['nombre'];
    $apellido1= $_POST['apell'];
    $genero=$_POST['genero'];
    $correo =$_POST['correo'];
    $userr= $_POST['user'];
    $contraseñas=$_POST['contra'];

    

    $conin ="INSERT INTO  sesion ( `Nombre`, `Apellidos`, `Genero`, `Correo`, `User`, `Contraseña`) VALUES ('$nombres','$apellido1','$genero','$correo','$userr','$contraseñas')";
    $guarcon = $connect->query($conin);

    if($guarcon){
        ?>
        <h3 class="ok"> te has inscripto correctamente paaa</h3>
        <?php
    }else {
        ?>
        <h3 class="bad"> ups no te has inscripto correctamente paa</h3>
        <?php
    
    }



  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/stilos.css">
    <!-- archivo de validacion de los campos -->
    <link rel="stylesheet" href="js/validar_campos.js">

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">


    <title>VFast | Registrarse</title>

</head>
<body>
    <!--Main-->
    <div class="container col-12 p-5 mt-5 ">

        <div class="row">

           


            <!--Formulario-->
            <div class="container col-6 border shadow p-2">
                <h1 class="text-center mt-3">VFast</h1>
                <h3 class="text-center">Registrarse</h3>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >

                    

                    <label for="Nombre" class="form-label mt-4 ms-5">Nombre(s)</label>
                    <input type="text" class="form-control w-75 mx-auto" id="Nombres" name="nombre" placeholder="Ingresa tu nombre" required><br><br>

                    <label for="Apeliidos" class="form-label mt-4 ms-5">Apellidos</label>
                    <input type="text" class="form-control w-75 mx-auto" id="Apellidos" name="apell" placeholder="Ingresa tus apellidos" required><br><br>

                    <label for="N_user" class="form-label mt-4 ms-5">Genero</label>
                    <input type="text" class="form-control w-75 mx-auto" id="nickname2" name="genero" placeholder="Genero" required><br><br>

                    <label for="Mail" class="form-label mt-4 ms-5">Correo Electronico</label>
                    <input type="email" class="form-control w-75 mx-auto" id="mail" name="correo" placeholder="name@example.com" required><br><br>

                    <label for="N_user" class="form-label mt-4 ms-5">User</label>
                    <input type="text" class="form-control w-75 mx-auto" id="nickname2" name="user" placeholder="Ingresa tu nombre de usuario" required><br><br>

                    <label for="Password" class="form-label mt-4 ms-5">Contraseña</label>
                    <input type="password" class="form-control w-75 mx-auto" id="password" name="contra" placeholder="Ingresa tu contraseña" required><br><br>

                   
                        
                        </div><br>

                  

                           <div class=" d-grid gap-2 col-6 mx-auto mb-5">
                             <button class="btn2 btn-danger" type="submit"  name="bntregistrar" value="registrar" >Iniciar Sesion</button>
                            
                              <div class="d-grid gap-2 col-6 mx-auto mb-5 justify-content-center">
                                  <a href="index.html"> <button class="btn2 btn-danger" type="submit">Regresar </button></a>
                               </div> 
                               
                            </div>
                          
<!-- redes -->

            </form>
            </div>
            <?php echo $mensaje; ?>
        </div>

    </div>
    


    <script src="js/bootstrap.js"></script>
    <script src="js/validar_campos.js"></script>
</body>
</html>






