<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasay Ingeneria</title>
   <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script> <style>
      
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

<section id="nosot" class="bg-white py-12 scroll-mt-[30px]">
    <div class="bg-gradient-to-b from-sky-50 to-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-5xl font-bold text-sky-500 mb-6">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-sky-400 to-blue-600">
                    Nuestros Servicios
                </span>
            </h2>
            <p class="text-xl text-sky-500 max-w-4xl mx-auto mb-16 leading-relaxed">
                Gestión Catastral: Organización y Administración Integral de la Información Territorial.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 px-4">

                <!-- Servicio 1 -->
                <div class="group bg-white p-6 rounded-2xl shadow-xl hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-3 border border-sky-100">
    <div class="relative overflow-hidden rounded-xl h-48 mb-6 group">
    <img src="./assets/images/ali_2.png" 
         alt="Consultoría Especializada"
         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
    <div class="absolute inset-0 bg-gradient-to-t from-sky-900/60 to-transparent"></div>
</div>

                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Consultoría Especializada</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Asesoría para la habilitación del municipio como Gestor Catastral y planificación del servicio público.
                    </p>
                    <a href="#" class="inline-block text-sky-500 font-medium hover:text-sky-600 transition-colors">
                        Más información →
                    </a>
                </div>

                <!-- Servicio 2 -->
                <div class="group bg-white p-6 rounded-2xl shadow-xl hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-3 border border-sky-100">
                    <div class="relative overflow-hidden rounded-xl h-48 mb-6">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                             alt="Gestión Catastral SaaS"
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-teal-900/60 to-transparent"></div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Gestión Catastral SaaS</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Sistema de Gestión Catastral bajo la modalidad de Software como Servicio (SaaS).
                    </p>
                    <a href="#" class="inline-block text-teal-500 font-medium hover:text-teal-600 transition-colors">
                        Más información →
                    </a>
                </div>

                <!-- Servicio 3 -->
                <div class="group bg-white p-6 rounded-2xl shadow-xl hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-3 border border-sky-100">
                    <div class="relative overflow-hidden rounded-xl h-48 mb-6">
                        <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                             alt="Seguimiento GPS"
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-purple-900/60 to-transparent"></div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Seguimiento GPS</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Implementación de sistemas de seguimiento vehicular y de activos con tecnología GPS.
                    </p>
                    <a href="#" class="inline-block text-purple-500 font-medium hover:text-purple-600 transition-colors">
                        Más información →
                    </a>
                </div>

                <!-- Servicio 4 -->
                <div class="group bg-white p-6 rounded-2xl shadow-xl hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-3 border border-sky-100">
                    <div class="relative overflow-hidden rounded-xl h-48 mb-6">
                        <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                             alt="Resultados Confiables"
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-orange-900/60 to-transparent"></div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Resultados Confiables</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Puede contar con nuestros servicios para obtener resultados consistentes y fiables en todo momento.
                    </p>
                    <a href="#" class="inline-block text-orange-500 font-medium hover:text-orange-600 transition-colors">
                        Más información →
                    </a>
                </div>

                <!-- Servicio 5 -->
                <div class="group bg-white p-6 rounded-2xl shadow-xl hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-3 border border-sky-100">
                    <div class="relative overflow-hidden rounded-xl h-48 mb-6">
                        <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                             alt="Cartografía Digital"
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-green-900/60 to-transparent"></div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Cartografía Digital</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Producción y actualización de cartografía digital para una precisa representación del territorio.
                    </p>
                    <a href="#" class="inline-block text-green-500 font-medium hover:text-green-600 transition-colors">
                        Más información →
                    </a>
                </div>

                <!-- Servicio 6 -->
                <div class="group bg-white p-6 rounded-2xl shadow-xl hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-3 border border-sky-100">
                    <div class="relative overflow-hidden rounded-xl h-48 mb-6">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                             alt="Bases de Datos Geográficas"
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-red-900/60 to-transparent"></div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Bases de Datos Geográficas</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Diseño e implementación de bases de datos espaciales para la gestión de información geográfica.
                    </p>
                    <a href="#" class="inline-block text-red-500 font-medium hover:text-red-600 transition-colors">
                        Más información →
                    </a>
                </div>

                <!-- Servicio 7 -->
                <div class="group bg-white p-6 rounded-2xl shadow-xl hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-3 border border-sky-100">
                    <div class="relative overflow-hidden rounded-xl h-48 mb-6">
                        <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                             alt="Análisis Territorial"
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-indigo-900/60 to-transparent"></div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Análisis Territorial</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Análisis espacial y estudios territoriales para la toma de decisiones estratégicas.
                    </p>
                    <a href="#" class="inline-block text-indigo-500 font-medium hover:text-indigo-600 transition-colors">
                        Más información →
                    </a>
                </div>

                <!-- Servicio 8 -->
                <div class="group bg-white p-6 rounded-2xl shadow-xl hover:shadow-2xl transform transition-all duration-500 hover:-translate-y-3 border border-sky-100">
                    <div class="relative overflow-hidden rounded-xl h-48 mb-6">
                        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                             alt="Soporte y Mantenimiento"
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-yellow-900/60 to-transparent"></div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Soporte y Mantenimiento</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Ofrecemos soporte técnico continuo y mantenimiento de nuestras soluciones de software.
                    </p>
                    <a href="#" class="inline-block text-yellow-500 font-medium hover:text-yellow-600 transition-colors">
                        Más información →
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

    <hr/>
    <!-- Sección de Servicios Destacados -->
<section id="servicios" class="py-20 bg-gradient-to-br from-sky-50 to-blue-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1 bg-sky-100 text-sky-600 rounded-full text-sm font-semibold mb-4">SOLUCIONES INTEGRALES</span>
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Tecnología Geoespacial <span class="gradient-text">Avanzada</span></h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Ofrecemos servicios de Consultoría en Gestión Catastral, comprometidos en proporcionar las capacidades técnicas, tecnológicas y administrativas necesarias.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Servicio 1 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-500 group">
                <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6 transition-all duration-500 group-hover:bg-blue-500">
                    <i class="fas fa-map-marked-alt text-blue-500 text-2xl transition-all duration-500 group-hover:text-white"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Gestión Catastral</h3>
                <p class="text-gray-600 leading-relaxed mb-4">Organización y Administración Integral de la Información Territorial para entidades gubernamentales y municipios.</p>
                <ul class="space-y-2">
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check-circle text-blue-400 mr-2"></i>
                        Operación catastral completa
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check-circle text-blue-400 mr-2"></i>
                        Actualización de datos
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check-circle text-blue-400 mr-2"></i>
                        Sistemas de información
                    </li>
                </ul>
            </div>
            
            <!-- Servicio 2 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-500 group">
                <div class="w-16 h-16 bg-teal-100 rounded-xl flex items-center justify-center mb-6 transition-all duration-500 group-hover:bg-teal-500">
                    <i class="fas fa-layer-group text-teal-500 text-2xl transition-all duration-500 group-hover:text-white"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Consultoría Especializada</h3>
                <p class="text-gray-600 leading-relaxed mb-4">Habilitación de municipios como Gestores Catastrales y planificación de la prestación del servicio público.</p>
                <ul class="space-y-2">
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check-circle text-teal-400 mr-2"></i>
                        Diagnóstico institucional
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check-circle text-teal-400 mr-2"></i>
                        Planes de implementación
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check-circle text-teal-400 mr-2"></i>
                        Capacitación técnica
                    </li>
                </ul>
            </div>
            
            <!-- Servicio 3 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-500 group">
                <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mb-6 transition-all duration-500 group-hover:bg-purple-500">
                    <i class="fas fa-cubes text-purple-500 text-2xl transition-all duration-500 group-hover:text-white"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Sistema SaaS</h3>
                <p class="text-gray-600 leading-relaxed mb-4">Gestión Catastral bajo la modalidad de Software como Servicio con tecnología de punta y disponibilidad 24/7.</p>
                <ul class="space-y-2">
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check-circle text-purple-400 mr-2"></i>
                        Plataforma en la nube
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check-circle text-purple-400 mr-2"></i>
                        Actualizaciones automáticas
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="fas fa-check-circle text-purple-400 mr-2"></i>
                        Soporte técnico permanente
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Proyectos -->
<section id="proyectos" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1 bg-blue-100 text-blue-600 rounded-full text-sm font-semibold mb-4">CASOS DE ÉXITO</span>
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Nuestros <span class="gradient-text">Proyectos</span></h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Implementaciones exitosas que han transformado la gestión territorial en diversos municipios y entidades.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Proyecto 1 -->
            <div class="group overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1581093450021-4a7360e9a3ce?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Modernización Catastral"
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/70 to-transparent flex items-end p-6">
                        <h3 class="text-2xl font-bold text-white">Modernización Catastral</h3>
                    </div>
                </div>
                <div class="p-6 bg-white">
                    <p class="text-gray-600 mb-4">Implementación de sistema de gestión catastral para municipio de 50,000 habitantes.</p>
                    <div class="flex justify-between items-center">
                        <span class="inline-block px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs font-semibold">Gestión Catastral</span>
                        <a href="#" class="text-blue-500 hover:text-blue-700 font-medium">Ver caso →</a>
                    </div>
                </div>
            </div>
            
            <!-- Proyecto 2 -->
            <div class="group overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Seguimiento GPS"
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-teal-900/70 to-transparent flex items-end p-6">
                        <h3 class="text-2xl font-bold text-white">Seguimiento GPS</h3>
                    </div>
                </div>
                <div class="p-6 bg-white">
                    <p class="text-gray-600 mb-4">Sistema de monitoreo vehicular para flota de 200 unidades en empresa logística.</p>
                    <div class="flex justify-between items-center">
                        <span class="inline-block px-3 py-1 bg-teal-100 text-teal-600 rounded-full text-xs font-semibold">Tecnología GPS</span>
                        <a href="#" class="text-teal-500 hover:text-teal-700 font-medium">Ver caso →</a>
                    </div>
                </div>
            </div>
            
            <!-- Proyecto 3 -->
            <div class="group overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Análisis Territorial"
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-purple-900/70 to-transparent flex items-end p-6">
                        <h3 class="text-2xl font-bold text-white">Análisis Territorial</h3>
                    </div>
                </div>
                <div class="p-6 bg-white">
                    <p class="text-gray-600 mb-4">Estudio geoespacial para planificación urbana en área metropolitana.</p>
                    <div class="flex justify-between items-center">
                        <span class="inline-block px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs font-semibold">GIS</span>
                        <a href="#" class="text-purple-500 hover:text-purple-700 font-medium">Ver caso →</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-gradient-to-r from-sky-500 to-blue-600 hover:from-sky-600 hover:to-blue-700 transition-all duration-300">
                Ver todos los proyectos
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Sección Nosotros -->
<section id="nosotros" class="py-20 bg-gradient-to-r from-sky-50 to-blue-50">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <div class="lg:w-1/2">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                    <img src="assets/images/dron2.png" alt="Equipo Kasay Ingeniería" class="w-full h-auto">
                    <div class="absolute -bottom-6 -right-6 bg-white p-4 rounded-xl shadow-lg">
                        <div class="flex items-center">
                            <div class="bg-blue-100 p-3 rounded-lg mr-3">
                                <i class="fas fa-award text-blue-500 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Experiencia</p>
                                <p class="font-bold text-gray-800">10+ años</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="lg:w-1/2">
                <span class="inline-block px-4 py-1 bg-blue-100 text-blue-600 rounded-full text-sm font-semibold mb-4">SOBRE NOSOTROS</span>
                <h2 class="text-4xl font-bold text-gray-800 mb-6">Kasay <span class="gradient-text">Ingeniería</span></h2>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    Somos especialistas en Consultoría Municipal y Tecnología Geoespacial, trabajando en estrecha colaboración con entidades territoriales y empresas para definir soluciones tecnológicas y realizar análisis geográficos de alta precisión.
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <div class="flex items-start">
                        <div class="bg-blue-100 p-3 rounded-lg mr-4">
                            <i class="fas fa-check text-blue-500"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-1">Expertos en GIS</h4>
                            <p class="text-gray-600 text-sm">Sistemas de Información Geográfica avanzados</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-blue-100 p-3 rounded-lg mr-4">
                            <i class="fas fa-check text-blue-500"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-1">Tecnología SaaS</h4>
                            <p class="text-gray-600 text-sm">Soluciones en la nube disponibles 24/7</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-blue-100 p-3 rounded-lg mr-4">
                            <i class="fas fa-check text-blue-500"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-1">Soporte Integral</h4>
                            <p class="text-gray-600 text-sm">Asesoramiento técnico permanente</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-blue-100 p-3 rounded-lg mr-4">
                            <i class="fas fa-check text-blue-500"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-1">Cartografía Digital</h4>
                            <p class="text-gray-600 text-sm">Producción y actualización de mapas</p>
                        </div>
                    </div>
                </div>
                
                <a href="#contacto" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-gradient-to-r from-sky-500 to-blue-600 hover:from-sky-600 hover:to-blue-700 transition-all duration-300">
                    Contactar al equipo
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Sección CTA -->
<section class="py-20 bg-gradient-to-r from-sky-600 to-blue-700 text-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">¿Listo para transformar tu gestión territorial?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto opacity-90">Contáctanos hoy mismo y descubre cómo podemos ayudarte a optimizar tus procesos con tecnología geoespacial de vanguardia.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="contacto.php" class="inline-flex items-center justify-center px-8 py-4 border border-transparent text-lg font-medium rounded-full shadow-sm text-blue-600 bg-white hover:bg-gray-100 transition-all duration-300">
                Solicitar consultoría
                <i class="fas fa-calendar-check ml-2"></i>
            </a>
            <a href="tel:+123456789" class="inline-flex items-center justify-center px-8 py-4 border border-2 border-white text-lg font-medium rounded-full text-white hover:bg-white/10 transition-all duration-300">
                <i class="fas fa-phone-alt mr-2"></i>
                Llamar ahora
            </a>
        </div>
    </div>
</section>

<section id="aliados" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1 bg-gray-100 text-gray-600 rounded-full text-sm font-semibold mb-4">COLABORACIONES</span>
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Nuestros <span class="gradient-text">Aliados Estratégicos</span></h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Trabajamos con organizaciones líderes para ofrecer soluciones robustas y confiables.</p>
        </div>

        <div class="swiper-allies">
            <div class="swiper-wrapper">
                <div class="swiper-slide flex justify-center items-center p-4">
                    <img src="assets/images/ali_1.jpeg" alt="Logo Aliado 1" class="max-h-32 w-auto filter grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                </div>
                <div class="swiper-slide flex justify-center items-center p-4">
                    <img src="assets/images/ali_2.png" alt="Logo Aliado 2" class="max-h-32 w-auto filter grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                </div>
                <div class="swiper-slide flex justify-center items-center p-4">
                    <img src="assets/images/ali_3.png" alt="Logo Aliado 3" class="max-h-32 w-auto filter grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                </div>
                <div class="swiper-slide flex justify-center items-center p-4">
                    <img src="assets/images/ali_4.png" alt="Logo Aliado 4" class="max-h-32 w-auto filter grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                </div>
                <div class="swiper-slide flex justify-center items-center p-4">
                    <img src="assets/images/ali_5.png" alt="Logo Aliado 5" class="max-h-32 w-auto filter grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                </div>
                <div class="swiper-slide flex justify-center items-center p-4">
                    <img src="assets/images/ali_6.png" alt="Logo Aliado 6" class="max-h-32 w-auto filter grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                </div>
                <div class="swiper-slide flex justify-center items-center p-4">
                    <img src="assets/images/ali_7.png" alt="Logo Aliado 7" class="max-h-32 w-auto filter grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                </div>
                 <div class="swiper-slide flex justify-center items-center p-4">
                    <img src="assets/images/ali_8.png" alt="Logo Aliado 8" class="max-h-32 w-auto filter grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                </div>
                 <div class="swiper-slide flex justify-center items-center p-4">
                    <img src="assets/images/ali_9.jpg" alt="Logo Aliado 9" class="max-h-32 w-auto filter grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const alliesSwiper = new Swiper('.swiper-allies', {
        loop: true,
        grabCursor: true,
        spaceBetween: 20,
        autoplay: {
            delay: 2500, // Un poco más rápido para logos
            disableOnInteraction: false,
        },
        breakpoints: {
            // Vistas para móviles
            320: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            // Vistas para tablets
            768: {
                slidesPerView: 4,
                spaceBetween: 30
            },
            // Vistas para escritorio
            1024: {
                slidesPerView: 6,
                spaceBetween: 40
            }
        }
    });
});
</script>

<!-- Pie de pagina -->
<?php include_once '../inc/footer.php'; ?>

<!-- Scripts adicionales -->
<script>
    // Animación al hacer scroll
    document.addEventListener('DOMContentLoaded', function() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('section, .service-card').forEach(section => {
            observer.observe(section);
        });
    });
</script>


 <!-- Pie de pagina  -->
 <?php

        include_once '../inc/footer.php';
 ?>

</body>
</html>