<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P2 Exercici 1 Oscar</title>
</head>
<body>
    <div>
        <?php 
        // Creación del array de las mesas
        $mesas = array(10);

        // Bucle para añadir los comensales en las mesas
        for ($i=1; $i<=10; $i++) {
            $mesas[$i] = rand(0,5); // Añadimos un número aleatorio entre 0 y 5 en las posiciones del array
        }?>
        <form>
            <ul>
                <?php for ($i=1;$i<=10;$i++) { ?> <!-- Bucle for para mostrar los datos de cada mesa -->
                <li><?php
                    if ($mesas[$i] == 0) { // Si la mesa tiene 0 comensales 
                        echo "La taula ".$i." està buida";
                    } elseif ($mesas[$i] == 5) { // Si la mesa tiene 5 comensales
                        echo "La taula ".$i." està plena";
                    } else { // Si la mesa no tiene ni 0 ni 5 comensales 
                        echo "La taula ".$i." té ".$mesas[$i]." comensals";
                    }
                    ?></li>
                <?php }?>
            </ul>
        </form>
    </div>
</body>
</html>