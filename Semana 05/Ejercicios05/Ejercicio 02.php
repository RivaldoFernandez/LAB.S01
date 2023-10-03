<!DOCTYPE html>
<html>
<head>
    <title>Compra de gaseosas</title>
</head>
<body>
    <form method="post" action="">
        Precio actual de la gaseasa: <br />
        <input type="number" name="precio" min="0" step="0.01" /> <br />
        Cantidad de unidades adquiridas: <br />
        <input type="number" name="unidades" min="1" /> <br />
        Resultado: <br>
        <input type="submit" name="Calular" value="Calcular" /><br />
        <input type="reset" name="Cancelar" value="Cancelar" /><br />

    </form>
    <?php

    $precio = $_POST["precio"];
    $unidades = $_POST["unidades"];

    $nuevo_precio = $precio * (1 - 0.05);

    $importe_compra = $nuevo_precio * $unidades;

    $importe_descuento = $importe_compra * 0.07;

    $importe_pagar = $importe_compra - $importe_descuento;

    $obsequio = 2 * $unidades;

    echo "<p>Nuevo precio de la gaseosa: $nuevo_precio</p>";
    echo "<p>Importe de la compra: $importe_compra</p>";
    echo "<p>Importe del descuento: $importe_descuento</p>";
    echo "<p>Importe a pagar: $importe_pagar</p>";
    echo "<p>Obsequio: $obsequio</p>";

    ?>
</body>
</html>