<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

</head>


<body class="bg-blue-50 text-gray-800">

<!-- Barra de navegación -->
 <?php

        include_once 'src/inc/navbar.php';

?>

  
<section id="contacto" class="pt-32 pb-10 bg-white">
  
  <section id="contacto" class="pt-10 pb-10 bg-[linear-gradient(120deg,_rgba(0,124,240,0.6),_rgba(0,223,216,0.2))]">

  <div class="container mx-auto px-6 flex flex-col md:flex-row gap-8">
    
    <!-- Columna izquierda: Información de contacto -->
    <div class="w-2/3 bg-white text-cyan-600 pt-20 p-6 rounded-lg">
      <h2 class="text-4xl font-bold text-center mb-10 ">Contáctanos</h2>

      <h4 class="text-2xl pt-6 text-gray-600 pl-8 font-serif mb-4">
        <i class="fa-solid text-cyan-500 fa-location-dot mr-2"></i> Carrera 59 #44a-30, Bogotá, Colombia.
      </h4>

      <h4 class="text-2xl pl-8 text-gray-600 font-serif mb-4">
        <i class="fa-regular text-cyan-500 fa-envelope mr-2"></i> contacto@kasay.com.co
      </h4>

      <h4 class="text-2xl pl-8 text-gray-600 font-serif mb-10">
        <i class="fa-solid text-cyan-500 fa-phone mr-2"></i> 3013365167
      </h4>

      <h4 class="text-2xl font-bold text-cyan-600 pt-8 text-center mb-4">
        ¡Síguenos en nuestras redes sociales!
      </h4>

      <div class="flex justify-center pt-2 pb-0 text-cyan-500 space-x-5 text-7xl">
        <a href="https://www.facebook.com" target="_blank">
          <i class="fa-brands fa-square-facebook"></i>
        </a>
        <a href="https://www.instagram.com" target="_blank">
          <i class="fa-brands fa-square-instagram"></i>
        </a>
        <a href="https://www.twitter.com" target="_blank">
          <i class="fa-brands fa-square-x-twitter"></i>
        </a>
      </div>
    </div>

    <!-- Columna derecha: Formulario moderno -->
<div class="w-full bg-white px-8 md:px-14 pt-12 pb-10 rounded-xl shadow-lg hover:shadow-2xl transition-shadow duration-300">
  <form>
    <!-- Nombre y Email -->
    <div class="mb-6">
      <div class="grid grid-flow-row sm:grid-cols-2 gap-6">
        <div>
          <label class="block text-cyan-700 text-sm font-medium mb-2" for="nya">Nombre *</label>
          <input
            class="border border-gray-300 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-300 shadow-sm rounded-lg w-full py-2 px-3 text-gray-700 transition duration-300 ease-in-out placeholder:text-gray-400 focus:outline-none"
            id="nya" name="nya" type="text" required placeholder="Ingresa tu nombre">
        </div>

        <div>
          <label class="block text-cyan-700 text-sm font-medium mb-2" for="email">Email *</label>
          <input
            class="border border-gray-300 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-300 shadow-sm rounded-lg w-full py-2 px-3 text-gray-700 transition duration-300 ease-in-out placeholder:text-gray-400 focus:outline-none"
            id="email" name="email" type="email" required placeholder="Ingresa tu email">
        </div>
      </div>
    </div>

    <!-- Teléfono y Dirección -->
    <div class="mb-6">
      <div class="grid grid-flow-row sm:grid-cols-2 gap-6">
        <div>
          <label class="block text-cyan-700 text-sm font-medium mb-2" for="telefono">Teléfono *</label>
          <input
            class="border border-gray-300 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-300 shadow-sm rounded-lg w-full py-2 px-3 text-gray-700 transition duration-300 ease-in-out placeholder:text-gray-400 focus:outline-none"
            id="telefono" name="telefono" type="text" required placeholder="Ingresa tu teléfono">
        </div>

        <div>
          <label class="block text-cyan-700 text-sm font-medium mb-2" for="direccion">Dirección</label>
          <input
            class="border border-gray-300 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-300 shadow-sm rounded-lg w-full py-2 px-3 text-gray-700 transition duration-300 ease-in-out placeholder:text-gray-400 focus:outline-none"
            id="direccion" name="direccion" type="text" placeholder="Ingresa tu dirección">
        </div>
      </div>
    </div>

    <!-- Asunto -->
    <div class="mb-6">
      <label class="block text-cyan-700 text-sm font-medium mb-2" for="asunto">Asunto *</label>
      <input
        class="border border-gray-300 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-300 shadow-sm rounded-lg w-full py-2 px-3 text-gray-700 transition duration-300 ease-in-out placeholder:text-gray-400 focus:outline-none"
        id="asunto" name="asunto" type="text" required placeholder="Ingresa el asunto">
    </div>

    <!-- Mensaje -->
    <div class="mb-6">
      <label class="block text-cyan-700 text-sm font-medium mb-2" for="mensaje">Mensaje *</label>
      <textarea
        class="border border-gray-300 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-300 shadow-sm rounded-lg w-full py-2 px-3 text-gray-700 transition duration-300 ease-in-out placeholder:text-gray-400 focus:outline-none"
        id="mensaje" name="mensaje" required rows="4" placeholder="Ingresa tu mensaje"></textarea>
    </div>

    <!-- Botón -->
    <div class="flex justify-center text-2xl">
      <button
        class="bg-[linear-gradient(120deg,_rgba(0,124,240,0.9),_rgba(0,154,186,0.8))] hover:from-blue-600 hover:to-cyan-600 text-white font-semibold py-2 px-24 rounded-full shadow-lg hover:shadow-xl transition-all duration-300">
        Enviar
      </button>
    </div>
  </form>
</div>

</section>
</section>

<hr/>

  <section id="nosotros" class="pt-0 bg-white">
      <div class="relative h-[350px] w-full">
         <!-- Mapa Leaflet -->
        <div id="map" class="absolute inset-0 z-0"></div>
            <!-- Capa azul encima -->
            <div class="absolute inset-0 z-10 bg-blue-500/10 pointer-events-none"></div>

    <script>

document.addEventListener('DOMContentLoaded', () => {
    const requiredFields = document.querySelectorAll('input[required], textarea[required]');

    requiredFields.forEach(field => {
      field.oninvalid = function () {
        this.setCustomValidity('Por favor rellena este campo');
      };

      field.oninput = function () {
        this.setCustomValidity('');
      };
    });
  });


//Funcionalidad completa del MAPA OSM y Esri con Leaflet
        //Inicializar el mapa
        var map = L.map('map').setView([4.651735, -74.094000], 15);

        // Capa base estándar de OSM con nombres detallados
        var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '&copy; <a href="https://openstreetmap.org">OpenStreetMap</a> contributors'
        }).addTo(map);

        // capa base satelital Esri
        var esriSat = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
          attribution: '&copy; <a href="https://www.esri.com/">Esri</a> contributors'
        });

        // Capa activa por defecto
        var currentLayer = osm;

        // Icono de marcador personalizado
        var customIcon = L.icon({
          iconUrl: 'ezgif.com-effects.webp', // URL del ícono personalizado
          iconSize: [60, 70], // Tamaño del ícono
          iconAnchor: [30, 70], // Punto donde se ancla el ícono
          popupAnchor: [0, -70] // Punto donde se ancla el popup
        });

        // Marcador
        var marker = L.marker([4.6490355, -74.0935605], {icon: customIcon }).addTo(map);

          marker.bindPopup('<b><a href= "https://maps.app.goo.gl/4QZmSTfJhFXDdLDq9" target="_blank">Kasay Ingeniería S.A.S</a></b><br>Carrera 59 #44a-30, Bogotá',
            {
              autoClose: false,
              closeOnClick: false
            }
          ).openPopup();
          

          //Estado del bindPopup
          let popupOpen = true;

          //Manejar el click en el marcador
        marker.on('click', function(e) {
          e.originalEvent.stopPropagation();

          // Si el pipup cerrado abrirlo, si esta abrierto no cerrarlo #44a-30
          if (!popupOpen){

            marker.openPopup();
            popupOpen = true;

          }
        
          // abrir el googlel maps

          window.open('https://maps.app.goo.gl/4QZmSTfJhFXDdLDq9', '_blank');
        });
        
        //saber cuando el popup se cierra manualmente

        marker.on('popupclose', function () {

          popupOpen = false;

        });

        // si de abre manualmente 
        
        marker.on('popupopen', function () {

          popupOpen = true

        });

    // Botón personalizado para cambiar entre capas
var toggleButton = L.control({position: 'topright'});

toggleButton.onAdd = function (map) {
  var div = L.DomUtil.create('div', 'leaflet-bar');
  div.style.cursor = 'pointer';
  div.style.backgroundImage = 'url("satelital.png")'; // Icono inicial para OSM
  div.style.backgroundSize = 'cover';
  div.style.width = '45px';
  div.style.height = '45px';

  // Mover el botón un poco más abajo de la esquina
  div.style.position = 'absolute';
  div.style.top = '20px'; // Ajusta este valor para mover el botón más abajo
  div.style.right = '20px'; // P

  // Agrandar el icono cuando el mouse pasa por encima
  div.onmouseover = function() {
    div.style.transform = 'scale(2)';
    div.style.transition = 'transform 0.5s';
  };
  div.onmouseout = function() {
    div.style.transform = 'scale(1)';
  };

  div.onclick = function() {
    // Alternar entre las dos capas
    if (currentLayer === osm) {
      map.removeLayer(osm);
      map.addLayer(esriSat);
      currentLayer = esriSat;

      // Cambiar la imagen del icono a algo relacionado con el satelital
      div.style.backgroundImage = 'url("osm.png")'; // Imagen para la capa de OSM
    } else {
      map.removeLayer(esriSat);
      map.addLayer(osm);
      currentLayer = osm;

      // Cambiar la imagen del icono a algo relacionado con el satelital
      div.style.backgroundImage = 'url("satelital.png")'; // Imagen para la capa satelital
    }
  };

  return div;
};

  toggleButton.addTo(map);

      </script>

    </div>
  </section>        

<hr/>

 <!-- Pie de pagina  -->
 <?php

        include_once 'src/inc/footer.php';
 ?>

</body>
</html>