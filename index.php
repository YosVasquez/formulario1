<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<form action="lista.php" method="post" autocomplete="off">

<h2>Bienvenidos a la lista de tareas</h2>

<div class="input-group">

<div class="input-container">
    <input type="text" name="name" placeholder="Nombre" required>
    <i class="fa-solid fa-user"></i>
</div>

<div class="input-container">
    <input type="password" name="password" placeholder="Contraseña" required>
    <i class="fa-solid fa-lock"></i>
</div>

<div class="input-container">
    <input type="email" name="email" placeholder="Correo" required>
    <i class="fa-solid fa-envelope"></i>
</div>

<a href="#">Terminos y Condiciones</a>

<a href="lista.html">
<input type="submit" name="send" class="btn" value="Enviar">
</a>
</div>

</form>

<?php
     include("send.php");
?>






</body>
</html>