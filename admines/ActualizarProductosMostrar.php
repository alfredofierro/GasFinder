<html>
  <body style="background-image: url(g.png); 
              background-repeat: no-repeat;
              background-size: cover;">
          
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "productos";

    $idproducto = $_POST['idproducto'];

    $id=$_POST['idproducto'];
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "UPDATE productos SET IDproducto=$id";
    $sql = "SELECT IDproducto, Nombre, Descripcion, Precio, Proveedor FROM productos WHERE IDproducto=$id";
    $result = mysqli_query($conn, $sql);


    $nombre;
    $descripcion;
    $precio;
    $proveedor;


    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
      
      
        
        $nombre = $row["Nombre"];
        $descripcion = $row["Descripcion"];
        $precio = $row["Precio"];
        $proveedor = $row["Proveedor"];


      }
    } else {
      echo "0 Resultados.";
    }

    mysqli_close($conn);
    ?>       

    <form action="ActualizarProductos.php" method="POST">
      <div class="form">
        <link rel="stylesheet" href="./style-form.css">    
        <div class="title">Actualizar GASOLINERA</div>
        <div class="subtitle">Complete el formulario.</div>

        <div class="input-container ic2">
          <input id="anombre" name="anombre" class="input" type="text" placeholder=" " value="<?=$nombre?>" />
          <div class="cut"></div>
          <label for="Descripcion" class="placeholder">NOMBRE DE LA GASOLINERA</label>
        </div>
        <div class="input-container ic2">
          <input id="adescripcion" name="adescripcion" class="input" type="text" placeholder=" " value="<?=$descripcion?>"/>
          <div class="cut"></div>
          <label for="Descripcion" class="placeholder">UBICACION</label>
        </div>
        <div class="input-container ic2">
          <input id="aprecio" name="aprecio"  class="input" type="text" placeholder=" " value="<?=$precio?>"/>
          <div class="cut cut-short"></div>
          <label for="Precio" class="placeholder">PRECIO GASOLINA REGULAR</>
        </div>
        <div class="input-container ic2">
          <input id="aproveedor" name="aproveedor" class="input" type="text" placeholder=" " value="<?=$proveedor?>"/>
          <div class="cut"></div>
          <label for="Proveedor" class="placeholder">PRECIO GASOLINA PREMIUM</label>
        </div>
        <br>
        
          
          <div style="text-align:center;">
          <form action="ActualizarProductos.php" method="POST">
            <button type="text" class="submit" value="<?=$idproducto?>" id="aidproducto" name="aidproducto">Actualizar</button>
          </form>

          <form action="PanelAdmin.html" method="POST">
            <button type="text" class="submit">No Actualizar</button>
          </form>
          </div>
      </div>
    </form>
  </body>
</html>