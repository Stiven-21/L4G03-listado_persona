<?php
    $host="localhost";
    $user="root";
    $password="12345678";
    $bd="registrar";
    $conexion=new mysqli($host,$user,$password,$bd);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <style>
    button{
        border: solid 2px black;
    }
    </style>
</head>
<body bgcolor="black">
    <br>
    <table align="center" border="4">
        <tr align="center">
            <td colspan="3"><font size="6" color="white">LISTA DE PERSONAS</font></td>
        </tr>
        <tr align="center">
            <td><font size="3" color="white">ID</font></td>
            <td><font size="3" color="white">NOMBRE</font></td>
            <td><font size="3" color="white">E-MAIL</font></td>
        </tr>
        <?php
            $sql="SELECT * FROM personas";
            $result=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr align="center">
            <td><font size="3" color="white"><?php echo $mostrar['id'] ?></font></td>
            <td><font size="3" color="white"><?php echo $mostrar['nombre'] ?></font></td>
            <td><font size="3" color="white"><?php echo $mostrar['email'] ?></font></td>
        </tr>
        <?php
            }

        ?>
        <tr align="center">
            <td colspan="3"><a href="crear.php"><button><font size="3">Ingresar datos</font></button></a></td>
        </tr>
    </table>
</body>
</html>