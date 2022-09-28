<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KUTUFLÁS</title>
    <link rel="stylesheet" href="http://localhost/index/css/registro.php">
    <link rel="stylesheet" href="registro.css">
    <link rel="stylesheet" href="http://localhost/index/css/styles.css">
    <link rel="stylesheet" href="css/styles.css">
 



</head>
<body>
    
    <header class="header">
     
    </header>
<div class="container">
    <h1 class="regis">¡REGISTRATE!</h1>

    <p class="login">login</p>
   
</div>
    <div class="formulario"><!-- formulario -->
    <form action="registro.php" method="post">
       
    <p class="text">Nombre</p>
    <input id="Nombre" type="text" name="Nombre" placeholder="  " class="espacio">
    <p class="text">Edad</p>
    <input id="Edad" type="text" name="Edad" placeholder="" class="espacio"><br><br>
    <p class="text">Email</p>
    <input id="email" type="email" name="Email" placeholder="" class="espacio"><br><br>
    <p class="text">Telefono</p>
    <input id="telefono" type="telefono" name="Telefono" placeholder="" class="espacio"><br><br>
    <input type="submit" name="register" href="inicio.php"></div>

    
    <?php
      include("registro.php");
    ?>
      
    

</body>
</html>