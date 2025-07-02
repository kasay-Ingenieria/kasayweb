<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasay Ingeneria</title>

    <base href="/kasayweb/">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
      
        .hero-bg {
            background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://wallpapers.com/images/high/blue-geometric-kiyhavrstg1buil4.webp'); /* Imagen de fondo de ejemplo */
            background-size: cover;
            background-position: center;
        }
    </style>
</head>


<body class="bg-gray-100 text-gray-800">

<!-- Barra de navegación -->
 <?php

        include_once '../inc/navbar.php';

?>

    <section id="inicio" class="text-white pb-16 md:pt-16 md:pb-2">

        <div class="relative w-full h-screen overflow-hidden">

            <img  src="/kasayweb/assets/images/ortofoto.png" alt="Ortofoto" class="absolute top-0 left-0 w-full h-full object-cover z-0">


            <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-40 z-10"></div>

    <div class="relative z-20 flex items-center justify-center h-full text-white text-3xl">

        <div class="container mx-auto px-6 text-center">
            
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Soluciones geolocalizadas </h1>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto">Experiencia Corporativa y Colaboraciones Estratégicas.</p>
            <a href="src/views/servicios.php#servicios" class="bg-white text-blue-500 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg">Descubre Más</a>
        </div>

    </div>

    </section>

    <hr/>

    <section id="servicios" class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Nuestros Servicios 🚀</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="text-blue-500 mb-4 text-4xl">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Gestión Catastral:</h3>
                    <p class="text-gray-600 leading-relaxed">Gestión Catastral: Organización y Administración Integral de la Información Territorial.</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="text-blue-500 mb-4 text-4xl">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Consultoría:</h3>
                    <p class="text-gray-600 leading-relaxed">para la habilitación del municipio como Gestor Catastral y planificación de la prestación del servicio público.</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="text-blue-500 mb-4 text-4xl">
                        <i class="fas fa-cubes"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Sistema de Gestión Catastral</h3>
                    <p class="text-gray-600 leading-relaxed">ajo la modalidad de Software como Servicio – SaaS.</p>
                </div>
            </div>
        </div>
    </section>

    <hr/>

    <section id="nosotros" class="py-16 bg-blue-50">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center">
            <div class="w-[1480px]  text-gray-800">
                 <iframe 
          class="rounded-lg shadow-lg w-full h-[600px]" 
          src="/kasayweb/assets/tiles/visu_ortofoto.php"
          title="Mapa interactivo de OpenLayers"
          frameborder="0">
        </iframe>
            </div>
        </div>
    </section>

    <hr/>

    <section class="py-20 bg-blue-500 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">¿Listo para Empezar tu Próximo Proyecto?</h2>
            <p class="text-lg md:text-xl mb-8 max-w-xl mx-auto">No esperes más. Contáctanos hoy mismo y descubre cómo podemos ayudarte a llevar tu negocio al siguiente nivel.</p>
            <a href="src/views/contacto.php" class="bg-white text-blue-500 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg">Contáctanos Ahora</a>
        </div>
    </section>

    <hr/>


 <!-- Pie de pagina  -->
 <?php

        include_once '../inc/footer.php';
 ?>

</body>
</html>