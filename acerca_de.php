<html>
<html>

    <h2>Mi información</h2>
    <form method="post">
        Nombre: <input type="text" name="nombre"><br><br>
        Apellido: <input type="text" name="apellido"><br><br>
        Foto (URL): <input type="text" name="foto"><br><br>
        WhatsApp: <input type="text" name="whatsapp"><br><br>
        Telegram: <input type="text" name="telegram"><br><br>
        youtube <input type="text" name="youtube"><br><br>
        <input type="submit" value="Enviar">        
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $foto = $_POST["foto"];
        $telegram = $_POST["telegram"];
        $whatsapp = $_POST["whatsapp"];
        $youtube = $_POST["youtube"];

        echo "<p><strong>Mi nombre es:</strong> $nombre $apellido</p>";
        echo "<img src='$foto' alt='Foto' width='150' height='150'><br><br>";
        echo "<p><strong>Mis contactos son:</strong></p>";
        echo "<a href='https://wa.me/$whatsapp' target='_blank'>Chatear por WhatsApp</a><br>";
        echo "<a href='https://t.me/$telegram' target='_blank'>Chatear por Telegram</a><br>";
        echo "<a href='https://t.me/$youtube' target='_blank'>Video recomendado youtube</a><br>";
    }
    ?>

</html>
