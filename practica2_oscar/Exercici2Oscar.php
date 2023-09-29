<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P2 Exercici 2 Oscar</title>
</head>
<body>
    <div>
        <?php 
            // Creación de los dos arrays (plantas y habitaciones)
            $plantas = array(5);
            $habitaciones = array(10);

            // Primer bucle que recorre las plantas
            for ($i=1; $i<=5; $i++) {

                //Segundo bucle que recorre las habitaciones
                for ($j=1; $j<=10; $j++) {
                     $habitaciones[$j] = rand(0,5); // Añadimos los clientes en las habitaciones   
                }
                $plantas[$i] = $habitaciones; // Añadimos a las plantas el array de habitaciones con los clientes añadidos anteriormente
            }
        ?>
        <form>
            <ul>
            <!-- Primer bucle que recorre las plantas -->
                <?php for ($i=1; $i<=5; $i++) { 
                    //Segundo bucle que recorre las habitaciones
                    for ($j=1; $j<=10; $j++) {?>
                <li>
                    <?php
                        // Condicionales que muestran un mensaje dependiendo del número de clientes de la habitación
                        if ($plantas[$i][$j] == 0) {
                            echo "A la habitació ".$j." de la planta ".$i." està buida";
                        } elseif ($plantas[$i][$j] == 5) {
                            echo "A la habitació ".$j." de la planta ".$i." està plena";
                        } else {
                            echo "A la habitació ".$j." de la planta ".$i." té ".$plantas[$i][$j]." persones";
                        } 
                    ?>
                </li>
                <?php }
                }?>
            </ul>
        </form>
    </div>
</body>
</html>