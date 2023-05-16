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

    $idproducto=$_POST['idproducto'];
    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];
    $precio=$_POST['precio'];
    $proveedor=$_POST['proveedor'];
   

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO productos (IDproducto, Nombre, Descripcion, Precio, Proveedor)
        VALUES('$idproducto', '$nombre', '$descripcion', '$precio', '$proveedor')";
        //use exec() because no results are returned
        $conn->exec($sql);
        echo "<br><br><br><br><br> <h2>Gasolinera Registrada existosamente !!!</h2>";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
?>

<br><br><br>    

    
    <div style="text-align:center;">
        <form action="PanelAdmin.html" method="POST">    
            <span><a href="PanelAdmin.html"></a></span>    
        </form>    
    </div>  
    
    
    
    
</body>    
</html>    