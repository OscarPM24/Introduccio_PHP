<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica comensals Nora</title>
</head>

<!-- Es crea 10 taules que tenen de 0 a 5 comensals. -->
<body>
    <h1> Nombre de comensals per taula </h1>
    <h2> Si es refresca la pantalla, surt un número de comensals diferents</h2>

    <?php> 
        $taules = array();
        for ($i = 0; $i<=9; $i++) {  // for per emplenar l'array de forma clau valor
            $taules = array_push(i => rand(0,5)); // posiblement erroni. 
        }
    ?>
    <div>
        <?php> for ($i = 0; i<=9; i++) { ?> <!-- Loop per mostrar la informació per pantalla. -->
        <ul>
        <li> <?php> // condicionals segons les persones que hi ha a la taula 
                    if ($i[$j] == 0) {
                        echo (" La taula " .$i. " està buida");
                    } elseif ($i[$j] == 5) {
                        echo(" La taula " .$i. " està buida");
                    } else {
                        echo (" La taula " .$i. " té ". $i . " persones ");
                    }
            ?> </li>
        </ul>
        <?php } ?>
    </div>

</body>
</html> 