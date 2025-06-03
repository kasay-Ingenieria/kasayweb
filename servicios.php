<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasay Ingeneria</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Puedes añadir estilos personalizados aquí si es necesario */
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

        include_once 'src/inc/navbar.php';

?>

    <section id="inicio" class="text-white pt-3 pb-16 md:pt-20 md:pb-2">

        <div class="relative w-full h-screen overflow-hidden">
 
            <video autoplay muted="muted" loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
            <source src="assets/videos/kasay-solutions.mp4" type="video/mp4">
            Tu navegador no soporta video HTML5.
            </video>

            <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 z-10"></div>

    <div class="relative z-20 flex items-center justify-center h-full text-white text-3xl">

        <div class="container mx-auto px-6 text-center">
            
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Soluciones geolocalizadas </h1>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto">Experiencia Corporativa y Colaboraciones Estratégicas.</p>
            <a href="#servicios" class="bg-white text-blue-500 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg">Descubre Más</a>
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
            <div class="md:w-1/2 mb-8 md:mb-0 md:pr-12">
                <img src="assets/images/1.png" alt="Equipo trabajando" class="rounded-lg shadow-md">
            </div>
            <div class="md:w-1/2">
                <h2 class="text-3xl font-bold mb-6 text-gray-800">Conoce a Nuestro Equipo ✨</h2>
                <p class="text-gray-700 mb-4 leading-relaxed">Somos un equipo apasionado de desarrolladores, diseñadores y estrategas dedicados a crear soluciones digitales excepcionales. Creemos en la colaboración, la innovación y, sobre todo, en el éxito de nuestros clientes.</p>
                <p class="text-gray-700 leading-relaxed">Nuestra misión es superar tus expectativas y ayudarte a alcanzar tus objetivos de negocio a través de la tecnología y el diseño.</p>
                <a href="#contacto" class="mt-6 inline-block bg-blue-500 text-white font-semibold py-3 px-6 rounded-lg hover:bg-blue-700 transition duration-300">Hablemos</a>
            </div>
        </div>
    </section>

    <hr/>

    <section class="py-20 bg-blue-500 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">¿Listo para Empezar tu Próximo Proyecto?</h2>
            <p class="text-lg md:text-xl mb-8 max-w-xl mx-auto">No esperes más. Contáctanos hoy mismo y descubre cómo podemos ayudarte a llevar tu negocio al siguiente nivel.</p>
            <a href="contacto.php" class="bg-white text-blue-500 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg">Contáctanos Ahora</a>
        </div>
    </section>

    <hr/>


 <!-- Pie de pagina  -->
 <?php

        include_once 'src/inc/footer.php';
 ?>

</body>
</html>