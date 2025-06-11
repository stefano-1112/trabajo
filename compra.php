<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Registro de Compra de Libros</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<style>
/* Fuente moderna desde Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');

body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(135deg, #f8f9fa, #e0e0e0);
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: flex-start;
  min-height: 100vh;
}

.registro-container {
  background-color: #ffffff;
  max-width: 700px;
  width: 90%;
  margin: 60px auto;
  padding: 40px 30px;
  border-radius: 15px;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
  transition: 0.3s ease-in-out;
}

.registro-container:hover {
  transform: translateY(-3px);
  box-shadow: 0 20px 45px rgba(0, 0, 0, 0.15);
}

h2 {
  text-align: center;
  color: #222;
  margin-bottom: 35px;
  font-size: 28px;
}

.form-group {
  margin-bottom: 25px;
}

label {
  display: block;
  font-weight: 500;
  margin-bottom: 8px;
  color: #333;
}

input[type="text"],
input[type="email"] {
  width: 100%;
  padding: 12px;
  border: 2px solid #ccc;
  border-radius: 8px;
  font-size: 15px;
  transition: border-color 0.3s;
}

input:focus {
  border-color: #35424a;
  outline: none;
}

.libros-lista label {
  font-weight: 400;
  margin-bottom: 12px;
  display: flex;
  align-items: center;
  gap: 8px;
  color: #444;
}

.libros-lista input[type="checkbox"] {
  accent-color: #35424a;
}

.boton-registrar {
  background-color: #35424a;
  color: #fff;
  padding: 14px 22px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  font-size: 17px;
  width: 100%;
  transition: all 0.3s ease;
}

.boton-registrar:hover {
  background-color: #f7c08a;
  color: #222;
  transform: scale(1.03);
}

.resumen {
  margin-top: 35px;
  background: #f0fff0;
  border-left: 5px solid #4caf50;
  padding: 20px 25px;
  border-radius: 12px;
  display: none;
  animation: fadeIn 0.5s ease-in-out;
}

.resumen h3 {
  margin-top: 0;
  font-size: 22px;
  color: #2e7d32;
}

.resumen ul {
  padding-left: 18px;
}

.resumen li {
  margin-bottom: 6px;
}

.error {
  color: crimson;
  font-size: 14px;
  margin-top: 5px;
  font-style: italic;
}

@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style>
<body>
  <div class="registro-container">
    <h2>Registro de Compra</h2>

    <div class="form-group">
      <label for="nombre">Nombre completo:</label>
      <input type="text" id="nombre" />
      <div class="error" id="errorNombre"></div>
    </div>

    <div class="form-group">
      <label for="correo">Correo electrónico:</label>
      <input type="email" id="correo" />
      <div class="error" id="errorCorreo"></div>
    </div>

    <div class="form-group libros-lista">
      <label>Selecciona tus libros:</label>
      <label><input type="checkbox" name="libro" value="Don Quijote"> Don Quijote ($150)</label>
      <label><input type="checkbox" name="libro" value="Odisea"> Odisea ($130)</label>
      <label><input type="checkbox" name="libro" value="En busca de sentido"> En busca de sentido ($180)</label>
      <label><input type="checkbox" name="libro" value="El monje que vendió su Ferrari"> El monje que vendió su Ferrari ($160)</label>
      <label><input type="checkbox" name="libro" value="Tratado de pintura"> Tratado de pintura ($140)</label>
      <label><input type="checkbox" name="libro" value="El poder de las imágenes"> El poder de las imágenes ($170)</label>
      <label><input type="checkbox" name="libro" value="Semana laboral de 4hrs"> Semana laboral de 4hrs ($200)</label>
      <label><input type="checkbox" name="libro" value="Romeo y Julieta"> Romeo y Julieta ($120)</label>
      <label><input type="checkbox" name="libro" value="La doble vida de los cuadros"> La doble vida de los cuadros ($190)</label>
    </div>

    <button class="boton-registrar" onclick="registrarCompra()">Registrar Compra</button>

    <div class="resumen" id="resumen"></div>
  </div>

  <!-- Importar el JS -->
  <script src="codigo.js"></script>

<style>
    button {
    background-color: #35424a;
    color: white;
    border: none;
    padding: 10px 20px;
    margin-top: 20px;
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
