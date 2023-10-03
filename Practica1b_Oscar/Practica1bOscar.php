<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 1b</title>
</head>
<body>
    <?php /* Creación del array asociativo $persona, que contiene una clave que identifica
             el tipo de dato de la persona, y el valor del dato */
        $persona = [
            'nomAlumne'=>'Oscar',
            'cognomAlumne'=>'Perez',
            'edat'=>'18',        
            'telefon'=>'666061063',
            'adress'=>'Carrer de Mar, 39',
            'email'=>'2023_oscar.perez@iticbcn.cat',
            'treballa'=>'No',
            'altura'=>'180'
        ];
        $dataNaixement = new DateTime(); // Variable para la fecha de nacimiento con formato DateTime
        $dataNaixement->setDate(2004, 11, 24); // Asignamos una fecha a la variable
        $persona['dataNaixement'] = $dataNaixement->format('Y-m-d'); // Añadimos la fecha en el array persona
    ?>
    <form> <!-- Formulario donde se muestran por pantalla los datos de la persona -->
        <div>
            <h1>Descrivint a <?php echo $persona['nomAlumne']." ".$persona['cognomAlumne']?></h1>
        </div>
        <div>
            <h2>Les dades de <?php echo $persona['nomAlumne']?> son:</h2>
        </div>
        <div>
            <ul>
                <?php for ($i=0; $i<1; $i++) {?>
                    <li>Es diu: <?php echo $persona['nomAlumne']?></li>
                    <li>Te <?php echo $persona['edat']?> anys</li>
                    <li>Va neixer l'any: <?php echo $persona['dataNaixement']?></li>
                    <li>El seu telèfon és: <?php echo $persona['telefon']?></li>
                    <li>Viu a: <?php echo $persona['adress']?></li>
                    <li>El seu email és: <?php echo $persona['email']?></li>
                    <li>Treballa: <?php echo $persona['treballa']?></li>
                    <li>I medeix <?php echo $persona['altura']?></li>
                <?php }?>
            </ul>
        </div>

    </form>
</body>
</html>