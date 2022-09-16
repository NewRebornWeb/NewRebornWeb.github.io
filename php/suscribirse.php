<?php 
    include("conexion.php");

    if(isset($_POST['suscribir'])){
        $userEmail = $_POST['correo'];
        
        $resultados = mysqli_query($conex, "SELECT Correo FROM TSuscripciones WHERE Correo = '$userEmail'");
        $contador = mysqli_num_rows($resultados);
        
        if($contador == 0){
            $insertar = mysqli_query($conex, "INSERT INTO TSuscripciones (Correo) VALUES ('$userEmail')");
            $SUS = "Suscrito correctamente";
        } else {
            $YASUS = "Ya estás suscrito";
        }     
    }

?>