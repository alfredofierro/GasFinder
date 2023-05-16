<html>
    <body>
    <?php

    //Declaración de variables de campos HTML
    $usuario = $_POST["usuario"];
    $contra = $_POST["contra"];

    //Declarar variables de base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gasfinder";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    //Se declaran los campos con los datos que se guardarán
    $query = mysqli_query($conn, "SELECT * FROM adminti WHERE usuario = '$usuario' AND contra = '$contra'");
    $nr = mysqli_num_rows($query);


    if($nr == 1)
    {
        header("Location: http://localhost/pati/menuintermedio.html");
    }
    else if($nr == 0)
    { echo "El usuario no existe"; }

    //Se cierra la base de datos
    mysqli_close($conn);

    ?>

    <!--Este form redirecciona al inicio de la página-->
    <form action="loginadmin.html" method="post">
        <input type="submit" value="Ir al Inicio">
    </form>
    </body>
</html>