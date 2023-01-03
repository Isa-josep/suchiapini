<?php
include("PHP/conexion.php");
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="CSS/STYLE.CSS">
	<title>INICIAR SESIÓN</title>
</head>
<body>
<center><br><br><br><br><br><br>
    <section>
        <form action="PHP/validar.php" method="post" autocomplete="off">
			<br><h1>inicia sesion SIDGDB</h1>
            <div class="input-group">
                <input required="" type="text" name="USUARIO" autocomplete="off" class="input">
                <label class="user-label">USUARIO</label>
                
                <input required="" type="PASSWORD" name="PASS" autocomplete="off" class="input">
                <label class="user-label">CONTRASEÑA</label>
                <p><input type="submit"  class="input"/></p>
            </div> 
            
        </form>
    </section>
    </center>
</body>
</html>