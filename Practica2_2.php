<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica hotel Nora</title>
</head>
<body>
<h1> Nombre de clients per habitació per planta </h1>
    <h2> Si es refresca la pantalla, surt un número de clients diferent</h2>

    <?php> 
        $planta = array();
        $habitacio = array();
        for ($i = 0; $i<=4; $i++) {  // for que recorre les plantes
            for($j = 0; $j<=9; j++) { // for que recorre les habitacions
                $habitacio[$j] =  rand(0,5);
                $planta[$i] = $habitacio; // està mal creo, s'ha d'arreglar
            } // s'ha afegit primer les persones a les habitacions i despres les habitacions a les plantes
        }
    ?>
    <div>
        <?php> 
            for($j = 0; $j<=9; j++) {
                for ($i = 0; $i<=4; $i++) {

        ?> <!-- Loop per mostrar la informació per pantalla. -->
        <ul>
           <li> <?php> // condicionals segons les persones que hi ha a l'habitació 
                    if ($i[$j] == 0) {
                        echo (" A l'habitació ". $j . "de la planta " .$i ." està buida");
                    } elseif ($i[$j] == 5) {
                        echo(" A l'habitació ". $j . "de la planta " .$i ." està plena"));
                    } else {
                        echo (" A l'habitació ". $j . "de la planta " .$i . " té ". $i[$j] . " persones ");
                    }
            ?> </li>
        </ul>
        <?php }} ?>
    </div>
</body>
</html>