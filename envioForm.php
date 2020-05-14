<?php

    $usuario = "root";
    $contrasena = "";
    $servidor = "localhost";
    $basededatos = "cloform";

    // conectar al servidor BD
    $conexion = mysqli_connect( $servidor, $usuario, "" )
    or 
    die ("No se ha podido conectar al servidor de Base de datos");

    $db = mysqli_select_db( $conexion, $basededatos )
    or 
    die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

    // recuperar las variables

    if(isset($_POST['enviar'])){
        $nombre = $_POST["name"];
        $apellido = $_POST["lname"];
        $telefono = $_POST["number"];
        $email = $_POST["email"];
        $mensaje = $_POST["mensaje"];

        // sentencia SQL

        $sql="INSERT INTO datos VALUES ('$nombre',
        '$apellido',
        '$telefono',
        '$email',
        '$mensaje')";

    echo'<script type="text/javascript">
        alert("Formulario enviado con exito! Gracias por su contacto!");
        window.location.href="index.html";
        </script>';

        // Ejecutar la sentencia
    $ejecutar = mysqli_query( $conexion, $sql );

        // verificar ejecucion

    if(!$ejecutar){
        echo "no se ejecuta";
    }else{
        echo "datos enviados correctamente<br><a href='index.html'>Volver</a>";
        }
    }
        // cerramos conexion
        
    mysqli_close( $conexion );
?>