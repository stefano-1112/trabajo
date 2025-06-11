const precios = {
  "Don Quijote": 150,
  "Odisea": 130,
  "En busca de sentido": 180,
  "El monje que vendió su Ferrari": 160,
  "Tratado de pintura": 140,
  "El poder de las imágenes": 170,
  "Semana laboral de 4hrs": 200,
  "Romeo y Julieta": 120,
  "La doble vida de los cuadros": 190
};

function registrarCompra() {
  const nombre = document.getElementById("nombre").value.trim();
  const correo = document.getElementById("correo").value.trim();
  const librosSeleccionados = document.querySelectorAll('input[name="libro"]:checked');
  const resumen = document.getElementById("resumen");

  // Limpiar errores
  document.getElementById("errorNombre").textContent = "";
  document.getElementById("errorCorreo").textContent = "";
  resumen.style.display = "none";
  resumen.innerHTML = "";

  let validado = true;

  if (nombre === "") {
    document.getElementById("errorNombre").textContent = "Por favor ingresa tu nombre.";
    validado = false;
  }

  if (correo === "" || !correo.includes("@")) {
    document.getElementById("errorCorreo").textContent = "Ingresa un correo válido.";
    validado = false;
  }

  if (librosSeleccionados.length === 0) {
    alert("Debes seleccionar al menos un libro.");
    validado = false;
  }

  if (!validado) return;

  let total = 0;
  let listaLibros = [];

  librosSeleccionados.forEach((libro) => {
    listaLibros.push(libro.value + " ($" + precios[libro.value] + ")");
    total += precios[libro.value];
  });

  resumen.innerHTML = `
    <h3>Resumen de Compra</h3>
    <p><strong>Cliente:</strong> ${nombre}</p>
    <p><strong>Correo:</strong> ${correo}</p>
    <p><strong>Libros seleccionados:</strong></p>
    <ul>
      ${listaLibros.map(libro => `<li>${libro}</li>`).join('')}
    </ul>
    <p><strong>Total a pagar:</strong> $${total} MXN</p>
  `;
  resumen.style.display = "block";
}
