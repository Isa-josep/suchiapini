<?php
include("PHP/conexion.php");
session_start();
$id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>REGISTRO DENEGADO</title>
</head>
<body>
	<div class="cuerpo">
		<h1>Registro fallido</h1>
        <center><p><?php echo $id ?></p><br></center>
        <!--ACOMODAR ESTE BOTON-->
        <center><a class="boton_a" onclick="regresar()">VOLVER</a></center>
        <br>
	</div>
    <script>
        function regresar(){
            history.back();
        }
    </script>
</body>
</html>