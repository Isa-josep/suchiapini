<?php
    include("conexion.php");
    if(!isset($_POST['entrada'])){$_POST['entrada'] = '';}
    if(!empty($_POST)){
        $aKeyword = explode(" ", $_POST['entrada']);
        $query = "SELECT * FROM ALUMNOS where NO_CONTROL LIKE '%".$_POST['entrada']."%'";
        $resultado = mysqli_query($conexion, $query);
        if(mysqli_num_rows($resultado) > 0 ){
           // echo '<link rel="stylesheet" href="STYLE.CSS">';
            echo '<table class="tabla_alumnos">
            <tr>
                <th>No Control</th>
                <th>Nombre</th>
                <th>Grupo</th>
                <th></th>
            </tr>'; 
            while($row = $resultado->fetch_assoc()){
                echo"<tr>
                <td><center>".$row["NO_CONTROL"]."</center></td>
                <td><center>".$row["NOMBRE"]." ".$row["AP_P"]." ".$row["AP_M"]."</center></td>
                <td><center>".$row["SEMESTRE"]."</center></td>
                </tr>";
                
            }
            echo '</table>';
            /*echo '<label for="bachi">Elija El Bachillerato:</label>
            <select id="bachi" name="bachi">
              <option value="FS">Fisico Matematico</option>
              <option value="QB">Quimico Biologo</option>
              <option value="H">Humanidades</option>
              <p><input type="submit" action="Alta_Usuario.php" /></p>
            </select>';*/
           /* echo '<form action="Alta_Usuario.php" method="post">
            <p><input placeholder="NO_CONTROL" type="text"  required="" name="noControl" id="noControl" value="<?php echo $NO_CONTROL; ?>" /></p>
            <p><input placeholder="NOMBRE" type="text"  required="" name="nombre" id="nombre"/></p>
            <p><input placeholder="APELLIDO PATERNO" type="text"  required="" name="apellido_p" id="apellido_p"/></p>
            <p><input placeholder="APELLIDO MATERNO" type="text"  required="" name="apellido_m" id="apellido_m"/></p>
            <p><input placeholder="ESPECIALIDAD" type="text"  required="" name="ES" id="ES"/></p>
            <p><input placeholder="GRADO/GRUPO" type="text"  required="" name="grupo" id="grupo"/></p>
            <p><input placeholder="BACHILLERATO" type="text"  required="" name="bachi"/></p>
            <p><input placeholder="DOCENTE" type="text"  required="" name="dos"/></p>
            <p><input type="submit" action="Alta_Usuario.php" /></p>
            </form>
            ';*/
        }else if(mysqli_num_rows($resultado) <= 0 && $_POST['entrada'] != ''){
            echo '<center><p>No se encuentran datos </p></center> ';
           /*colocar un boton de regreso al buscador, este aparecera 
           en dado caso de que no haya resultados*/
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="Alta_Usuario.php" method="post">
            <p><input placeholder="NO_CONTROL" type="text"  required="" name="noControl" id="noControl value="<?php echo $nombre; ?> /></p>
            <p><input placeholder="NOMBRE" type="text"  required="" name="nombre" id="nombre"/></p>
            <p><input placeholder="APELLIDO PATERNO" type="text"  required="" name="apellido_p" id="apellido_p"/></p>
            <p><input placeholder="APELLIDO MATERNO" type="text"  required="" name="apellido_m" id="apellido_m"/></p>
            <p><input placeholder="ESPECIALIDAD" type="text"  required="" name="ES" id="ES"/></p>
            <p><input placeholder="GRADO/GRUPO" type="text"  required="" name="grupo" id="grupo"/></p>
            <p><input placeholder="BACHILLERATO" type="text"  required="" name="bachi"/></p>
            <p><input placeholder="DOCENTE" type="text"  required="" name="dos"/></p>
            <p><input type="submit" action="Alta_Usuario" /></p>
</form>
</body>
</html>