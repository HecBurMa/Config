<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/respuesta.css">
</head>



<body>
    <div class="page">

        <table>
            <tr>
                <td>
                    <?php
                    print "<h3>La caja elegida es:</h3>";

                    $caja = $_GET['caja'];
                    print "<img src=\"./imagenes/$caja.jpg\" alt=\"\">"; ?>
                </td>
                <td>
                    <?php
                    print "<h3>La grafica elegida es:</h3>";

                    $grafica = $_GET['grafica'];
                    print "<img src=\"./imagenes/$grafica.jpg\" alt=\"\">"; ?>
                </td>
                <td>
                    <?php
                    print "<h3>El CPU elegido es:</h3>";

                    $cpu = $_GET['cpu'];
                    print "<img src=\"./imagenes/$cpu.jpg\" alt=\"\">";
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    print "<h3>La placa elegida es:</h3>";

                    $placa = $_GET['placa'];
                    print "<img src=\"./imagenes/$placa.jpg\" alt=\"\">";
                    ?>
                </td>
                <td>
                    <?php $ram = $_GET['ram'];
        print " <h3>Tu pc llevara una configuración de ram de: $ram </h3> "; ?>
                </td>
                <td>
                    <?php for ($i = 1; $i <= 5; $i++) {

            if ($i <= $_GET['stars']) {
                print "<img src=\"./imagenes/stars.jpg\" alt=\"s\" width=\"50\">";
            } else {
                print "<img src=\"./imagenes/staroff.jpg\" alt=\"s\" width=\"50\">";
            }
        }
        ?>
                </td>
            </tr>
        </table>

        <footer>
        <p>Esta pagina ha sido creada por Hector Burgos Marti. Entornos de Desarollos</p>
        </footer>


    </div>
</body>

</html>