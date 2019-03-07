<?php
  //Estableser conexion

  $cnx = new PDO ("sqlite:midb.db");
  
  //Guardar el resultado de la query

  $resultados = $cnx->query('SELECT * FROM person WHERE nombre LIKE "'.$_GET[nombre] . '%" ');

  //iteramos en la variable resultado y le cambiamos 

  foreach ($resultados as $row) { 
     
  //Mostrar las filas 

     echo $row[0] . ' * ' . $row[1] . ' * ' . $row[2] .  ' * ' . $row[3] . ' * ' . $row[4] . ' * ' . $row[5] . '<br>';
   } 
?>