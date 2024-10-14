<html>
    <head>
        <title>Ejercicio 2</title>
    </head>
    <body>

        <h1>Ejercicio 2</h1>
        <form method="POST" action="">
        <label for="numero">NUMERO:</label>
        <input type="number" id="numero" name="numero" min="0" step="0">

        <input type="submit" value="APLICAR FORMULA">
        </form>

        <?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];   
            echo "<p>El numero es: $numero</p>";
        }
    
    
    ?>

    </body>
</html>