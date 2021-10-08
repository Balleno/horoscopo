<html>
<head>
    <title>RULETA HOROSCOPO</title>
    <meta charset="utf-8">
</head>
<body>
    <table border="1">
        <tr>
            <th>Signo</th>
            <th>Amor</th>
            <th>Economía</th>
            <th>Salud</th>
        </tr>
    <?php
    define("MES", 12);
    define("param", 3);

    $signos = array("Aries", "Tauro", "Geminis", "Cáncer", "Leo", "Virgo", "Libra", "Escorpio", "Sagitario", "Capricornio", "Acuario", "Piscis");

    for ($i = 0; $i <  MES; $i++) {
        for ($j = 1; $j <=  param; $j++) {
            $secundario[$j] = rand(0,9);
        }
        $principal[$i] = $secundario;
    }

    foreach ($principal as $clavep => $valorp) {
        echo "<tr><td><strong>$signos[$clavep]</strong></td>";
        foreach ($valorp as $claves => $valors) {
            if ($valors >= 9) {
                echo "<td bgcolor=yellow>Excelente</td>";
            } elseif ($valors >= 4) {
                echo "<td bgcolor=lightgreen>Bueno</td>";
            } elseif ($valors >= 1) {
                echo "<td bgcolor=pink>Mediocre</td>";
            } else {
                echo "<td bgcolor=red>Terrible</td>";
            }
        }

        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>