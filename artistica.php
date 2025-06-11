<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>literatura</title>
</head>
<style>
    .galeria-libros {
    padding: 50px 20px;
    background-color: #f4f4f4;
    text-align: center;
}

.galeria-libros h2 {
    font-size: 28px;
    margin-bottom: 40px;
    color: #35424a;
}

.contenedor-cartas {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
}

.carta-libro {
    background-color: #fff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.carta-libro:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}

.carta-libro img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 15px;
}

.carta-libro h3 {
    font-size: 20px;
    color: #35424a;
    margin-bottom: 10px;
}

.carta-libro p {
    font-size: 16px;
    color: #555;
    margin: 5px 0;
}
.espacio {
    height: 40px;
}
#boton{
    display: flex;
    margin: 10px;
    justify-content: center;
}
button {
    background-color: #35424a;
    color: white;
    border: none;
    padding: 10px 20px;
    margin-top: 10px;
    cursor: pointer;
    border-radius: 5px;
    transition: background 0.3s ease;
}

button:hover {
    background-color: #f7c08a;
    color: #000;
}
</style>
<body>
    <section class="galeria-libros">
    <h2>Nuestros Libros Destacados</h2>
    <div class="contenedor-cartas">
        <!-- Carta 1 -->
        <div class="carta-libro">
            <img src="img/imgA1.jpg" alt="Portada Libro 1">
            <h3>El poder de las imagenes</h3>
            <p><strong>Autor:</strong> David Freedberg</p>
        </div>

        <!-- Carta 2 -->
        <div class="carta-libro">
            <img src="img/imgA2.jpg" alt="Portada Libro 2">
            <h3>Tratado de pintura</h3>
            <p><strong>Autor:</strong> Leonardo da Vinci</p>
        </div>

        <!-- Repite hasta la carta 6 -->
        <div class="carta-libro">
            <img src="img/imgA3.jpg" alt="Portada Libro 3">
            <h3>Emocionarte: La doble vida de los cuadros</h3>
            <p><strong>Autor:</strong> Carlos del Amor</p>
        </div>
        <div class="espacio"></div>
    <div id="boton">
    <button onclick="window.location.href='compra.php';">COMPRA</button>
    </div>
    <style>
    button {
        display: flex;
    background-color: #35424a;
    color: white;
    border: none;
    padding: 10px 20px;
    margin-top: 10px;
    cursor: pointer;
    border-radius: 5px;
    transition: background 0.3s ease;
    margin: 20px;
    margin-bottom: 10px;
}

button:hover {
    background-color: #f7c08a;
    color: #000;
}
</style>
    <a href="index.php"><button>VOLVER</button></a>
</body>
</html>