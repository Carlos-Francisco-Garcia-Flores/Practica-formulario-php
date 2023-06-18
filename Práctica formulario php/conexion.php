<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del usuario</title>
    <link rel="stylesheet" href="./style.css">

</head>
<body>
    <?php
        $nombre=$_POST['Nam'];
        $usuario=$_POST['user'];
        $contra=$_POST['Pass'];
        $ccontra=$_POST['Pass2'];
        $email=$_POST['Email'];
        $telefono=$_POST['tel'];
        $generos=$_POST['genero'];
        $fechanacimiento=$_POST['fchnac'];
        $rfc=$_POST['RFC'];
    ?>


    <div class="containerForm1">
    <fieldset>

<P>Nombre completo:   <?php echo($nombre) ?> </P>

<P>Usuario:   <?php echo($usuario) ?> </P>

<P>Contraseña:   <?php echo($contra) ?> </P>

<P>Confirmacion de la contraseña:   <?php echo($ccontra) ?> </P>

<P>Correo electronico:   <?php echo($email) ?> </P>

<P>Numero telefonico:   <?php echo($telefono) ?> </P>

<P>Genero:   <?php echo($generos) ?> </P>

<P>Fecha de nacimieto:   <?php echo($fechanacimiento) ?> </P>

<P>RFC:   <?php echo($rfc) ?> </P>

    </fieldset>


    </div>





</body>
</html>