<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/var/www/html/web/style.css">
    <title>CALCULO DE NOTAS UNICAES</title>
</head>
<style type="text/css">
  h1 { color: red; font-family: Verdana; }
  input { color: red; font-family: Verdana; }
  form { color: blue; font-family: Verdana; }
  image { width="10px" height="10px"}
</style>

<body>
    
    <form name="prom" action="notas.php" method="POST" align="center" />
        <img src="logo-UNICAES-png.png" alt="logo">
        <h1>UNICAES</h1>
        Alumno: <input type="text" name="nombre" size="10" value=""><br /><br />
        Laboratorio 1 / 25% : <input type="text" name="nota1" size="10" value=""><br /><br />
        Laboratorio 2 / 25% : <input type="text" name="nota2" size="10" value=""><br /><br />
        PARCIAL 50% <input type="text" name="nota3" size="10" value=""><br /><br />
        <input type="submit" value="Calcular promedio" name="BtnBoton"><br /><br />

        <?php
        @$nombre = $_POST['nombre'];
        @$nota1 = $_POST['nota1'];
        @$nota2 = $_POST['nota2'];
        @$nota3 = $_POST['nota3'];
        @$prom = ($nota1*0.25) + ($nota2*0.25) + ($nota3*0.50);
        echo "El estudiante: $nombre <br />";
        echo "Tuvo promedio final de: $prom <br />";
        ?>
</body>
</html>

