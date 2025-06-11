<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO DE LIBROS</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f7fa;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .registro {
            max-width: 600px;
            margin: 40px auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        h3 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }

        .text {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-bottom: 20px;
        }

        label {
            font-weight: 600;
        }

        input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus {
            border-color: #3498db;
            outline: none;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 20px auto;
            max-width: 600px;
        }

        ul li {
            background: #ecf0f1;
            margin-bottom: 10px;
            padding: 12px 15px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        ul li a {
            color: #e74c3c;
            text-decoration: none;
            font-weight: bold;
        }

        ul li a:hover {
            text-decoration: underline;
        }

        p {
            text-align: center;
            font-style: italic;
            color: #999;
        }
    </style>
</head>
<body>
    
    <audio autoplay loop hidden> <source src="Refreshing Elevator music-yt.savetube.me.mp3" type="audio/mpeg"> </audio>

    <div class="registro">
        <h3>AGREGAR LIBRO</h3>
        <form action="accionesRegistro.php" method="POST">
            <div class="text">
                <label>Nombre del libro</label>
                <input type="text" name="titulo" required>

                <label>Nombre del autor</label>
                <input type="text" name="autor" required>

                <label>Categoria</label>
                <input type="text" name="categoria" required>

                <input type="submit" name="accion" value="AGREGAR">
            </div>
        </form>

        <h3>BUSCAR LIBRO</h3>
        <form action="accionesRegistro.php" method="GET">
            <div class="text">
                <input type="text" name="buscar" placeholder="Buscar por título">
                <input type="submit" value="BUSCAR">
            </div>
        </form>
    </div>

    <div class="registro">
        <h3>LISTA DE LIBROS</h3>  
        <?php
        $libros = json_decode(file_get_contents("libros.json"), true);
        if(count($libros)==0){
            echo "<p>No hay libros registrados</p>";
        }
        else{
            echo "<ul>";
            foreach($libros as $registro => $libro){
                echo "<li>{$libro['titulo']} - {$libro['autor']} - ({$libro['categoria']})
                <a href='accionesRegistro.php?eliminar={$registro}'>Eliminar</a></li>";
            }
            echo "</ul>";
        }
        ?>
    </div>
<style>
    button {
    background-color: #35424a;
    color: white;
    border: none;
    padding: 10px 20px;
    margin-top: 10px;
    cursor: pointer;
    border-radius: 5px;
    transition: background 0.3s ease;
    margin: 20px;
}

button:hover {
    background-color: #f7c08a;
    color: #000;
}
</style>
    <a href="index.php"><button>VOLVER</button></a>
</body>
</html>
