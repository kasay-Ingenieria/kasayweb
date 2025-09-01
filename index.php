<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasay Ingeneria</title>
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style_inicio.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>

    <style>

    </style>
</head>

<!-- Estilo asignado al cuarpo del archivo inicio.php -->

<body class="bg-gray-100 text-gray-800">

    <!-- barra de navegación -->
    <?php
    include_once 'src/inc/navbar.php';
    ?>

 <!-- Sección de inicio con video de fondo y texto -->
<section id="inicio" class="text-white">
  <div class="relative w-full h-screen overflow-hidden">

    <!-- Video de fondo -->
    <video autoplay muted="muted" loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
      <source src="/kasayweb/assets/videos/kasay-solutions.mp4" type="video/mp4">
      Tu navegador no soporta video HTML5.
    </video>

    <!-- Capa oscura -->
    <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 z-10"></div>

    <!-- Contenido principal -->
    <div class="relative z-20 flex items-center justify-center h-full text-white">
      <div class="container mx-auto px-4 pt-28 sm:pt-36 md:pt-40 text-center">

        <!-- Título -->
        <h1 class="text-3xl sm:text-5xl md:text-8xl font-bold mb-6 leading-tight">
          Soluciones geolocalizadas
        </h1>

        <!-- Subtítulo -->
        <p class="text-base sm:text-xl md:text-4xl mb-8 max-w-4xl mx-auto">
          Experiencia Corporativa y Colaboraciones Estratégicas.
        </p>

        <!-- Botón -->
        <a href="#soluciones_integrales"
          class="bg-white text-sky-700 font-bold py-2 sm:py-3 px-6 sm:px-8 rounded-full hover:bg-gray-200 transition duration-300 text-base sm:text-lg">
          Descubre Más
        </a>

        <!-- Sección inferior con 3 bloques -->
        <div class="hidden xl:grid mt-28 grid-cols-3">

          <!-- Bloque Servicios -->
          <div class="text-left text-base sm:text-lg md:text-xl mx-auto hover:text-white max-w-xs">
            <a href="#seccion_carrusel">
              <p><i class="fa-solid fa-gear mr-2"></i> Servicios</p>
              <hr class="border-t-2 border-gray-300 my-2">
              <p>Conoce nuestro portafolio de consultoría, análisis de datos y tecnología geoespacial.</p>
            </a>
          </div>

          <!-- Bloque Proyectos -->
          <div class="text-left text-base sm:text-lg md:text-xl mx-auto hover:text-white max-w-xs">
            <a href="#proyectos_inicio">
              <p><i class="fa-solid fa-suitcase mr-2"></i> Proyectos</p>
              <hr class="border-t-2 border-gray-300 my-2">
              <p>Explora nuestros casos de éxito y soluciones implementadas en diversos sectores.</p>
            </a>
          </div>

          <!-- Bloque Apoyo -->
          <div class="text-left text-base sm:text-lg md:text-xl mx-auto hover:text-white max-w-xs">
            <a href="#nosotros">
              <p><i class="fa-regular fa-circle-question mr-2"></i> Apoyo</p>
              <hr class="border-t-2 border-gray-300 my-2">
              <p>Accede a nuestra base de conocimiento o contacta a nuestro equipo de asistencia técnica.</p>
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>


    <!-- Sección de soluciones integrales -->
    <!-- Esta sección muestra las soluciones integrales que ofrece la empresa -->
    <section id="soluciones_integrales" class="pt-32 pb-24 bg-white [scroll-margin-top:60px]">

        <!-- Contenedor Titulos y descripción -->
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <span
                    class="inline-block px-4 py-1 bg-sky-100 text-sky-600 rounded-full text-sm font-semibold mb-4">SOLUCIONES
                    INTEGRALES</span>
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Tecnología Geoespacial Avanzada</h2>
                <p class="text-xl text-gray-600 text-center max-w-3xl mx-auto">Ofrecemos servicios de Consultoría en Gestión
                    Catastral, comprometidos en proporcionar las capacidades técnicas, tecnológicas y administrativas
                    necesarias.</p>
            </div>

            <!-- Contenedor de tarjetas de servicios -->
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div
                    class="group bg-gradient-to-br from-sky-50 to-blue-50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-500 group">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6 transition-all duration-500 group-hover:bg-blue-500">
                        <i
                            class="fas fa-map-marked-alt text-blue-500 text-2xl transition-all duration-500 group-hover:text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Gestión Catastral</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">Organización y Administración Integral de la
                        Información Territorial para entidades gubernamentales y municipios.</p>
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

                <div
                    class="bg-gradient-to-br from-sky-50 to-blue-50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-500 group">
                    <div
                        class="w-16 h-16 bg-teal-100 rounded-xl flex items-center justify-center mb-6 transition-all duration-500 group-hover:bg-teal-500">
                        <i
                            class="fas fa-layer-group text-teal-500 text-2xl transition-all duration-500 group-hover:text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Consultoría Especializada</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">Habilitación de municipios como Gestores Catastrales y
                        planificación de la prestación del servicio público.</p>
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

                <div
                    class="bg-gradient-to-br from-sky-50 to-blue-50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-500 group">
                    <div
                        class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mb-6 transition-all duration-500 group-hover:bg-purple-500">
                        <i
                            class="fas fa-cubes text-purple-500 text-2xl transition-all duration-500 group-hover:text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Sistema SaaS</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">Gestión Catastral bajo la modalidad de Software como
                        Servicio con tecnología de punta y disponibilidad 24/7.</p>
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


    <!-- Sección de servicios -->
    <!-- Esta sección muestra los servicios avanzados que ofrece la empresa -->
    <section id="seccion_carrusel" class="relative pb-2 pt-8 scroll-mt-[60px] bg-white">

        <!-- Contenedor Titulos y descripción -->
        <div class="container mx-auto">
            <div class="text-center mb-16">
                <span
                    class="inline-block px-4 py-1 bg-sky-100 text-sky-600 rounded-full text-sm font-semibold mb-4">Servicios
                    Avanzados</span>
                <h2 class="text-3xl font-bold text-gray-800 ">Servicios y Soluciones Tecnologícas</h2>
            </div>
            <!-- Fondo blanco para que la imagen se vea mas clara -->
            <div id="carrusel-bg" class="w-full h-full bg-white transition-all duration-700">

            </div>
        </div>

        <!-- Carrusel de servicios -->
        <div class="relative min-h-[580px] flex items-center justify-center z-20">
            <!-- Contenedor de Diapositivas -->
            <div class="slide" style="left: 80px; ">
                <!-- Diapositiva 1 -->
                <div class="item absolute top-1/2 -translate-y-1/2 w-[200px] h-[300px] rounded-2xl bg-cover bg-center inline-block transition-all duration-500"
                    style="background-image: url('/kasayweb/assets/images/servicios/servicio_gdbs.png');">
                    <!-- Título de la diapositiva en el cuadro pequeño -->
                    <span
                        class="thumbnail-title font-bold text-2xl cursor-pointer text-white/80 inline-block pt-[50px] text-center w-full">
                        <span class="bg-gray-400/70 py-2 rounded-lg inline-block">
                            Bases de Datos Geográficas
                        </span>
                    </span>
                    <!-- Contenido de la diapositiva -->
                    <div class="content absolute top-1/2 left-[40px] sm:left-[140px] md:left-[180px] lg:left-[170px] w-[320px] sm:w-[300px] md:w-[350px] lg:w-[900px] text-left text-gray-700 -translate-y-1/2 hidden font-sans">

                        <div class="name text-4xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl uppercase font-bold w-full max-w-[700px]">
                            Bases de Datos Geográficas
                        </div>

                        <div class="des mt-2.5 text-base sm:text-sm md:text-lg lg:text-xl pt-6 max-w-[700px] mb-5">
                            Diseño e implementación de bases de datos espaciales para la gestión de información
                            geográfica.
                        </div>

                        <a href="src/views/services/gdbs.php"
                            class="px-5 py-2.5 bg-sky-400 text-white font-bold hover:bg-sky-300 hover:text-gray-700 rounded cursor-pointer inline-block">
                            Más información →
                        </a>

                    </div>
                </div>
                <!-- Diapositiva 2 -->
                <div class="item absolute top-1/2 -translate-y-1/2 w-[200px] h-[300px] rounded-2xl bg-cover bg-center inline-block transition-all duration-500"
                    style="background-image: url('/kasayweb/assets/images/servicios/servicio_360.png');">
                    <!-- Título de la diapositiva en el cuadro pequeño -->
                    <span
                        class="thumbnail-title font-bold text-2xl cursor-pointer text-white/80 inline-block pt-[60px] text-center w-full">
                        <span class="bg-gray-400/70 py-2 rounded-lg inline-block">
                            Visores 360° Inmersivos
                        </span>
                    </span>
                    <!-- Contenido de la diapositiva -->
                    <div class="content absolute top-1/2 left-[40px] sm:left-[140px] md:left-[180px] lg:left-[170px] w-[320px] sm:w-[300px] md:w-[350px] lg:w-[900px] text-left text-gray-700 -translate-y-1/2 hidden font-sans">

                        <div class="name text-4xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl uppercase font-bold w-full max-w-[700px]">
                            Visores 360° Inmersivos
                        </div>

                        <div class="des mt-2.5 text-base sm:text-sm md:text-lg lg:text-xl pt-6 max-w-[700px] mb-5">
                            Explore entornos como si estuviera allí. Nuestros visores 360° ofrecen una experiencia
                            inmersiva para inspección de sitios o planificación de proyectos.
                        </div>

                        <a href="src/views/services/visor360.php"
                            class="px-5 py-2.5 bg-sky-400 text-white font-bold hover:bg-sky-300 hover:text-gray-700 rounded cursor-pointer inline-block">
                            Más información →
                        </a>

                    </div>
                </div>
                <!-- Diapositiva 3 -->
                <div class="item absolute top-1/2 -translate-y-1/2 w-[200px]  h-[300px] rounded-2xl bg-cover bg-center inline-block transition-all duration-500"
                    style="background-image: url('/kasayweb/assets/images/ortofoto.png');">
                    <!-- Título de la diapositiva en el cuadro pequeño -->
                    <span
                        class="thumbnail-title font-bold text-2xl cursor-pointer text-white/80 inline-block pt-[60px] text-center w-full">
                        <span class="bg-gray-400/70 py-2 rounded-lg inline-block">
                            Ortofotos 2D y Mapas
                        </span>
                    </span>
                    <!-- Contenido de la diapositiva -->
                    <div class="content absolute top-1/2 left-[40px] sm:left-[140px] md:left-[180px] lg:left-[170px] w-[320px] sm:w-[300px] md:w-[350px] lg:w-[900px] text-left text-white -translate-y-1/2 hidden font-sans">

                        <div class="name text-4xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl uppercase font-bold w-full max-w-[700px]">
                            Visores de Ortofotos 2D y Mapas
                        </div>

                        <div class="des mt-2.5 text-base sm:text-sm md:text-lg lg:text-xl pt-6 max-w-[700px] mb-5">
                            Navegue por mapas de alta resolución y ortofotos actualizadas para un análisis preciso de su
                            territorio en 2D.
                        </div>

                        <a href="src/views/services/ortofoto.php"
                            class="px-5 font-bold py-2.5 hover:bg-white bg-blue-400 text-white hover:text-black rounded cursor-pointer inline-block">
                            Más información →
                        </a>

                    </div>
                </div>
                <!-- Diapositiva 4 -->
                <div class="item absolute top-1/2 -translate-y-1/2 w-[200px] h-[300px] rounded-2xl bg-cover bg-center inline-block transition-all duration-500"
                    style="background-image: url('/kasayweb/assets/images/servicios/geoks.png');">
                    <!-- Título de la diapositiva en el cuadro pequeño -->
                    <span
                        class="thumbnail-title font-bold cursor-pointer text-2xl text-white/80 inline-block pt-[60px] text-center w-full">
                        <span class="bg-gray-400/70 py-2 rounded-lg inline-block">
                            Modelos 3D Avanzados
                        </span>
                    </span>
                    <!-- Contenido de la diapositiva -->
                    <div class="content absolute top-1/2 left-[40px] sm:left-[140px] md:left-[180px] lg:left-[170px] w-[320px] sm:w-[300px] md:w-[350px] lg:w-[900px] text-left text-white -translate-y-1/2 hidden font-sans">

                        <div class="name text-4xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl uppercase font-bold w-full max-w-[700px]">
                            Visores de Modelos 3D Avanzados
                        </div>

                        <div class="des mt-2.5 text-base sm:text-sm md:text-lg lg:text-xl pt-6 max-w-[700px] mb-5">
                            Visualice con detalle modelos 3D de edificaciones, infraestructuras y terrenos. Perfectos
                            para urbanismo, arquitectura e ingeniería.
                        </div>

                        <a href="src/views/services/modelo3d.php"
                            class="px-5 py-2.5 hover:bg-white font-bold bg-blue-400 text-white hover:text-black rounded cursor-pointer inline-block">
                            Más información →
                        </a>

                    </div>
                </div>
                <!-- Diapositiva 5 -->
                <div class="item absolute top-1/2 -translate-y-1/2 w-[200px] h-[300px] rounded-2xl bg-cover bg-center inline-block transition-all duration-500"
                    style="background-image: url('/kasayweb/assets/images/servicios/servicios_cartos.png');">
                    <!-- Título de la diapositiva en el cuadro pequeño -->
                    <span
                        class="thumbnail-title font-bold cursor-pointer text-2xl text-white/80 inline-block pt-[60px] text-center w-full">
                        <span class="bg-gray-400/70 py-2 rounded-lg inline-block">
                            Cartografía Digital
                        </span>
                    </span>
                    <!-- Contenido de la diapositiva -->
                    <div class="content absolute top-1/2 left-[40px] sm:left-[140px] md:left-[180px] lg:left-[170px] w-[320px] sm:w-[300px] md:w-[350px] lg:w-[900px] text-left text-white -translate-y-1/2 hidden font-sans">

                        <div class="name text-4xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl uppercase font-bold w-full max-w-[700px]">
                            Cartografía Digital
                        </div>

                        <div class="des mt-2.5 text-base sm:text-sm md:text-lg lg:text-xl pt-6 max-w-[700px] mb-5">
                            Producción y actualización de cartografía digital para una precisa representación del
                            territorio.
                        </div>

                        <a href="src/views/services/carto_digital.php"
                            class="px-5 py-2.5 hover:bg-white font-bold bg-blue-400 text-white hover:text-black rounded cursor-pointer inline-block">
                            Más información →
                        </a>

                    </div>
                </div>
                <!-- Diapositiva 6 -->
                <div class="item absolute top-1/2 -translate-y-1/2 w-[200px] h-[300px] rounded-2xl bg-cover bg-center inline-block transition-all duration-500"
                    style="background-image: url('/kasayweb/assets/images/servicios/servicios_analisis.png');">
                    <!-- Título de la diapositiva en el cuadro pequeño -->
                    <span
                        class="thumbnail-title font-bold cursor-pointer text-2xl text-white/80 inline-block pt-[60px] text-center w-full">
                        <span class="bg-gray-400/70 py-2 rounded-lg inline-block">
                            Análisis Territorial
                        </span>
                    </span>
                    <!-- Contenido de la diapositiva -->
                    <div class="content absolute top-1/2 left-[40px] sm:left-[140px] md:left-[180px] lg:left-[170px] w-[320px] sm:w-[300px] md:w-[350px] lg:w-[900px] text-left text-gray-700 -translate-y-1/2 hidden font-sans">

                        <div class="name text-4xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl uppercase font-bold w-full max-w-[700px]">
                            Análisis Territorial
                        </div>

                        <div class="des mt-2.5 text-base sm:text-sm md:text-lg lg:text-xl pt-6 max-w-[700px] mb-5">
                            Análisis espacial y estudios territoriales para la toma de decisiones estratégicas.
                        </div>
                        <a href="src/views/services/analisis_territorial.php"
                            class="px-5 py-2.5 bg-sky-400 font-bold hover:bg-sky-300 hover:text-gray-700 text-white  rounded cursor-pointer inline-block">
                            Más información →
                        </a>

                    </div>
                </div>
                <!-- Diapositiva 7 -->
                <div class="item absolute top-1/2 -translate-y-1/2 w-[200px] h-[300px] rounded-2xl bg-cover bg-center inline-block transition-all duration-500"
                    style="background-image: url('/kasayweb/assets/images/servicios/servicios_operacion4.png');">
                    <!-- Título de la diapositiva en el cuadro pequeño -->
                    <span
                        class="thumbnail-title cursor-pointer font-bold text-2xl text-white/80 inline-block pt-[60px] text-center w-full">
                        <span class="bg-gray-700/70 py-2 rounded-lg inline-block">
                            Operación Catastral
                        </span>
                    </span>
                    <!-- Contenido de la diapositiva -->
                    <div class="content absolute top-1/2 left-[40px] sm:left-[140px] md:left-[180px] lg:left-[170px] w-[320px] sm:w-[300px] md:w-[350px] lg:w-[900px] text-left text-gray-700 -translate-y-1/2 hidden font-sans">

                        <div class="name text-4xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl uppercase font-bold w-full max-w-[700px]">
                            Operación Catastral
                        </div>

                        <div class="des mt-2.5 text-base sm:text-sm md:text-lg lg:text-xl pt-6 max-w-[700px] mb-5">
                            Captura Integral de Datos Físicos, Jurídicos y Económicos en el Terreno.
                        </div>

                        <a href="src/views/services/op_catastral.php"
                            class="px-5 py-2.5 bg-sky-400 font-bold hover:bg-sky-300 hover:text-gray-700 text-white  rounded cursor-pointer inline-block">
                            Más información →
                        </a>

                    </div>
                </div>
                <!-- Diapositiva 8 -->
                <div class="item absolute top-1/2 -translate-y-1/2 w-[200px] h-[300px] rounded-2xl bg-cover bg-center inline-block transition-all duration-500"
                    style="background-image: url('/kasayweb/assets/images/servicios/servicios_consultoria.png');">
                    <!-- Título de la diapositiva en el cuadro pequeño -->
                    <span
                        class="thumbnail-title cursor-pointer font-bold text-2xl text-white/80 inline-block pt-[60px] text-center w-full">
                        <span class="bg-gray-700/70 py-2 rounded-lg inline-block">
                            Consultoría Especializada
                        </span>
                    </span>
                    <!-- Contenido de la diapositiva -->
                    <div class="content absolute top-1/2 left-[40px] sm:left-[140px] md:left-[180px] lg:left-[170px] w-[320px] sm:w-[300px] md:w-[350px] lg:w-[900px] text-left text-white -translate-y-1/2 hidden font-sans">

                        <div class="name text-4xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl uppercase font-bold w-full max-w-[700px]">
                            Consultoría Especializada
                        </div>

                        <div class="des mt-2.5 text-base sm:text-sm md:text-lg lg:text-xl pt-6 max-w-[700px] mb-5">
                            Asesoría para la habilitación del municipio como Gestor Catastral y planificación del
                            servicio público.
                        </div>

                        <a href="src/views/services/consultoria.php"
                            class="px-5 py-2.5 bg-sky-100 font-bold hover:bg-sky-400 hover:text-gray-700 text-black  rounded cursor-pointer inline-block">
                            Más información →
                        </a>

                    </div>
                </div>
                <!-- Diapositiva 9 -->
                <!--
                <div class="item absolute top-1/2 -translate-y-1/2 w-[200px] h-[300px] rounded-2xl bg-cover bg-center inline-block transition-all duration-500"
                    style="background-image: url('/kasayweb/assets/images/servicios/servicios_saas.png');">
                    <!-- Título de la diapositiva en el cuadro pequeño -->
                   <!-- <span
                        class="thumbnail-title cursor-pointer font-bold text-2xl text-white/80 inline-block pt-[160px] text-center w-full">
                        <span class="bg-gray-700/70 py-2 rounded-lg inline-block">
                            Gestión Catastral SaaS
                        </span>
                    </span>
                    <!-- Contenido de la diapositiva -->
                 <!--   <div
                        class="content absolute top-1/2 left-[200px] w-[300px] text-left text-gray-700 -translate-y-1/2 hidden font-sans">
                        <div class="name text-6xl uppercase font-bold w-[700px] max-w-none">
                            Gestión Catastral SaaS
                        </div>

                        <div class="des mt-2.5 text-xl pt-6 w-[700px] mb-5">
                            Sistema de Gestión Catastral bajo la modalidad de Software como Servicio (SaaS).
                        </div>

                        <a href="src/views/services/gestion_saas.php"
                            class="px-5 py-2.5 bg-sky-400 font-bold hover:bg-sky-300 hover:text-gray-700 text-white  rounded cursor-pointer inline-block">
                            Más información →
                        </a>

                    </div>
                </div>
                -->

                <!-- Diapositiva 10 -->
                <div class="item absolute top-1/2 -translate-y-1/2 w-[200px] h-[300px] rounded-2xl bg-cover bg-center inline-block transition-all duration-500"
                    style="background-image: url('/kasayweb/assets/images/servicios/servicio_gps.png');">
                    <!-- Título de la diapositiva en el cuadro pequeño -->
                    <span
                        class="thumbnail-title cursor-pointer font-bold text-2xl text-white/80 inline-block pt-[60px] text-center w-full">
                        <span class="bg-gray-700/70 py-2 rounded-lg inline-block">
                            Seguimiento GPS
                        </span>
                    </span>
                    <!-- Contenido de la diapositiva -->
                    <div class="content absolute top-1/2 left-[40px] sm:left-[140px] md:left-[180px] lg:left-[170px] w-[320px] sm:w-[300px] md:w-[350px] lg:w-[900px] text-left text-white -translate-y-1/2 hidden font-sans">

                        <div class="name text-4xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl uppercase font-bold w-full max-w-[700px]">
                            Seguimiento GPS
                        </div>

                        <div class="des mt-2.5 text-base sm:text-sm md:text-lg lg:text-xl pt-6 max-w-[700px] mb-5">
                            Implementación de sistemas de seguimiento vehicular y de activos con tecnología GPS.
                        </div>

                        <a href="src/views/services/seguimiento_gps.php"
                            class="px-5 py-2.5 bg-sky-400 font-bold hover:bg-sky-100 hover:text-gray-700 text-white  rounded cursor-pointer inline-block">
                            Más información →
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <!-- Botónes para el carrusel -->
        <div class="button absolute bottom-28 w-full text-center z-30">
            <button class="prev w-16 h-12 cursor-pointer mx-1.5 transition-all duration-300 hover:text-white100/70">
                <i class="fa-regular fa-circle-left text-4xl text-sky-700/60 rounded-lg hover:text-sky-700/40"></i>
            </button>
            <button class="next w-16 h-12 cursor-pointer mx-1.5 transition-all duration-300 ">
                <i class="fa-regular fa-circle-right text-4xl text-sky-600/60 rounded-lg hover:text-sky-700/40"></i>
            </button>
        </div>

    </section>

    <!-- Sección de proyectos -->
    <!-- Esta sección muestra los proyectos destacados de la empresa -->
    <section id="proyectos_inicio" class="pt-24 pb-44 bg-white">

        <div class="container mx-auto px-6">
            <!-- Contenedor Titulos y descripción -->
            <div class="text-center mb-16">
                <span
                    class="inline-block px-4 py-1 bg-blue-100 text-blue-600 rounded-full text-sm font-semibold mb-4">CASOS
                    DE ÉXITO</span>
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Nuestros Proyectos</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Implementaciones exitosas que han transformado la
                    gestión territorial en diversos municipios y entidades.</p>
            </div>

            <!-- Contenedor de tarjetas de proyectos -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Tarjeta de proyecto 1 -->
                <div class="group overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500">
                    <!-- Video de fondo del proyecto -->
                    <div class="relative h-64 overflow-hidden">
                        <video autoplay muted="muted" loop playsinline
                            class="absolute top-0 left-0 w-full h-full object-cover z-0">
                            <source src="/kasayweb/assets/videos/monteria.mp4" type="video/mp4">
                            Tu navegador no soporta video HTML5.
                        </video>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-blue-900/70 to-transparent flex items-end p-6">
                            <h3 class="text-2xl font-bold text-white">Montería, Córdoba.</h3>
                        </div>
                    </div>
                    <!-- Contenedor de información del proyecto -->
                    <div class="p-6 bg-white">
                        <p class="text-gray-600 mb-4">Actualización catastral de el municipio, 2023</p>
                        <div class="flex justify-between items-center">
                            <span
                                class="inline-block px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs font-semibold">Gestión
                                Catastral</span>
                            <a href="#" class="text-blue-500 hover:text-blue-700 font-medium">Ver caso →</a>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de proyecto 2 -->
                <div class="group overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500">
                    <!-- Video de fondo del proyecto -->
                    <div class="relative h-64 overflow-hidden">
                        <video autoplay muted="muted" loop playsinline
                            class="absolute top-0 left-0 w-full h-full object-cover z-0">
                            <source src="/kasayweb/assets/videos/sesquile.mp4" type="video/mp4">
                            Tu navegador no soporta video HTML5.
                        </video>
                        <!-- Contenedor de información del proyecto -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-teal-900/70 to-transparent flex items-end p-6">
                            <h3 class="text-2xl font-bold text-white">Sesquilé, Cundinamarca.</h3>
                        </div>
                    </div>

                    <div class="p-6 bg-white">
                        <p class="text-gray-600 mb-4">Actualización catastral de el municipio, 2022</p>

                        <div class="flex justify-between items-center">
                            <span
                                class="inline-block px-3 py-1 bg-teal-100 text-teal-600 rounded-full text-xs font-semibold">Gestión
                                Catastral</span>
                            <a href="#" class="text-teal-500 hover:text-teal-700 font-medium">Ver caso →</a>
                        </div>
                    </div>

                </div>
                <!-- Tarjeta de proyecto 3 -->
                <div class="group overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500">
                    <!-- Imagen de fondo del proyecto -->
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                            alt="Análisis Territorial"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <!-- Contenedor de información del proyecto -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-purple-900/70 to-transparent flex items-end p-6">
                            <h3 class="text-2xl font-bold text-white">Zipaquira, Cundinamarca.</h3>
                        </div>

                    </div>

                    <div class="p-6 bg-white">
                        <p class="text-gray-600 mb-4">Actualización catastral de el municipio, 2024.</p>
                        <div class="flex justify-between items-center">
                            <span
                                class="inline-block px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs font-semibold">Gestión
                                Catastral</span>
                            <a href="#" class="text-purple-500 hover:text-purple-700 font-medium">Ver caso →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sección de nosotros -->
    <!-- Esta sección presenta a la empresa y su equipo -->
    <section id="nosotros" class="py-20 bg-gradient-to-r from-sky-50 to-blue-50">
        <div class="container mx-auto px-0">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <!-- Imagen del logo -->
                <div class="lg:w-1/2 pr-16 pl-16 sm:pl-0">
                    <div class="relative rounded-3xl sm:left-8 overflow-hidden shadow-2xl">
                        <img src="/kasayweb/assets/images/logoj.png" alt="Equipo Kasay Ingeniería"
                            class="w-full max-w-[56rem] mx-auto h-auto max-h-[72rem] object-contain">

                    </div>
                </div>
                <!-- Contenido de la sección -->
                <div class="lg:w-1/2 text-center lg:text-left">
                    <span
                        class="inline-block px-4 py-1 bg-blue-100 text-blue-600 rounded-full text-sm font-semibold mb-4">SOBRE
                        NOSOTROS</span>
                    <h2 class="text-4xl font-bold text-gray-800 mb-6">Kasay <span
                            class="gradient-text">Ingeniería</span></h2>
                    <p class="text-lg text-gray-600 mb-12 px-2 text-center leading-relaxed">
                        Somos especialistas en Consultoría Municipal y Tecnología Geoespacial, trabajando en estrecha
                        colaboración con entidades territoriales y empresas para definir soluciones tecnológicas y
                        realizar análisis geográficos de alta precisión.
                    </p>
                    <!-- Lista de características -->
                    <div class="grid lg:text-left text-left grid-cols-1 sm:text-left md:grid-cols-2 gap-6 mb-8 ml-12 sm:ml-0">
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
                    <br />

                    <a href="src/views/contacto.php"
                        class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-gradient-to-r from-sky-500 to-blue-600 hover:from-sky-600 hover:to-blue-700 transition-all duration-300">
                        Contactar al equipo
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Sección de aliados -->
    <!-- Esta sección muestra los aliados estratégicos de la empresa -->
    <section id="aliados" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <!-- Contenedor Titulos y descripción -->
            <div class="text-center mb-16">
                <span
                    class="inline-block px-4 py-1 bg-gray-100 text-gray-600 rounded-full text-sm font-semibold mb-4">COLABORACIONES</span>
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Nuestros <span class="gradient-text">Aliados
                        Estratégicos</span></h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Trabajamos con organizaciones líderes para ofrecer
                    soluciones robustas y confiables.</p>
            </div>
            <!-- Carrusel de aliados -->
            <div class="swiper-allies overflow-hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide flex justify-center items-center p-4">
                        <img src="/kasayweb/assets/images/ali_1.jpeg" alt="Logo Aliado 1"
                            class="max-h-32 w-auto filter grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                    </div>
                    <div class="swiper-slide flex justify-center items-center p-4">
                        <img src="/kasayweb/assets/images/ali_2.png" alt="Logo Aliado 2"
                            class="max-h-32 w-auto filter grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                    </div>
                    <div class="swiper-slide flex justify-center items-center p-4">
                        <img src="/kasayweb/assets/images/ali_3.png" alt="Logo Aliado 3"
                            class="max-h-32 w-auto filter grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                    </div>
                    <div class="swiper-slide flex justify-center items-center p-4">
                        <img src="/kasayweb/assets/images/ali_4.png" alt="Logo Aliado 4"
                            class="max-h-32 w-auto filter grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                    </div>
                    <div class="swiper-slide flex justify-center items-center p-4">
                        <img src="/kasayweb/assets/images/ali_5.png" alt="Logo Aliado 5"
                            class="max-h-32 w-auto filter grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                    </div>
                    <div class="swiper-slide flex justify-center items-center p-4">
                        <img src="/kasayweb/assets/images/ali_6.png" alt="Logo Aliado 6"
                            class="max-h-32 w-auto filter grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                    </div>
                    <div class="swiper-slide flex justify-center items-center p-4">
                        <img src="/kasayweb/assets/images/ali_7.png" alt="Logo Aliado 7"
                            class="max-h-32 w-auto filter grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                    </div>
                    <div class="swiper-slide flex justify-center items-center p-4">
                        <img src="/kasayweb/assets/images/ali_8.png" alt="Logo Aliado 8"
                            class="max-h-32 w-auto filter grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                    </div>
                    <div class="swiper-slide flex justify-center items-center p-4">
                        <img src="/kasayweb/assets/images/ali_9.jpg" alt="Logo Aliado 9"
                            class="max-h-32 w-auto filter grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php
    include_once 'src/inc/footer.php';
    ?>
    <!-- Scripts -->
    <script src="assets/js/scripts_inicio.js"></script>

</body>

</html>