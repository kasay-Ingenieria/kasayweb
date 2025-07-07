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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
    <style>
       .hero-bg {
        background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://wallpapers.com/images/high/blue-geometric-kiyhavrstg1buil4.webp');
        background-size: cover;
        background-position: center;
    }

    /* Estilos personalizados */
    .slide .item {
        border: 4px solid rgb(213, 219, 219, 0.7);
        box-sizing: border-box;
        opacity: 0.7;
    }

    .slide .item:nth-child(1),
    .slide .item:nth-child(2) {
        top: 0;
        left: 0;
        transform: translate(0, 0);
        border-radius: 0;
        width: 100%;
        height: 100%;
        border: none;
        opacity: 1;
    }

    .slide .item:nth-child(3) { left: 50%; }
    .slide .item:nth-child(4) { left: calc(50% + 220px); }
    .slide .item:nth-child(5) { left: calc(50% + 440px); }
    .slide .item:nth-child(n + 6) {
        left: calc(50% + 660px);
        opacity: 0;
    }

    /* --- ESTA PARTE ES CRUCIAL PARA MOSTRAR EL TEXTO --- */
    
    /* Hace visible el contenedor del texto en el slide activo */
    .slide .item:nth-child(2) .content {
        display: block;
    }

    /* Prepara los elementos del texto para la animación */
    .content .name, .content .des, .content a { /* Asegúrate de incluir la etiqueta 'a' del botón */
        opacity: 0;
        animation: animate 1s ease-in-out forwards;
    }

    .content .des { animation-delay: 0.3s; }
    .content a { animation-delay: 0.6s; } /* Y animar el botón también */

    /* Animación de entrada del texto */
    @keyframes animate {
        from {
            opacity: 0;
            transform: translateY(100px);
            filter: blur(33px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
            filter: blur(0);
        }
    }

</style>
</head>


<body class="bg-gray-100 text-gray-800">

<?php
        include_once '../inc/navbar.php';
?>


<section id="inicio" class="text-white">

    <div class="relative w-full h-screen overflow-hidden">
 
        <video autoplay muted="muted" loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
            <source src="/kasayweb/assets/videos/kasay-solutions.mp4" type="video/mp4">
            Tu navegador no soporta video HTML5.
        </video>

    <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 z-10"></div>

    
    <div class="relative z-20 flex items-center justify-center h-full text-white text-3xl">

        <div class="container mx-auto pt-52 text-center ">
            
            <h1 class="text-4xl md:text-8xl font-bold mb-6 leading-tight">Soluciones geolocalizadas </h1>
            <p class="text-lg md:text-4xl mb-8 max-w-4xl mx-auto">Experiencia Corporativa y Colaboraciones Estratégicas.</p>
            <a href="#servicios_inicio" class="bg-white text-sky-700 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg">Descubre Más</a>

                <div class="container text-white/70 pt-40 grid grid-cols-3 gap-32 shadow-lg ">
                    
                    <div class="text-left text-xl mx-auto  hover:text-white">
                        <a href="#seccion_carrusel">
                            <p>&nbsp;<i class="fa-solid fa-gear mr-2"></i> Servicios</p>
                            <hr class="border-t-2 border-gray-300 my-2">
                            <p>Conoce nuestro portafolio de consultoría, análisis de datos y tecnología geoespacial.</p>
                        </a>
                    </div>

                    <div class="text-left  text-xl mx-auto hover:text-white">
                        <a href="#proyectos_inicio">
                            <p>&nbsp;<i class="fa-solid fa-suitcase mr-2"></i> Proyectos</p>
                                <hr class="border-t-2 border-gray-300 my-2">  
                             <p>Explora nuestros casos de éxito y soluciones implementadas en diversos sectores.</p>
                        </a>
                    </div>


                    <div class="text-left text-xl mx-auto  hover:text-white">
                        <a href="#nosotros">
                            <p>&nbsp;<i class="fa-regular fa-circle-question mr-2"></i>Apoyo</p>
                            <hr class="border-t-2 border-gray-300 my-2">
                            <p>Accede a nuestra base de conocimiento o contacta a nuestro equipo de asistencia técnica.</p>
                        </a>
                    </div>
                </div>


    </div>

</section>

    <section id="servicios" class="pt-32 pb-24 bg-white [scroll-margin-top:60px]">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1 bg-sky-100 text-sky-600 rounded-full text-sm font-semibold mb-4">SOLUCIONES INTEGRALES</span>
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Tecnología Geoespacial <span class="gradient-text">Avanzada</span></h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Ofrecemos servicios de Consultoría en Gestión Catastral, comprometidos en proporcionar las capacidades técnicas, tecnológicas y administrativas necesarias.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <div class="group bg-gradient-to-br from-sky-50 to-blue-50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-500 group">
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
            
            <div class="bg-gradient-to-br from-sky-50 to-blue-50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-500 group">
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
            
            <div class="bg-gradient-to-br from-sky-50 to-blue-50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-500 group">
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



<section id="seccion_carrusel" class="relative pb-20 pt-12 scroll-mt-[60px] min-h-[400px] bg-white">
    
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1 bg-sky-100 text-sky-600 rounded-full text-sm font-semibold mb-4">SOLUCIONES INTEGRALES</span>
            <h2 class="text-4xl font-bold text-gray-800 mb-2">Tecnología Geoespacial <span class="gradient-text">Avanzada</span></h2>
        </div>
        <!-- Fondo blanco en vez de imagen borrosa -->
        <div id="carrusel-bg" class="w-full h-full bg-white transition-all duration-700"></div>
    </div>
    
    <div class="relative min-h-[580px] flex items-center justify-center z-10">
        
        <div class="slide" style="left: 80px; ">
            <div class="item absolute top-1/2 -translate-y-1/2 w-[200px] h-[300px] rounded-2xl bg-cover bg-center inline-block transition-all duration-500" style="background-image: url('/kasayweb/assets/images/servicios/servicios_360.png');">
                <div class="content absolute top-1/2 left-[200px] w-[300px] text-left text-gray-100 -translate-y-1/2 hidden font-sans">
                    <div class="name text-6xl uppercase font-bold w-[700px] max-w-none">Visores 360° Inmersivos</div>
                    <div class="des mt-2.5 text-xl pt-6 w-[700px] mb-5">Explore entornos como si estuviera allí. Nuestros visores 360° ofrecen una experiencia inmersiva para inspección de sitios o planificación de proyectos.</div>
                        <a href="/kasayweb/src/views/visores_sig.php" class="px-5 py-2.5 bg-white text-black rounded cursor-pointer inline-block">
                         Más información →
                        </a>
                </div>
            </div>

            <div class="item absolute top-1/2 -translate-y-1/2 w-[200px]  h-[300px] rounded-2xl bg-cover bg-center inline-block transition-all duration-500" style="background-image: url('/kasayweb/assets/images/ortofoto.png');">
                <div class="content absolute top-1/2 left-[200px] w-[300px] text-left text-gray-100 -translate-y-1/2 hidden font-sans">
                    <div class="name text-6xl uppercase font-bold w-[700px] max-w-none">Visores de Ortofotos 2D y Mapas</div>
                    <div class="des mt-2.5 text-xl pt-6 w-[700px] mb-5">Navegue por mapas de alta resolución y ortofotos actualizadas para un análisis preciso de su territorio en 2D.</div>

                        <a href="/kasayweb/src/views/ortofoto.php" class="px-5 font-bold py-2.5 bg-white text-black rounded cursor-pointer inline-block">
                         Más información →
                        </a>                
                    </div>
            </div>
            <div class="item absolute top-1/2 -translate-y-1/2 w-[200px] h-[300px] rounded-2xl bg-cover bg-center inline-block transition-all duration-500" style="background-image: url('/kasayweb/assets/images/geoks.png');">
                <div class="content absolute top-1/2 left-[200px] w-[300px] text-left text-gray-100 -translate-y-1/2 hidden font-sans">
                    <div class="name text-6xl uppercase font-bold w-[700px] max-w-none">Visores de Modelos 3D Avanzados</div>
                    <div class="des mt-2.5 text-xl pt-6 w-[700px] mb-5">Visualice con detalle modelos 3D de edificaciones, infraestructuras y terrenos. Perfectos para urbanismo, arquitectura e ingeniería.</div>

                        <a href="/kasayweb/src/views/visores_sig.php" class="px-5 py-2.5 bg-white text-black rounded cursor-pointer inline-block">
                         Más información →
                        </a>                    
                     </div>
            </div>
            <div class="item absolute top-1/2 -translate-y-1/2 w-[200px] h-[300px] rounded-2xl bg-cover bg-center inline-block transition-all duration-500" style="background-image: url('/kasayweb/assets/images/servicios/servicios_carto.png');">
                <div class="content absolute top-1/2 left-[200px] w-[300px] text-left text-gray-100 -translate-y-1/2 hidden font-sans">
                    <div class="name text-6xl uppercase font-bold w-[700px] max-w-none">Cartografía Digital</div>
                    <div class="des mt-2.5 text-xl pt-6 w-[700px] mb-5">Producción y actualización de cartografía digital para una precisa representación del territorio.</div>

                        <a href="/kasayweb/src/views/carto_digital.php" class="px-5 py-2.5 bg-white text-black rounded cursor-pointer inline-block">
                         Más información →
                        </a>                    
                     </div>
            </div>
            <div class="item absolute top-1/2 -translate-y-1/2 w-[200px] h-[300px] rounded-2xl bg-cover bg-center inline-block transition-all duration-500" style="background-image: url('/kasayweb/assets/images/servicios/servicios_gdbs.png');">
                <div class="content absolute top-1/2 left-[200px] w-[300px] text-left text-gray-700 -translate-y-1/2 hidden font-sans">
                    <div class="name text-6xl uppercase font-bold w-[700px] max-w-none">Bases de Datos Geográficas</div>
                    <div class="des mt-2.5 text-xl pt-6 w-[700px] mb-5">Diseño e implementación de bases de datos espaciales para la gestión de información geográfica.</div>

                        <a href="/kasayweb/src/views/gdbs.php" class="px-5 py-2.5 bg-sky-400 text-white font-bold hover:bg-sky-100 hover:text-gray-700 rounded cursor-pointer inline-block">
                         Más información →
                        </a>                   
                      </div>
            </div>
            <div class="item absolute top-1/2 -translate-y-1/2 w-[200px] h-[300px] rounded-2xl bg-cover bg-center inline-block transition-all duration-500" style="background-image: url('/kasayweb/assets/images/servicios/servicios_analisis.png');">
                <div class="content absolute top-1/2 left-[200px] w-[300px] text-left text-gray-700 -translate-y-1/2 hidden font-sans">
                    <div class="name text-6xl uppercase  font-bold w-[700px] max-w-none">Análisis Territorial</div>
                    <div class="des mt-2.5 text-xl pt-6  w-[700px] mb-5">Análisis espacial y estudios territoriales para la toma de decisiones estratégicas.</div>

                        <a href="/kasayweb/src/views/analisis_territorial.php" class="px-5 py-2.5 bg-sky-400 font-bold hover:bg-sky-100 hover:text-gray-700 text-white  rounded cursor-pointer inline-block">
                         Más información →
                        </a>                    
                     </div>
            </div>servicios_consultoria
            <div class="item absolute top-1/2 -translate-y-1/2 w-[200px] h-[300px] rounded-2xl bg-cover bg-center inline-block transition-all duration-500" style="background-image: url('/kasayweb/assets/images/servicios/servicios_operacion.png');">
                <div class="content absolute top-1/2 left-[200px] w-[300px] text-left text-gray-700 -translate-y-1/2 hidden font-sans">
                    <div class="name text-6xl uppercase font-bold w-[700px] max-w-none">Operación Catastral</div>
                    <div class="des mt-2.5 text-xl pt-6 w-[700px] mb-5">Captura Integral de Datos Físicos, Jurídicos y Económicos en el Terreno.</div>

                        <a href="/kasayweb/src/views/analisis_territorial.php" class="px-5 py-2.5 bg-sky-400 font-bold hover:bg-sky-100 hover:text-gray-700 text-white  rounded cursor-pointer inline-block">
                         Más información →
                        </a>                   
                      </div>
            </div>
            <div class="item absolute top-1/2 -translate-y-1/2 w-[200px] h-[300px] rounded-2xl bg-cover bg-center inline-block transition-all duration-500" style="background-image: url('/kasayweb/assets/images/servicios/servicios_consultoria.png');">
                <div class="content absolute top-1/2 left-[200px] w-[300px] text-left text-white -translate-y-1/2 hidden font-sans">
                    <div class="name text-6xl uppercase font-bold w-[700px] max-w-none">Consultoría Especializada</div>
                    <div class="des mt-2.5 text-xl pt-6 w-[700px] mb-5">Asesoría para la habilitación del municipio como Gestor Catastral y planificación del servicio público.</div>

                        <a href="/kasayweb/src/views/analisis_territorial.php" class="px-5 py-2.5 bg-sky-100 font-bold hover:bg-sky-400 hover:text-gray-700 text-black  rounded cursor-pointer inline-block">
                         Más información →
                        </a>                     
                    </div>
            </div>
            <div class="item absolute top-1/2 -translate-y-1/2 w-[200px] h-[300px] rounded-2xl bg-cover bg-center inline-block transition-all duration-500" style="background-image: url('/kasayweb/assets/images/servicios/servicios_saas.png');">
                <div class="content absolute top-1/2 left-[200px] w-[300px] text-left text-gray-700 -translate-y-1/2 hidden font-sans">
                    <div class="name text-6xl uppercase font-bold w-[700px] max-w-none">Gestión Catastral SaaS</div>
                    <div class="des mt-2.5 text-xl pt-6 w-[700px] mb-5">Sistema de Gestión Catastral bajo la modalidad de Software como Servicio (SaaS).</div>

                        <a href="/kasayweb/src/views/analisis_territorial.php" class="px-5 py-2.5 bg-sky-400 font-bold hover:bg-sky-100 hover:text-gray-700 text-white  rounded cursor-pointer inline-block">
                         Más información →
                        </a>                   
                      </div>
            </div>
            <div class="item absolute top-1/2 -translate-y-1/2 w-[200px] h-[300px] rounded-2xl bg-cover bg-center inline-block transition-all duration-500" style="background-image: url('/kasayweb/assets/images/servicios/servicios_gps.png');">
                <div class="content absolute top-1/2 left-[200px] w-[300px] text-left text-gray-100 -translate-y-1/2 hidden font-sans">
                    <div class="name text-6xl uppercase font-bold w-[700px] max-w-none">Seguimiento GPS</div>
                    <div class="des mt-2.5 text-xl pt-6 w-[700px] mb-5">Implementación de sistemas de seguimiento vehicular y de activos con tecnología GPS.</div>

                        <a href="/kasayweb/src/views/analisis_territorial.php" class="px-5 py-2.5 bg-sky-400 font-bold hover:bg-sky-100 hover:text-gray-700 text-white  rounded cursor-pointer inline-block">
                         Más información →
                        </a>     
                                    </div>
            </div>
        </div>
    </div>
     <div class="button absolute bottom-5 w-full text-center">
            <button class="prev w-16 h-12 cursor-pointer mx-1.5 transition-all duration-300 hover:text-white">
                <i class="fa-regular fa-circle-left text-4xl text-sky-600/60 rounded-lg hover:bg-gray-100"></i>
            </button>
            <button class="next w-16 h-12 cursor-pointer mx-1.5 transition-all duration-300 ">
                <i class="fa-regular fa-circle-right text-4xl text-sky-600/60 rounded-lg hover:bg-gray-100"></i>
            </button>
        </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Cambia el fondo del carrusel según el slide activo (el segundo .item visible)
    function updateCarruselBg() {
        const items = document.querySelectorAll('.slide .item');
        // El slide activo es el segundo hijo (índice 1)
        if (items.length > 1) {
            const bg = items[1].style.backgroundImage;
        }
    }
    

    // Botones de navegación
    let next = document.querySelector('.next');
    let prev = document.querySelector('.prev');
    next.addEventListener('click', function(){
        let items = document.querySelectorAll('.item');
        document.querySelector('.slide').appendChild(items[0]);
        updateCarruselBg();
    });
    prev.addEventListener('click', function(){
        let items = document.querySelectorAll('.item');
        document.querySelector('.slide').prepend(items[items.length - 1]);
        updateCarruselBg();
    });
});
</script>

<section id="proyectos_inicio" class="pt-20 pb-32 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1 bg-blue-100 text-blue-600 rounded-full text-sm font-semibold mb-4">CASOS DE ÉXITO</span>
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Nuestros <span class="gradient-text">Proyectos</span></h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Implementaciones exitosas que han transformado la gestión territorial en diversos municipios y entidades.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="group overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500">
                <div class="relative h-64 overflow-hidden">
                     <video autoplay muted="muted" loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
                       <source src="/kasayweb/assets/videos/monteria.mp4" type="video/mp4">
                          Tu navegador no soporta video HTML5.
                     </video>                         
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/70 to-transparent flex items-end p-6">
                        <h3 class="text-2xl font-bold text-white">Montería, Córdoba.</h3>
                    </div>
                </div>
                <div class="p-6 bg-white">
                    <p class="text-gray-600 mb-4">Actualización catastral de el municipio, 2023</p>
                    <div class="flex justify-between items-center">
                        <span class="inline-block px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs font-semibold">Gestión Catastral</span>
                        <a href="#" class="text-blue-500 hover:text-blue-700 font-medium">Ver caso →</a>
                    </div>
                </div>
            </div>
            
            <div class="group overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500">
                <div class="relative h-64 overflow-hidden">
                    <video autoplay muted="muted" loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
                       <source src="/kasayweb/assets/videos/sesquile.mp4" type="video/mp4">
                          Tu navegador no soporta video HTML5.
                     </video>       
                    <div class="absolute inset-0 bg-gradient-to-t from-teal-900/70 to-transparent flex items-end p-6">
                        <h3 class="text-2xl font-bold text-white">Sesquilé, Cundinamarca.</h3>
                    </div>
                </div>
                <div class="p-6 bg-white">
                    <p class="text-gray-600 mb-4">Actualización catastral de el municipio, 2022</p>
                    <div class="flex justify-between items-center">
                        <span class="inline-block px-3 py-1 bg-teal-100 text-teal-600 rounded-full text-xs font-semibold">Gestión Catastral</span>
                        <a href="#" class="text-teal-500 hover:text-teal-700 font-medium">Ver caso →</a>
                    </div>
                </div>
            </div>
            
            <div class="group overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                         alt="Análisis Territorial"
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-purple-900/70 to-transparent flex items-end p-6">
                        <h3 class="text-2xl font-bold text-white">Zipaquira, Cundinamarca.</h3>
                    </div>
                </div>
                <div class="p-6 bg-white">
                    <p class="text-gray-600 mb-4">Actualización catastral de el municipio, 2024.</p>
                    <div class="flex justify-between items-center">
                        <span class="inline-block px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs font-semibold">Gestión Catastral</span>
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

<section id="nosotros" class="py-20 bg-gradient-to-r from-sky-50 to-blue-50">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <div class="lg:w-1/2 pr-16">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                    <img src="/kasayweb/assets/images/logoj.png" alt="Equipo Kasay Ingeniería" class="w-full max-w-[56rem] mx-auto h-auto max-h-[72rem] object-contain">
                    
                </div>
            </div>
            
            <div class="lg:w-1/2 text-center lg:text-left">
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
                
                <a href="contacto.php" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-gradient-to-r from-sky-500 to-blue-600 hover:from-sky-600 hover:to-blue-700 transition-all duration-300">
                    Contactar al equipo
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
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
                    <img src="/kasayweb/assets/images/ali_1.jpeg" alt="Logo Aliado 1" class="max-h-32 w-auto filter grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                </div>
                <div class="swiper-slide flex justify-center items-center p-4">
                    <img src="/kasayweb/assets/images/ali_2.png" alt="Logo Aliado 2" class="max-h-32 w-auto filter grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                </div>
                <div class="swiper-slide flex justify-center items-center p-4">
                    <img src="/kasayweb/assets/images/ali_3.png" alt="Logo Aliado 3" class="max-h-32 w-auto filter grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                </div>
                <div class="swiper-slide flex justify-center items-center p-4">
                    <img src="/kasayweb/assets/images/ali_4.png" alt="Logo Aliado 4" class="max-h-32 w-auto filter grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                </div>
                <div class="swiper-slide flex justify-center items-center p-4">
                    <img src="/kasayweb/assets/images/ali_5.png" alt="Logo Aliado 5" class="max-h-32 w-auto filter grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                </div>
                <div class="swiper-slide flex justify-center items-center p-4">
                    <img src="/kasayweb/assets/images/ali_6.png" alt="Logo Aliado 6" class="max-h-32 w-auto filter grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                </div>
                <div class="swiper-slide flex justify-center items-center p-4">
                    <img src="/kasayweb/assets/images/ali_7.png" alt="Logo Aliado 7" class="max-h-32 w-auto filter grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                </div>
                 <div class="swiper-slide flex justify-center items-center p-4">
                    <img src="/kasayweb/assets/images/ali_8.png" alt="Logo Aliado 8" class="max-h-32 w-auto filter grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                </div>
                 <div class="swiper-slide flex justify-center items-center p-4">
                    <img src="/kasayweb/assets/images/ali_9.jpg" alt="Logo Aliado 9" class="max-h-32 w-auto filter grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
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

<?php include_once '../inc/footer.php'; ?>

<script>
    // Animación al hacer scroll Y Scroll Suave
    document.addEventListener('DOMContentLoaded', function() {
        // Script para animaciones al aparecer (IntersectionObserver)
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

        // Script para scroll suave en enlaces de ancla
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault(); // Evita el salto instantáneo predeterminado

                const targetId = this.getAttribute('href'); // Obtiene el ID del destino (ej. "#servicios_inicio")
                const targetElement = document.querySelector(targetId); // Selecciona el elemento de destino

                if (targetElement) {
                    // Opción B: Usar window.scrollTo con cálculo de offset (para headers fijos)
                    const headerOffset = 60; // <<< AJUSTA ESTE VALOR: Altura de tu barra de navegación fija
                    const elementPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
                    window.scrollTo({
                        top: elementPosition - headerOffset,
                        behavior: "smooth"
                    });

                    // Opcional: Actualizar la URL en la barra de direcciones sin recargar
                    // history.pushState(null, null, targetId);
                }
            });
        });
    });
</script>


 <?php

        include_once '../inc/footer.php';
 ?>

</body>
</html>