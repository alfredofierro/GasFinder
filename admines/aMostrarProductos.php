<html>
<head>
  <title>TODOS LOS PRODUCTOS</title>


<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  background-color: tomato;
  color: white;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
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

$sql = "SELECT IDproducto, Nombre,  Precio
          FROM productos";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
    echo "<table border='0'>";
        echo "<th>ID</th>";
        echo "<th>NOMBRE</th>";     
        echo "<th>PRECIO</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row["IDproducto"] . "</td>";
      echo "<td>" . $row["Nombre"] . "</td>";
      echo "<td>" . $row["Precio"] . "</td>";
      echo "</tr>";
  }
    echo "</table>";
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
    
<br><br><br>    

    
    <form action="index.html" method="POST">    
        <input type="submit" value="REGRESAR A PRINCIPAL">    
    </form>    
</body>
</html>