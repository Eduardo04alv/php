<html>
    <form method="post">
      x: <input type="number" step="any" name="x">
      y: <input type="number" step="any" name="y">
      operacion: <input type="string" step="any" name="operacion">
         <input type="submit" value="Enviar">      
    </form>
</html>
<?php

    $x = $_POST["x"];
    $y = $_POST["y"];
    $operacion = $_POST["operacion"];
    if ($operacion == "suma") {
        $resultado = $x + $y;
        echo $resultado;
    } elseif ($operacion == "resta") {
        $resultado = $x - $y;
        echo $resultado;
    } elseif ($operacion == "multiplicacion") {
        $resultado = $x * $y;
        echo $resultado;
    } elseif ($operacion == "division") {
        if ($y != 0) {
            $resultado = $x / $y;
            echo $resultado;
        } else {
            echo "Error: Division por cero";
        }
    } else {
        echo "Operacion no valida";
    }
?>
