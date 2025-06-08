<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Bienvenido a Automarket</title>
 <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
 <style>
  /* Estilos CSS (idealmente en un archivo style.css separado) */
  :root {
   --primary-color: #D90429; /* Rojo Automarket */
   --secondary-color: #2c3e50; /* Gris oscuro para texto general */
   --logo-blue-color: #004080; /* Azul para el logo */
   --light-gray-color: #f4f4f4;
   --white-color: #ffffff;
   --border-color: #dddddd;
   --shadow-color: rgba(0, 0, 0, 0.1);
  }

  body, html {
   margin: 0;
   padding: 0;
   font-family: 'Montserrat', sans-serif; /* Fuente principal */
   background-color: var(--white-color);
   color: var(--secondary-color);
   line-height: 1.6;
   display: flex;
   flex-direction: column;
   align-items: center;
   justify-content: center;
   min-height: 100vh;
   text-align: center;
   padding: 20px; /* Espaciado general */
   box-sizing: border-box;
  }

  .container {
   max-width: 900px; /* Ancho máximo del contenido */
   width: 100%;
   background-color: var(--white-color);
   padding: 30px 20px;
   border-radius: 12px; /* Bordes más redondeados */
   box-shadow: 0 6px 25px var(--shadow-color); /* Sombra más pronunciada */
  }

  .header {
   margin-bottom: 40px;
  }

  .logo-text {
   font-size: 3.2em; /* Tamaño del texto del logo */
   font-weight: 900; /* Muy grueso, como en los logos */
   margin: 0;
   letter-spacing: 1px;
   text-transform: uppercase; /* Mayúsculas */
  }

  .logo-text .logo-first-letter {
   color: var(--primary-color); /* Color rojo para la primera letra */
  }

  .logo-text .logo-rest {
   color: var(--logo-blue-color); /* Color azul para el resto del logo */
  }

  .tagline {
   font-size: 1.1em; /* Tamaño del eslogan */
   color: var(--secondary-color);
   margin-top: 5px;
   font-weight: 400;
  }

  .options-selector h2 {
   font-size: 1.7em; /* Tamaño del título de selección */
   margin-bottom: 30px;
   color: var(--secondary-color);
   font-weight: 700;
  }

  .options-grid {
   display: grid;
   grid-template-columns: 1fr; /* Una columna por defecto para móviles */
   gap: 25px; /* Espacio entre las tarjetas */
  }

  .option-card {
   background-color: var(--white-color);
   border: 1px solid var(--border-color);
   border-radius: 10px; /* Bordes redondeados para las tarjetas */
   padding: 30px 25px; /* Espaciado interno de las tarjetas */
   text-decoration: none;
   color: var(--secondary-color);
   transition: transform 0.3s ease, box-shadow 0.3s ease;
   display: flex;
   flex-direction: column;
   justify-content: space-between;
   box-shadow: 0 4px 10px var(--shadow-color); /* Sombra sutil para las tarjetas */
  }

  .option-card:hover {
   transform: translateY(-8px); /* Efecto de elevación al pasar el cursor */
   box-shadow: 0 8px 20px rgba(0, 0, 0, 0.18); /* Sombra más pronunciada al pasar el cursor */
  }

  .option-card h3 {
   font-size: 1.4em; /* Tamaño del título de la tarjeta */
   color: var(--primary-color);
   margin-top: 0;
   margin-bottom: 15px;
   font-weight: 700;
  }

  .option-card p {
   font-size: 0.95em; /* Tamaño del texto descriptivo */
   margin-bottom: 25px; /* Espacio antes del botón */
   flex-grow: 1;
   color: #555; /* Color de texto ligeramente más claro */
  }

  .button {
   display: inline-block;
   background-color: var(--primary-color);
   color: var(--white-color);
   padding: 14px 28px; /* Botones más grandes */
   border-radius: 8px; /* Bordes redondeados para botones */
   text-decoration: none;
   font-weight: 700;
   transition: background-color 0.3s ease, transform 0.2s ease;
   border: none;
   cursor: pointer;
   text-transform: uppercase; /* Botones en mayúsculas */
   letter-spacing: 0.5px;
  }

  .button:hover {
   background-color: #A80020; /* Rojo más oscuro al pasar el cursor */
   transform: scale(1.03); /* Ligero agrandamiento del botón */
  }

  .footer {
   margin-top: 50px; /* Más espacio antes del pie de página */
   padding-top: 20px;
   border-top: 1px solid var(--border-color); /* Línea divisoria sutil */
   font-size: 0.9em;
   color: #777777;
  }

  /* Media Query para hacer el diseño responsive */

  @media (min-width: 768px) {

   .options-grid {
    grid-template-columns: repeat(2, 1fr); /* Dos columnas para tablets y escritorio */
   }

   .logo-text {
    font-size: 3.8em; /* Ajuste de tamaño para pantallas más grandes */
   }

   .tagline {
    font-size: 1.2em;
   }
   .container {
     padding: 50px 40px; /* Más padding en pantallas grandes */
   }
  }
 </style>
</head>
<body>
 <div class="container">
  <header class="header">
   <h1 class="logo-text">
    <span class="logo-first-letter">A</span><span class="logo-rest">UTOMARKET</span>
   </h1>
   <p class="tagline">Rent a Car &bull; Panamá</p>
  </header>
  <main class="options-selector">
   <h2>Elige tu destino o servicio:</h2>
   <div class="options-grid">
    <a href="https://www.automarketrentacar.com/" class="option-card" target="_blank" rel="noopener noreferrer">
     <div class="card-content">
      <img src="image/automarket_rent.svg" width="400" height="96" alt="" srcset="">
      <span class="button">Visitar Sitio</span>
     </div>
    </a>
    <a href="https://automarketpanama.com/" class="option-card" target="_blank" rel="noopener noreferrer">
     <div class="card-content">
      <img src="image/AUTOMARKET.png" width="400" height="96" alt="" srcset="">
      <span class="button">Visitar Sitio</span>
     </div>
    </a>
   </div>
  </main>
  <footer class="footer">
   <p>&copy; <span id="year"></span> Automarket. Todos los derechos reservados.</p>
  </footer>
 </div>
 <script>
  // Script para actualizar el año automáticamente en el footer
  document.getElementById('year').textContent = new Date().getFullYear();
</script>
</body>
</html>