<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Actualizar GASOLINERA</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Josefin+Slab:100'><link rel="stylesheet" href="./style-fondo.css">
</head>

<body>



<?php  
//CONECTAMOS CON LA BBDD


$conexion = new mysqli("localhost", "root", "", "productos");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}

$sql="SELECT IDproducto,Nombre,Descripcion,Precio,Proveedor from productos";
$result = $conexion->query($sql);

if ($result->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
{
    $combobit="";
    $idp="";
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
    {
      $combobit .='<option value="'.$row['IDproducto'].'"> '.$row['IDproducto'].' - '.$row['Nombre'].' </option>';
        $idp .= "{$row['IDproducto']}";
    }
}
else
{
    echo "No hubo resultados";
}

?>  










<!-- partial:index.partial.html -->
<div class="container"><img class="background" src="f.png"/>
  <p class="message">Sección: Actualizar<br>Development Mexican Software</p>
</div>

<form action="ActualizarProductosMostrar.php" method="POST">
<div class="form">
    <form action="index.html" method="POST">
  <link rel="stylesheet" href="./stylem.css">    
  <div class="title">Actualizar Gasolinera</div>
  <div class="subtitle">Mediante ID.</div>
  
  <br><br>
  
  <div class="sselect">

  <link rel="stylesheet" href="./style-select.css">
    <select id="idproducto" name="idproducto" class="classic" type="text">
      <div class="cut">
        <?php echo $combobit; ?>
      </div>
      
    </select>
  </div>




  <form action="ActualizarProductosMostrar.php" method="POST">
    <button type="text" class="submit">Actualizar</button>
  </form>
</form>

  <form action="PanelAdmin.html" method="POST">
    <button type="text" class="submit">Regresar</button>
  </form>


</body>
</html>