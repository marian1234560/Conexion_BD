<?php
    include_once("DBconect.php");

    if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['edad']) && isset($_POST['email'])){
        if ($_POST['nombre'] !== "" && $_POST['apellido'] !== "" && $_POST['edad'] !== "" && $_POST['email'] !== ""){

            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $edad = $_POST['edad'];
            $email = $_POST['email'];

            $conexion = new Database;
            $confirm = $conexion->insertar($nombre,$apellido,$edad,$email);
        }else{
            $confirm = 2;//uno o mas campos vacios
        }
    }

    header('Location: ../index.php?confirm='.$confirm)
?>