<form method="post">
  Nombre: <input type="text" name="nombre">

  apellido: <input type="text" name="apellido"><br><br>
 
  edad <input type="text" name="edad">
  
  universidad <input type="text" name="universidad"><br><br>
  
  carrera <input type="text" name="carrera"><br><br>
  <input type="submit" value="Enviar">
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $edad = $_POST["edad"];
    $universidad = $_POST["universidad"];
    $carrera = $_POST["carrera"];
    echo "<h2>Hola $nombre $apellido</h2>";
    echo "<h2>Tu edad es $edad</h2>";
    echo "<h2>Tu universidad es $universidad</h2>";
    echo "<h2>Tu carrera es $carrera</h2>";
    if ($edad <= 18) {
        echo "Eres menor de edad";
    } else {
        echo "Eres mayor de edad";

    }
}
?>
