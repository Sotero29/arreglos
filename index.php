<?php
    echo '<h1>Arreglos</h1>'; //Armenta Garcia Sotero 4A

    $year = array(5, 87, 6, 8);
    echo "El arreglo tiene: " . count($year) . " edades";
    echo '<br>';
    echo "El arreglo contiene: ";
    echo '<br>';
    
    foreach ($year as $key => $value) {
        echo "$key: $value";
        echo '<br>';
    }

    echo "<h3>Ordenacion de edades de menor a mayor</h3>";
    asort($year);
    var_dump($year);
    echo "<h3>Ordenacion de edades de mayor a menor</h3>";
    rsort($year);
    var_dump($year);;

    echo "<h3>Busqueda de un valor en un arreglo</h3>";

    echo '<form action="" method="get">';
    echo '<input type="text" placeholder="Busca una edad" name="year">';
    echo '<br>';
    echo '<br>';
    echo '<input type="submit" value="Buscar">';
    echo '</form>';

    $obtain = isset($_GET['year']) ? $_GET['year'] : '';

    if ($obtain !== '') {
        if (in_array((int)$obtain, $year)) {
            echo "La edad $obtain sí existe en el arreglo.";
        } else {
            echo "La edad $obtain no existe en el arreglo.";
        }
    }
?>
