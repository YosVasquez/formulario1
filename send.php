<?php

include("conexion.php");

if (isset($_POST['send'])) {
    
    // Validar que todos los campos estén llenos
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['password']) >= 1 &&
        strlen($_POST['email']) >= 1
    ) {
        $name = trim($_POST['name']);
        $password = trim($_POST['password']);
        $email = trim($_POST['email']);
        $fecha = date("d/m/y");

        // Consulta SQL para insertar los datos
        $consulta = "INSERT INTO datos(nombre, contraseña, email, fecha)
                     VALUES ('$name', '$password', '$email', '$fecha')";

        $resultado = mysqli_query($conex, $consulta);
        
        if ($resultado) {
            ?>
            <h3 class="success">Tu registro se ha completado</h3>
            <?php
            // Redirigir a otra página solo si la inserción fue exitosa
            header("Location: lista.php");
            exit();
        } else {
            ?>
            <h3 class="error">Ocurrió un error al registrar los datos.</h3>
            <?php
        }
    } else {
        ?>
        <h3 class="error">Llena todos los campos.</h3>
        <?php
    }
}
?>
