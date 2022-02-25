<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <div class="page">
        <h1 class="conf">Configurador de PC</h1>
        <form action="./respuesta.php" method="get">
            <label for="caja">
                <h3>Elige caja:</h3>
            </label>
            <br>
            <select name="caja" id="caja" required>
                <option value="ns/nc">Seleccione una caja</option>
                <option value="tempest">Tempest ATX CASE RGB</option>
                <option value="corsair">Corsair iCUE 220T RGB</option>
                <option value="msi">MSI MAG Forge 100R</option>
                <option value="nox">Nox Hammer MC Pro ARGB</option>
            </select>

            <label for="grafica">
                <h3>Elige tarjeta grafica:</h3>
            </label>
            <br>
            <select name="grafica" id="grafica" required>
                <option value="ns/nc">Seleccione una grafica</option>
                <option value="3050">Asus Dual GeForce RTX 3050 OC</option>
                <option value="3060">Zotac Gaming GeForce RTX 3060 Ti</option>
                <option value="3070">MSI GeForce RTX 3070 Ti</option>
                <option value="3080">MSI GeForce RTX 3080 Ti</option>
            </select>

            <label for="cpu">
                <h3>Elige una CPU:</h3>
            </label>
            <br>
            <select name="cpu" id="cpu" required>
                <option value="ns/nc">Seleccione un CPU</option>
                <option value="ryzen7">AMD Ryzen 7 5800X 3.8GHz</option>
                <option value="ryzen5">AMD Ryzen 5 5600X 3.7GHz</option>
                <option value="intel7">Intel Core i7-12700K 5.0 GHz</option>
                <option value="intel5">Intel Core i5-12600K 4.9 GHz</option>
            </select>

            <label for="placa">
                <h3>Elige placa base:</h3>
            </label>
            <br>
            <select name="placa" id="placa" required>
                <option value="ns/nc">Seleccione placa base</option>
                <option value="msi570">MSI MPG X570S EDGE MAX (AMD)</option>
                <option value="msi550">MSI MPG B550 GAMING PLUS (AMD)</option>
                <option value="asusprime">Asus PRIME Z690-P D4 (Intel)</option>
                <option value="asuspro">MSI PRO Z690-A DDR4 (Intel)</option>
            </select>

            <h2 class="ramh">Cuanta memoria RAM necesitas:</h2>
            <div class="radio">
                <input type="radio" name="ram" id="ram" value="8GB"> 8GB
                <br>
                <input type="radio" name="ram" id="ram" value="16GB"> 16GB
                <br>
                <input type="radio" name="ram" id="ram" value="32GB"> 32GB

                <h2 class="sug">Puedes hacer cualquier tipo de sugerencia:</h2>

                <div class="sugerencias">
                    <textarea name="" id="" cols="40" rows="5"></textarea>

                </div>

                <div class="valoracion" >
                    <label for="stars" class="valo" required>Califica la personalización con estrellas(0-5):</label>
                    
                    <input type="number" name="stars" id="stars" min="0" max="5">
                </div>
<div ></div>
                <input type="submit" value="Enviar" class="boto">
                <input type="reset" value="Borrar" class="boto">

            </div>
        </form>

        <footer>
            <p>Esta pagina ha sido creada por Hector Burgos Marti. Entornos de Desarollos</p>
        </footer>




    </div>
</body>

</html>