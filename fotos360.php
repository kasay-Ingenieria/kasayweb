<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

</head>


<body class="bg-gray-100 text-gray-800">

<!-- 1. SECCIÓN DEL MAPA -->
<section id="nosotros" class="pt-0 bg-white">
  <div class="w-full h-[350px] relative">
    <!-- Contenedor del mapa -->
    <div id="map" class="absolute top-0 left-0 w-full h-full grayscale-[40%] z-0 rounded-md"></div>
  </div>
</section>

<!-- 2. LEAFLET CSS -->
<link
  rel="stylesheet"
  href="https://unpkg.com/leaflet/dist/leaflet.css"
/>

<!-- 3. LEAFLET JS -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<!-- 4. SCRIPT DE CONFIGURACIÓN DEL MAPA -->
<script>
  // Coordenadas de Kasay Ingeniería
  const kasayCoords = [4.649035, -74.096141];

  // Crear el mapa
  const map = L.map('map').setView(kasayCoords, 15);

  // Agregar capa de OpenStreetMap
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap contributors',
  }).addTo(map);

  // Ícono personalizado (puedes cambiar la URL por tu propia imagen)
  const customIcon = L.icon({
    iconUrl: 'https://cdn-icons-png.flaticon.com/512/684/684908.png',
    iconSize: [48, 48], // Tamaño del ícono
    iconAnchor: [24, 48], // Punto donde se ancla
  });

  // Añadir marcador
  L.marker(kasayCoords, { icon: customIcon }).addTo(map)
    .bindPopup('<b>Kasay Ingeniería</b><br>Tu ubicación aquí.')
    .openPopup();
</script>


</body>
</html>