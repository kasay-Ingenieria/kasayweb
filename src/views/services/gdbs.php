<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"> <!-- Define la codificación de caracteres para el documento -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Hace que el sitio sea responsive en dispositivos móviles -->
        <title>Bases de Datos Geográficas - Kasay Ingeniería</title> <!-- Título de la página que aparece en la pestaña del navegador -->        
        <script src="https://cdn.tailwindcss.com"></script> <!-- Incluye Tailwind CSS desde CDN para estilos utilitarios -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Incluye los iconos de Font Awesome desde CDN -->
        <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Preconecta a Google Fonts para mejorar el rendimiento de carga de fuentes -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Preconecta a Google Fonts (gstatic) -->
        <link rel="icon" href="../../../assets/images/favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet"> <!-- Importa la fuente Lora desde Google Fonts -->
        <link rel="icon" href="/kasayweb/assets/images/favicon.ico" type="image/x-icon">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <style>
            html {
                scroll-behavior: smooth; /* Habilita la animación de desplazamiento suave para toda la página */
            }   
            body {
                font-family: 'Inter', sans-serif;
            }
            .font-lora { 
                font-family: 'Lora', serif; 
            }
            .card-hover-effect { 
                transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out; 
            }
            .card-hover-effect:hover { 
                transform: translateY(-5px); 
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); 
            }
            [x-cloak] { 
                display: none !important; 
            }
            .section-title::after {
                content: '';
                display: block;
                width: 400px;
                height: 4px;
                margin: 16px auto 0;
                background: linear-gradient(90deg,rgb(8, 45, 63),rgb(0, 153, 177));
                border-radius: 2px;
            }         
            .font-lora { font-family: 'Lora', serif; } /* Aplica la fuente Lora a los elementos con la clase font-lora */
            .gradient-bg-hero { background: linear-gradient(120deg, rgba(0,124,240,0.9), rgba(0,154,186,0.8)); } /* Fondo degradado personalizado para la sección hero */
            .card-hover-effect { transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out; } /* Efecto de transición para las tarjetas al pasar el mouse */
            .card-hover-effect:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); } /* Eleva y agrega sombra a la tarjeta al hacer hover */
        </style>
    </head>
    <body class="bg-gray-100 text-gray-800">

        <?php 
        include_once '../../inc/navbar.php'; 
        ?>
        

        <section id="inicio" class="text-white">
            <div class="relative w-full h-[550px] overflow-auto">
                <!-- video de fondo-->
                <video autoplay muted="muted" loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
                    <source src="/kasayweb/assets/videos/gdbs/Bases_Datos.mp4" type="video/mp4">
                    Tu navegador no soporta video HTML5.
                </video>
                <!-- Capa oscura con transparencia para el video -->
                <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 z-10"></div>
                <!-- Texto inicial que se superpone al video -->
                <div class="relative z-20 flex items-center justify-center h-[400px] text-white text-3xl">
                    <div class="container mx-auto pt-52 text-center " data-aos="fade-down">
                        <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight whitespace-nowrap">  <!-- Título principal grande -->
                        Bases de Datos Geográficas <br class="hidden md:inline"> El corazón de su Información 
                        </h1>
                        <p class="text-lg md:text-2xl mb-8 max-w-2xl mx-auto  text-center font-lora"> <!-- Descripción debajo del título -->
                            Diseñamos, implementamos y gestionamos bases de datos espaciales robustas para potenciar su sistema de información geográfica.
                        </p>                        
                        <div class="container text-white/70 pt-0 grid grid-cols-3 gap-8 shadow-lg "data-aos="fade-up" data-aos-delay="200">
                            <div class="text-left text-xl mx-auto  hover:text-white">
                                <a href="#servicios">
                                    <p>&nbsp;<i class="fa-solid fa-gear mr-2"></i> Servicios</p>
                                    <hr class="border-t-2 border-gray-300 my-2">
                                    <p>Descubre cómo diseñamos, implementamos y administramos bases de datos espaciales a tu medida.
                                    </p>
                                </a>
                            </div>
                            <div class="text-left  text-xl mx-auto hover:text-white">
                                <a href="#tecnologias">
                                    <p>&nbsp;<i class="fa-solid fa-suitcase mr-2"></i> Tecnologias</p>
                                    <hr class="border-t-2 border-gray-300 my-2">
                                    <p>Explora los softwares que implementamos para la creación de nuestros proyectos.</p>
                                </a>
                            </div>
                            <div class="text-left text-xl mx-auto  hover:text-white">
                                <a href="#proceso">
                                    <p>&nbsp;<i class="fa-regular fa-circle-question mr-2"></i> Nuestro Proceso</p>
                                    <hr class="border-t-2 border-gray-300 my-2">
                                    <p>Conoce nuestra metodología de trabajo, desde el diagnóstico inicial hasta el soporte continuo.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- === FIN: SECCIÓN DE VIDEO === -->
        <!--
        <section class="gradient-bg-hero text-white pt-24 pb-16 md:pt-32 md:pb-24">
            <div class="container mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-12">
                <div class="md:w-1/2 text-center md:text-left">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                        Bases de Datos Geográficas: <br class="hidden md:inline"> El corazón de su información
                    </h1>
                    <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto md:mx-0 font-lora">
                        Diseñamos, implementamos y gestionamos bases de datos espaciales robustas para potenciar su sistema de información geográfica.
                    </p>
                    <a href="#solucion" class="bg-white text-sky-700 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg shadow-lg">
                        Descubra Nuestra Solución
                    </a>
                </div>
                <div class="md:w-1/2 flex justify-center md:justify-end">
                    <img src="/kasayweb/assets/images/bdg_hero_illustration.png" alt="Ilustración de base de datos geográfica" class="w-full max-w-lg rounded-lg shadow-2xl animate-fade-in">
                </div>
            </div>
        </section>
        -->
        <hr/>

        <section id="solucion" class="py-16 bg-white [scroll-margin-top:80px] h-[300px]"> <!-- Sección con descripción de la solución -->
            <div class="container mx-auto px-6"data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-sky-800 section-title">
                    La Infraestructura de Datos para su Territorio <!-- Título principal -->
                </h2>
                <div class="max-w-5xl mx-auto text-center text-lg leading-relaxed text-gray-700">
                    <p class="mb-8">
                    En Kasay Ingeniería, nos especializamos en el diseño e implementación de bases de datos espaciales para la gestión integral de información geográfica. Una base de datos geográfica sólida es el cimiento para cualquier Sistema de Información Geográfica (SIG) efectivo, permitiendo almacenar, organizar y consultar datos con un componente espacial.<!-- Descripción de servicios -->
                    </p>
                    <p>
                    Nuestras soluciones aseguran que su información geográfica sea accesible, segura, actualizada y estructurada de manera óptima para soportar sus necesidades de análisis, visualización y toma de decisiones. <!-- Beneficios -->
                    </p>
                </div>
            </div>
        </section>

        <!-- <hr/>  Separador visual -->
        <!-- Divisor SVG -->
            <div class="bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120"><path fill="#f0f9ff" fill-opacity="1" d="M0,64L80,80C160,96,320,128,480,128C640,128,800,96,960,80C1120,64,1280,64,1360,64L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
            </div>
        <!-- Sección de beneficios -->
        <section class="py-16 bg-blue-50">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-sky-800 section-title"data-aos="fade-up">
                    Beneficios de Contar con Bases de Datos Geográficas Robustas <!-- Título de beneficios -->
                </h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Tarjeta de beneficio 1 -->
                    <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-sky-500 mb-4 text-5xl">
                            <i class="fas fa-cubes"></i> <!-- Icono -->
                        </div>
                        <h3 class="text-2xl font-semibold mb-3 text-gray-700">Integración de Información</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Unifique datos de diversas fuentes (catastrales, ambientales, demográficos) en un único repositorio.
                        </p>
                    </div>
                    <!-- Tarjeta de beneficio 2 -->
                    <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-sky-500 mb-4 text-5xl">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h3 class="text-2xl font-semibold mb-3 text-gray-700">Consistencia y Fiabilidad</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Garantice la calidad, integridad y coherencia de sus datos geoespaciales.
                        </p>
                    </div>
                    <!-- Tarjeta de beneficio 3 -->
                    <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-sky-500 mb-4 text-5xl">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <h3 class="text-2xl font-semibold mb-3 text-gray-700">Consultas Ágiles y Potentes</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Recupere y analice grandes volúmenes de datos espaciales de forma rápida y eficiente.
                        </p>
                    </div>
                    <!-- Tarjeta de beneficio 4 -->
                    <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-sky-500 mb-4 text-5xl">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="text-2xl font-semibold mb-3 text-gray-700">Seguridad y Permisos</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Proteja su información sensible y controle el acceso de usuarios con sistemas de permisos robustos.
                        </p>
                    </div>
                    <!-- Tarjeta de beneficio 5 -->
                    <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-sky-500 mb-4 text-5xl">
                            <i class="fas fa-expand-alt"></i>
                        </div>
                        <h3 class="text-2xl font-semibold mb-3 text-gray-700">Escalabilidad y Crecimiento</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Diseñadas para crecer junto con su organización y el volumen de sus datos.
                        </p>
                    </div>
                    <!-- Tarjeta de beneficio 6 -->
                    <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-sky-500 mb-4 text-5xl">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h3 class="text-2xl font-semibold mb-3 text-gray-700">Soporte para la Toma de Decisiones</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Proporcione la base para análisis complejos que informen decisiones estratégicas.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <hr/> <!-- Separador visual -->

        <!-- Sección de servicios -->
        <section id="servicios" class="py-16 bg-white  [scroll-margin-top:100px]">
            <div class="container mx-auto px-8 h-[600px] justify-center flex flex-col justify-center items-center text-center" >
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-20 text-sky-800 section-title " data-aos="fade-up">
                    Nuestros Servicios en Bases de Datos Geográficas <!-- Título de servicios -->
                </h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <!-- Servicio 1 -->
                    <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                            <i class="fas fa-ruler-combined"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2 text-gray-800">Diseño de Esquemas de Datos</h3>
                            <p class="text-gray-600">
                            Creación de estructuras lógicas y físicas optimizadas para sus datos geoespaciales.
                            </p>
                        </div>
                    </div>
                    <!-- Servicio 2 -->
                    <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                            <i class="fas fa-database"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2 text-gray-800">Implementación y Configuración</h3>
                            <p class="text-gray-600">
                            Instalación y configuración de servidores de bases de datos espaciales (PostGIS, SQL Server Spatial, Oracle Spatial).
                            </p>
                        </div>
                    </div>
                    <!-- Servicio 3 -->
                    <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                            <i class="fas fa-exchange-alt"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2 text-gray-800">Migración y Transformación de Datos</h3>
                            <p class="text-gray-600">
                            Consolidamos sus datos existentes a la nueva estructura de base de datos, garantizando la integridad.
                            </p>
                        </div>
                    </div>
                    <!-- Servicio 4 -->
                    <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                            <i class="fas fa-compress-alt"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2 text-gray-800">Normalización y Depuración de Datos</h3>
                            <p class="text-gray-600">
                            Limpieza y estandarización para asegurar la calidad y consistencia de la información.
                            </p>
                        </div>
                    </div>
                    <!-- Servicio 5 -->
                    <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2 text-gray-800">Mantenimiento y Administración</h3>
                            <p class="text-gray-600">
                            Servicios de administración, optimización y respaldo para un rendimiento continuo.
                            </p>
                        </div>
                    </div>
                    <!-- Servicio 6 -->
                    <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                            <i class="fas fa-link"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2 text-gray-800">Integración con Aplicaciones SIG</h3>
                            <p class="text-gray-600">
                            Conectamos sus bases de datos con sus plataformas SIG y aplicaciones web para máxima funcionalidad.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr/> <!-- Separador visual -->

        <!-- Sección de tecnologías -->
        <section id="tecnologias" class="py-16 bg-white [scroll-margin-top:200px]">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-sky-800 section-title" data-aos="fade-up">
                    Tecnologías Que Dominamos <!-- Título de tecnologías -->
                </h2>
                <div class="max-w-4xl mx-auto flex flex-wrap justify-center items-center gap-8 md:gap-12" data-aos="fade-up" data-aos-delay="100">
                    <!-- Logo y nombre de tecnología 1 -->
                    <div class="flex flex-col items-center text-center p-4 filter grayscale-[0.8] hover:grayscale-0 transition-all duration-300">
                        <img src="/kasayweb/assets/images/gdbs/Postgresql.svg" alt="PostgreSQL Logo" class="h-20 mb-3">
                        <p class="font-semibold text-gray-700">PostgreSQL + PostGIS</p>
                    </div>
                    <!-- Logo y nombre de tecnología 2 -->
                    <div class="flex flex-col items-center text-center p-4 filter grayscale-[0.8] hover:grayscale-0 transition-all duration-300">
                        <img src="/kasayweb/assets/images/gdbs/Oracle.png" alt="Oracle Logo" class="h-20 mb-3">
                        <p class="font-semibold text-gray-700">Oracle Spatial</p>
                    </div>
                    <!-- Logo y nombre de tecnología 3 -->
                    <div class="flex flex-col items-center text-center p-4 filter grayscale-[0.8] hover:grayscale-0 transition-all duration-300">
                        <img src="/kasayweb/assets/images/gdbs/Sql.webp" alt="SQL Server Logo" class="h-20 mb-3">
                        <p class="font-semibold text-gray-700">SQL Server Spatial</p>
                    </div>
                    <!-- Logo y nombre de tecnología 4 -->
                    <div class="flex flex-col items-center text-center p-4 filter grayscale-[0.8] hover:grayscale-0 transition-all duration-300">
                        <img src="/kasayweb/assets/images/gdbs/Qgis.webp" alt="QGIS Logo" class="h-20 mb-3">
                        <p class="font-semibold text-gray-700">QGIS</p>
                    </div>
                    <!-- Logo y nombre de tecnología 5 -->
                    <div class="flex flex-col items-center text-center p-4 filter grayscale-[0.8] hover:grayscale-0 transition-all duration-300">
                        <img src="/kasayweb/assets/images/gdbs/Arcgis.webp" alt="ArcGIS Logo" class="h-20 mb-3">
                        <p class="font-semibold text-gray-700">ArcGIS</p>
                    </div>
                    <!-- Logo y nombre de tecnología 6 -->
                    <div class="flex flex-col items-center text-center p-4 filter grayscale-[0.8] hover:grayscale-0 transition-all duration-300">
                        <img src="/kasayweb/assets/images/gdbs/Global_Mapper.jpg" alt="Mapper Logo" class="h-20 mb-3">
                        <p class="font-semibold text-gray-700">Global Mapper</p>
                    </div>
                    <!-- Logo y nombre de tecnología 7 -->
                    <div class="flex flex-col items-center text-center p-4 filter grayscale-[0.8] hover:grayscale-0 transition-all duration-300">
                        <img src="/kasayweb/assets/images/gdbs/Autodesk.webp" alt="Autodesk Logo" class="h-20 mb-3">
                        <p class="font-semibold text-gray-700">Autodesk</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- <hr/>  Separador visual -->
        <!-- Divisor SVG -->
            <div class="bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120"><path fill="#f0f9ff" fill-opacity="1" d="M0,64L80,80C160,96,320,128,480,128C640,128,800,96,960,80C1120,64,1280,64,1360,64L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
            </div>
        <!-- Sección de proceso de trabajo -->
        <section id="proceso" class="py-16 bg-blue-50 [scroll-margin-top:50px]">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-sky-800 section-title" data-aos="fade-up">
                    Nuestro Proceso de Trabajo <!-- Título del proceso -->
                </h2>
                <div class="relative max-w-4xl mx-auto">
                    <div class="absolute left-1/2 w-0.5 h-full bg-sky-300 transform -translate-x-1/2"></div>
                    
                    <!-- Paso 1 -->
                    <div class="mb-8 flex justify-between items-center w-full" data-aos="fade-right">
                        <div class="w-2/5"></div>
                        <div class="z-10 bg-sky-500 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl">1</div>
                        <div class="w-2/5 bg-white p-6 rounded-lg shadow-md card-hover-effect">
                            <h3 class="text-xl font-semibold mb-2 text-sky-700">Diagnóstico y Planificación</h3>
                            <p class="text-gray-600">Analizamos sus necesidades y datos existentes para diseñar una arquitectura a medida.</p>
                        </div>
                    </div>
                    <!-- Paso 2 -->
                    <div class="mb-8 flex justify-between flex-row-reverse items-center w-full" data-aos="fade-left">
                        <div class="w-2/5"></div>
                        <div class="z-10 bg-sky-500 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl">2</div>
                        <div class="w-2/5 bg-white p-6 rounded-lg shadow-md card-hover-effect">
                            <h3 class="text-xl font-semibold mb-2 text-sky-700">Implementación y Migración</h3>
                            <p class="text-gray-600">Construimos la base de datos y migramos su información de forma segura y eficiente.</p>
                        </div>
                    </div>
                    <!-- Paso 3 -->
                    <div class="mb-8 flex justify-between items-center w-full" data-aos="fade-right">
                        <div class="w-2/5"></div>
                        <div class="z-10 bg-sky-500 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl">3</div>
                        <div class="w-2/5 bg-white p-6 rounded-lg shadow-md card-hover-effect">
                            <h3 class="text-xl font-semibold mb-2 text-sky-700">Integración y Pruebas</h3>
                            <p class="text-gray-600">Conectamos la base de datos con sus aplicaciones y realizamos pruebas exhaustivas.</p>
                        </div>
                    </div>
                    <!-- Paso 4 -->
                    <div class="flex justify-between flex-row-reverse items-center w-full" data-aos="fade-left">
                        <div class="w-2/5"></div>
                        <div class="z-10 bg-sky-500 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl">4</div>
                        <div class="w-2/5 bg-white p-6 rounded-lg shadow-md card-hover-effect">
                            <h3 class="text-xl font-semibold mb-2 text-sky-700">Capacitación y Soporte</h3>
                            <p class="text-gray-600">Ofrecemos formación a su equipo y soporte continuo para garantizar el éxito del proyecto.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr/> <!-- Separador visual -->

        <!-- Sección de preguntas frecuentes (FAQ) -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-6" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-sky-800 section-title">
                    Preguntas Frecuentes <!-- Título FAQ -->
                </h2>
                <div class="max-w-3xl mx-auto space-y-4">
                    <!-- Pregunta 1 -->
                    <div x-data="{ open: false }" class="border-b-2 border-gray-200 pb-4">
                    <button @click="open = !open" class="w-full flex justify-between items-center text-left text-xl font-semibold text-sky-800 focus:outline-none">
                        <span>¿Qué es PostGIS y por qué lo usan?</span>
                        <i class="fas" :class="{ 'fa-chevron-down': !open, 'fa-chevron-up': open }"></i>
                    </button>
                    <div x-show="open" x-cloak class="mt-3 text-gray-600 leading-relaxed">
                        <p>PostGIS es una extensión para la base de datos PostgreSQL que le añade soporte para objetos geográficos. La elegimos por ser una solución de código abierto extremadamente potente, robusta y estandarizada, ideal para la mayoría de los proyectos SIG.</p>
                    </div>
                    </div>
                    <!-- Pregunta 2 -->
                    <div x-data="{ open: false }" class="border-b-2 border-gray-200 pb-4">
                    <button @click="open = !open" class="w-full flex justify-between items-center text-left text-xl font-semibold text-sky-800 focus:outline-none">
                        <span>¿Pueden migrar mis datos desde archivos shapefile o CAD?</span>
                        <i class="fas" :class="{ 'fa-chevron-down': !open, 'fa-chevron-up': open }"></i>
                    </button>
                    <div x-show="open" x-cloak class="mt-3 text-gray-600 leading-relaxed">
                        <p>¡Absolutamente! Parte de nuestro servicio de migración incluye la extracción, transformación y carga (ETL) de datos desde formatos comunes como Shapefile, GeoJSON, KML, DWG/DXF y hojas de cálculo, asegurando la correcta integración en la nueva base de datos espacial.</p>
                    </div>
                    </div>
                    <!-- Pregunta 3 -->
                    <div x-data="{ open: false }" class="border-b-2 border-gray-200 pb-4">
                    <button @click="open = !open" class="w-full flex justify-between items-center text-left text-xl font-semibold text-sky-800 focus:outline-none">
                        <span>¿Qué nivel de seguridad ofrecen para los datos?</span>
                        <i class="fas" :class="{ 'fa-chevron-down': !open, 'fa-chevron-up': open }"></i>
                    </button>
                    <div x-show="open" x-cloak class="mt-3 text-gray-600 leading-relaxed">
                        <p>La seguridad es nuestra prioridad. Implementamos un sistema de roles y permisos a nivel de base de datos que controla quién puede ver y editar la información. Además, seguimos las mejores prácticas para proteger la infraestructura contra accesos no autorizados.</p>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <hr/> <!-- Separador visual -->


        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script> <!-- Script para interactividad FAQ -->

        <script>
            // Inicializa la librería AOS para las animaciones en scroll
            AOS.init({
                duration: 800, // Duración de la animación en milisegundos
                once: false, // La animación solo ocurre una vez
            });
        </script>
        
        <?php include_once '../../inc/footer.php'; ?> <!-- Inclusión del pie de página -->        
    </body>
</html>

