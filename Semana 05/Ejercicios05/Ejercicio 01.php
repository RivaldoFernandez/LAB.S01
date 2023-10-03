<!DOCTYPE html>
<html>

<head>
    <title>Sueldo del vendedor</title>
</head>

<body>
    <form method="post" action="">
        Importe total vendido: <br> <input type="number" name="importe"> <br>
        Cantidad de hijos en edad escolar: <br> <input type="number" name="hijos"> <br> <br>
        Resultado: <br>
        <input type="submit" name="Calular"   value="Calcular" /><br>
        <?php
        $importe = $_POST["importe"];
        $hijos = $_POST["hijos"];
        $comision = $importe * 0.075;
        $bonificacion = 50 * $hijos;
        $sueldo_bruto = 600 + $comision + $bonificacion;
        $descuento = $sueldo_bruto * 0.11;
        $sueldo_neto = $sueldo_bruto - $descuento;

        echo "<p>Comisión: S/. $comision</p>";
        echo "<p>Bonificación: S/. $bonificacion</p>";
        echo "<p>Sueldo bruto: S/. $sueldo_bruto</p>";
        echo "<p>Descuento: S/. $descuento</p>";
        echo "<p>Sueldo neto: S/. $sueldo_neto</p>";
        ?>

</body>
</html>