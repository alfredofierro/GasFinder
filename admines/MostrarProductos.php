<html>
<head>
  <meta charset="UTF-8">
  <title>Registros de Gasolineras</title>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="./style-mostrar.css">
  <link rel="stylesheet" href="./style-button.css">

</head>
<body style="background-image: url(backgs.png); 
            background-repeat: no-repeat;
            background-size: cover;">
<br>
  <div class="container">
  <h2>Registros de Gasolineras</h2>



    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "productos";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT IDproducto, Nombre,  Precio, Proveedor
              FROM productos";
    $result = mysqli_query($conn, $sql);







    echo "<div class=\"container\">" ;

      echo "<ul class=\"responsive-table\">";



      if (mysqli_num_rows($result) > 0) {
        // output data of each row
          echo "<li class=\"table-header\">";
              echo "<div class=\"col col-1\" >ID</div>";
              echo "<div class=\"col col-2\" >NOMBRE</div>";     
              echo "<div class=\"col col-3\" >PRECIO gasolina regular</div>";
              echo "<div class=\"col col-3\" >PRECIO gasolina premium</div>";
              echo "</li>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<li class=\"table-row\">";
            echo "<div class=\"col col-1\" data-label=\"ID\">" . $row["IDproducto"] . "</div>";
            echo "<div class=\"col col-2\" data-label=\"NOMBRE\">" . $row["Nombre"] . "</div>";
            echo "<div class=\"col col-3\" data-label=\"PRECIO\"> $" . $row["Precio"] . "</div>";
            echo "<div class=\"col col-3\" data-label=\"precio gasolina premium\"> $" . $row["Proveedor"] . "</div>";
            echo "</li>";
        }
        echo "</ul>"; 

      } else {
        echo "Sin Registros";
      }

      mysqli_close($conn);



      
     echo "</div>";  


      ?>
          




 </div>
 
 <br><br>

  <div style="text-align:center;">
    <form action="PanelAdmin.html" method="POST">    
      <span><a href="PanelAdmin.html"></a></span>    
    </form>    
  </div>

  <br><br>


</body>
</html>