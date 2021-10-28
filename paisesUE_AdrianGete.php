<?php
  session_start();
  
  if (!$_POST){
    echo "Inicio";
    $arrayPaises = Array();
    var_export($arrayPaises);
    echo "Fin inicio";
  }
  //Por alguna razón se borra el array creado si no hay post
  if (isset($_POST['nuevosDatos'])){
    $pais=$_POST['pais'];
    $capital=$_POST['capital'];
     var_export($arrayPaises);
    /*array_push($arrayPaises, $pais, $capital);*/
    $arrayPaises=[$pais => $capital];
    var_export($arrayPaises);
    
    /*$arrayPaises= array_merge($arrayPaises,$aux);*/
  }
  
  if (isset($_POST['pais'])) {
    echo '<fieldset>';
      echo '<legend>Listado de paises</legend>';
      var_export($arrayPaises);
    echo '</fieldset>';
  }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Paises de la Unión Europea</title>
    </head>
    <body>
        <form action="paisesUE_AdrianGete.php" method="post">
            
            <fieldset>
                <legend>País de la unión europea</legend>
                
                <p>País: <input type="text" name="pais"></p>
                <p>Capital: <input type="text" name="capital"></p>
                <input type="submit" name="nuevosDatos" value="Añadir Datos">
                <input type="submit" name="limpiarCampos" value="Limpiar Campos">
            </fieldset>
        </form>
    </body>

</html>
