<?php
include('conexion.php');
$username=$_POST['USUARIO'];
$password=$_POST['PASS'];
session_start();
$consulta="SELECT * FROM ADMINS where USUARIO='$username' and PASS='$password'";
$resultado=mysqli_query($conexion, $consulta);
//print_r($resultado);
if(mysqli_num_rows($resultado) == 0){
    echo "<script> window. location='registro_denegado.php?id=Cuenta o contraseña incorrectos'</script>";
    
}else{
    while($row=mysqli_fetch_assoc($resultado)) {
        $_SESSION["TipoSes"] = $row["TipoCuenta"];
    }
    $_SESSION["UsuarioSes"] = $username;
    $_SESSION["PassSes"] = $password;
    echo "<script> window. location='http://localhost/SUCHIAPIN/registro.html'</script>";
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>