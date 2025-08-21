
document.addEventListener('DOMContentLoaded', () => { // Espera a que el DOM esté cargado
    const requiredFields = document.querySelectorAll('input[required], textarea[required]'); // Selecciona los campos requeridos

    requiredFields.forEach(field => { // Itera sobre los campos requeridos
        field.oninvalid = function () { // Si el campo es inválido
            this.setCustomValidity('Por favor rellena este campo'); // Mensaje personalizado
        };

        field.oninput = function () { // Cuando el usuario escribe
            this.setCustomValidity(''); // Elimina el mensaje personalizado
        };
    });
});


//Funcionalidad completa del MAPA OSM y Esri con Leaflet
//Inicializar el mapa
var map = L.map('map').setView([4.651735, -74.094000], 15); // Inicializa el mapa centrado en Bogotá

// Capa base estándar de OSM con nombres detallados
var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://openstreetmap.org">OpenStreetMap</a> contributors'
}).addTo(map); // Añade la capa OSM

// capa base satelital Esri
var esriSat = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
    attribution: '&copy; <a href="https://www.esri.com/">Esri</a> contributors'
}); // Define la capa satelital Esri

// Capa activa por defecto
var currentLayer = osm; // Define la capa activa

// Icono de marcador personalizado
var customIcon = L.icon({
    iconUrl: '/kasayweb/assets/gif/icon_maps.webp', // URL del ícono personalizado
    iconSize: [35, 55], // Tamaño del ícono
    iconAnchor: [20, 60], // Punto donde se ancla el ícono
    popupAnchor: [-3, -60] // Punto donde se ancla el popup
});

// Marcador
var marker = L.marker([4.6490355, -74.0935605], {
    icon: customIcon 
}).addTo(map); // Añade el marcador al mapa

marker.bindPopup('<b><a href= "https://maps.app.goo.gl/4QZmSTfJhFXDdLDq9" target="_blank">Kasay Ingeniería S.A.S</a></b><br>Carrera 59 #44a-30, Bogotá', {
    autoClose: false,
    closeOnClick: false
}).openPopup(); // Añade popup al marcador

//Estado del bindPopup
let popupOpen = true; // Estado del popup

//Manejar el click en el marcador
marker.on('click', function(e) {
    e.originalEvent.stopPropagation(); // Evita propagación del evento

    // Si el pipup cerrado abrirlo, si esta abrierto no cerrarlo #44a-30
    if (!popupOpen){
        marker.openPopup();
        popupOpen = true;
    }

    // abrir el googlel maps
    window.open('https://maps.app.goo.gl/4QZmSTfJhFXDdLDq9', '_blank'); // Abre Google Maps en nueva pestaña
});

//saber cuando el popup se cierra manualmente
marker.on('popupclose', function () {
    popupOpen = false; // Actualiza estado cuando se cierra el popup
});

// si de abre manualmente 
marker.on('popupopen', function () {
    popupOpen = true // Actualiza estado cuando se abre el popup
});

// Botón personalizado para cambiar entre capas
var toggleButton = L.control({
    position: 'topright'
});

toggleButton.onAdd = function (map) { // Añade el botón al mapa
    var div = L.DomUtil.create('div', 'leaflet-bar');
    div.style.cursor = 'pointer';
    div.style.backgroundImage = 'url("../../assets/images/satelital.png")'; // Icono inicial para OSM
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
            div.style.backgroundImage = 'url("../../assets/images/osm.png")'; // Imagen para la capa de OSM
        } else {
            map.removeLayer(esriSat);
            map.addLayer(osm);
            currentLayer = osm;

            // Cambiar la imagen del icono a algo relacionado con el satelital
            div.style.backgroundImage = 'url("../../assets/images/satelital.png")'; // Imagen para la capa satelital
            }
        };
    return div;
};
toggleButton.addTo(map); // Añade el botón al mapa
