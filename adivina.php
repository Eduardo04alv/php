<html>
     <form method="post">
   <h2>adivina el numero</h2>
    x: <input type="number" step="any" name="x">
    <input type="submit" value="Enviar">
     </form>
</html>
<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = $_POST["x"];
        $numero = rand(1, 5);
        if ($x == $numero)  {
        echo "<h2>Wow, adivinaste el numero</h2>";
    } else {
        echo "<h2>¡Sigue intentando!, el numero correcto es: </h2>" . $numero;
    }
}
?>
