<html>
<body style = "background-color: lightblue">
        
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "productos";

  $id=$_POST['idproducto'];
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT IDproducto, Nombre, Descripcion, Precio, Proveedor FROM productos WHERE IDproducto=$id";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "REGISTRO A ELIMINAR <br><br>ID: " . $row["IDproducto"]. 
      "  <br>NOMBRE: " . $row["Nombre"]. 
      "  <br>DESCRIPCION: " . $row["Descripcion"]. 
      "  <br>PRECIO: " . $row["Precio"].     
      "  <br>PROVEEDOR: " . $row["Proveedor"].
      "<br>";
    }
  } else {
    echo "0 Resultados.";
  }

  mysqli_close($conn);
  ?>       

     
  <h4>Eliminar Registro SI / NO:</h4>  
      <?php if(isset($id)){?>
        <form action="EliminarProductos.php" method="POST">    
        <label for="matricula"> Pulsa para eliminar al Producto con ID:</label>
            <input type="submit" value="<?=$id?>" name="eliid"></input>    
        </form>  
      <?php } ?>
      <form action="PanelAdmin.html" method="POST">    
          <input type="submit" value="NO ELIMINAR">    
      </form>    
        
        
        
</body>
</html>