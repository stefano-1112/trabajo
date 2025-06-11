<?php
$archivo='libros.json';
$libros = json_decode(file_get_contents($archivo), true);

//AGREGAR LIBRO
if($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['accion'] === 'AGREGAR'){
    $nuevo = [
        'titulo' => $_POST['titulo'],
        'autor' => $_POST['autor'],
        'categoria' => $_POST['categoria']
    ];
    $libros[] = $nuevo;
    file_put_contents($archivo, json_encode($libros, JSON_PRETTY_PRINT));
    header("Location: registro.php");
    exit;
}

//BUSCAR LIBRO
if(isset($_GET['buscar'])) {
    $busqueda = strtolower($_GET['buscar']);
    $resultados = array_filter($libros, function($libro) use ($busqueda){
        return strpos(strtolower($libro['titulo']), $busqueda) !== false ||
        strpos(strtolower($libro['autor']), $busqueda) !== false;
    });

    echo "<h1>Resultados de busqueda</h1>";
    if(count($resultados) > 0) {
        echo "<ul>";
        foreach($resultados as $libro) {
            echo "<li>{$libro['titulo']} - {$libro['autor']} - ({$libro['categoria']})</li>";
        }
        "</ul>";
    } else {
        echo "<p>No se encontraron resultados</p>";
    }
    echo "<a href='registro.php'> Volver </a>";
    exit;
}

//ELIMINAR LIBROS
if(isset($_GET['eliminar'])){
    $indice = intval($_GET['eliminar']);
    if(isset($libros[$indice])){
        unset($libros[$indice]);
        $libros=array_values($libros);
        file_put_contents($archivo, json_encode($libros, JSON_PRETTY_PRINT));
    }
    header("Location: registro.php");
    exit;
}
?>