<html>
<link rel="stylesheet" href="./style-button.css">
<link rel="stylesheet" href="./style-mostrar.css">
<body style="background-image: url(g.png); 
            background-repeat: no-repeat;
            background-size: cover;">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "productos";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$id= $_POST['aidproducto'];
$nombre= $_POST['anombre'];
$descripcion= $_POST['adescripcion'];
$precio= $_POST['aprecio'];
$proveedor= $_POST['aproveedor'];

if (!$conn) {
  die("Conexion fallida: " . mysqli_connect_error());
}

$sql = "UPDATE productos SET Nombre= '$nombre', descripcion= '$descripcion', Precio= '$precio', proveedor= '$proveedor' WHERE IDproducto= $id";

if (mysqli_query($conn, $sql)) {
  echo "<br><br><br><br><br> <h2>Informacion Actualizada existosamente !!!</h2>";
} else {
  echo "<br><br><br><br><br> <h2>Error al Actualizar Informacion !!!</h2>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

  <br><br><br>    

    
  <div style="text-align:center;">
    <form action="PanelAdmin.html" method="POST">    
      <span><a href="PanelAdmin.html"></a></span>    
    </form>    
  </div> 

</body>
</html>