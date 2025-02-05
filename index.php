<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aeromexico</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <section>
    <h1>Venta de boletos</h1>
    <form class="formulario" action="guarar.php" method="POST">
        <label for="cliente">Cliente</label>
        <input type="text" id="cliente" name="cliente" maxleng="40" require><br>
        <label for="noBoleto">No.Boleto</label>
        <input type="text" id="noBoleto" name="noBoleto" maxleng="5" require> <br>
        <label for="destino">Destino</label>
        <input type="text" id="destino" name="destino" maxleng="40" require><br>

        <button class="submit" type="submit">Enviar</button>
    </section>
    </form>
</body>
</html>