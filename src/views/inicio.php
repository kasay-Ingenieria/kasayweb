<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasay Ingeneria</title>
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

        include_once 'src/inc/navbar.php';

?>


<section id="inicio" class="text-white">

    <div class="relative w-full h-screen overflow-hidden">
 
        <video autoplay muted="muted" loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
            <source src="assets/videos/kasay-solutions.mp4" type="video/mp4">
            Tu navegador no soporta video HTML5.
        </video>

    <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 z-10"></div>

    
    <div class="relative z-20 flex items-center justify-center h-full text-white text-3xl">

        <div class="container mx-auto pt-52 text-center ">
            
            <h1 class="text-4xl md:text-8xl font-bold mb-6 leading-tight">Soluciones geolocalizadas </h1>
            <p class="text-lg md:text-4xl mb-8 max-w-4xl mx-auto">Experiencia Corporativa y Colaboraciones Estratégicas.</p>
            <a href="#nosot" class="bg-white text-sky-700 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg">Descubre Más</a>

                <div class="container text-white/70 pt-40 grid grid-cols-3 gap-32 shadow-lg ">
                    
                    <div class="text-left  text-xl mx-auto hover:text-white">
                        <a href="#seccion2">
                            <p>&nbsp;<i class="fa-solid fa-suitcase mr-2"></i> Proyectos</p>
                                <hr class="border-t-2 border-gray-300 my-2">  
                             <p>Explora nuestros casos de éxito y soluciones implementadas en diversos sectores.</p>
                        </a>
                    </div>
                    <div class="text-left text-xl mx-auto  hover:text-white">
                        <a href="#seccion2">
                            <p>&nbsp;<i class="fa-solid fa-gear mr-2"></i> Servicios</p>
                            <hr class="border-t-2 border-gray-300 my-2">
                            <p>Conoce nuestro portafolio de consultoría, análisis de datos y tecnología geoespacial.</p>
                        </a>
                    </div>

                    <div class="text-left text-xl mx-auto  hover:text-white">
                        <a href="#seccion2">
                            <p>&nbsp;<i class="fa-regular fa-circle-question mr-2"></i>Apoyo</p>
                            <hr class="border-t-2 border-gray-300 my-2">
                            <p>Accede a nuestra base de conocimiento o contacta a nuestro equipo de asistencia técnica.</p>
                        </a>
                    </div>
                </div>


    </div>

</section>

    <hr/>

<section id="nosot" class="bg-white py-8 scroll-mt-[30px]">
    <div class="bg-sky-50 py-12">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-sky-400 mb-4">Nuestros Servicios</h2>
            <p class="text-lg text-sky-400 max-w-3xl mx-auto mb-16">
                Gestión Catastral: Organización y Administración Integral de la Información Territorial.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <div class="bg-white p-8 rounded-lg shadow-lg transform transition-transform duration-300 hover:-translate-y-2">
                    <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                        <i class="fa-solid fa-headset text-3xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Consultoría Especializada</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Asesoría para la habilitación del municipio como Gestor Catastral y planificación del servicio público.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-lg transform transition-transform duration-300 hover:-translate-y-2">
                    <div class="bg-teal-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                        <i class="fa-solid fa-shield-halved text-3xl text-teal-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Gestión Catastral SaaS</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Sistema de Gestión Catastral bajo la modalidad de Software como Servicio (SaaS).
                    </p>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-lg transform transition-transform duration-300 hover:-translate-y-2">
                    <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                        <i class="fa-solid fa-rocket text-3xl text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Seguimiento GPS</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Implementación de sistemas de seguimiento vehicular y de activos con tecnología GPS.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-lg transform transition-transform duration-300 hover:-translate-y-2">
                    <div class="bg-orange-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                        <i class="fa-solid fa-thumbs-up text-3xl text-orange-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Resultados Confiables</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Puede contar con nuestros servicios para obtener resultados consistentes y fiables en todo momento.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-lg transform transition-transform duration-300 hover:-translate-y-2">
                    <div class="bg-green-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                        <i class="fa-solid fa-map-marked-alt text-3xl text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Cartografía Digital</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Producción y actualización de cartografía digital para una precisa representación del territorio.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-lg transform transition-transform duration-300 hover:-translate-y-2">
                    <div class="bg-red-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                        <i class="fa-solid fa-database text-3xl text-red-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Bases de Datos Geográficas</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Diseño e implementación de bases de datos espaciales para la gestión de información geográfica.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-lg transform transition-transform duration-300 hover:-translate-y-2">
                    <div class="bg-indigo-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                        <i class="fa-solid fa-chart-line text-3xl text-indigo-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Análisis Territorial</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Análisis espacial y estudios territoriales para la toma de decisiones estratégicas.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-lg transform transition-transform duration-300 hover:-translate-y-2">
                    <div class="bg-yellow-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                        <i class="fa-solid fa-cogs text-3xl text-yellow-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Soporte y Mantenimiento</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Ofrecemos soporte técnico continuo y mantenimiento de nuestras soluciones de software.
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>


<section id="seccion2" class="py-16 bg-white [scroll-margin-top:60px]">
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
                <img src="assets/images/dron2.png" alt="Equipo trabajando">
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