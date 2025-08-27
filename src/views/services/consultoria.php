<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultoría Estratégica para Gestores Catastrales - Kasay Ingeniería</title>
    

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <style>
        html { scroll-behavior: smooth; }
        .font-lora { font-family: 'Lora', serif; }
        .section-title::after {
            content: ''; display: block; width: 80px; height: 3px;
            margin: 12px auto 0;
            background: linear-gradient(90deg, rgb(0, 124, 240), rgb(0, 153, 177));
            border-radius: 2px;
        }
        .timeline-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .timeline-card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.08); }
    </style>
</head>

<body class="bg-white text-gray-800">

    <?php include_once '../../inc/navbar.php'; ?>

    <section id="inicio" class="relative w-full h-screen overflow-hidden text-white">
        <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
            <source src="/kasayweb/assets/videos/servicios/servicios_consultoria.mp4" type="video/mp4">
            Tu navegador no soporta video HTML5.
        </video>
        <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-60 z-10"></div>
        <div class="relative z-20 flex flex-col items-center justify-center h-full text-center px-6">
            <div data-aos="fade-down">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Consultoría Estratégica Catastral
                </h1>
                <p class="text-lg md:text-2xl mb-10 max-w-4xl mx-auto font-lora">
                    Transformamos municipios en Gestores Catastrales eficientes, combinando estrategia legal, optimización de procesos y tecnología de vanguardia.
                </p>
                <a href="#hoja-de-ruta" class="bg-sky-600 text-white font-bold py-3 px-8 rounded-full hover:bg-sky-700 transition duration-300 text-lg shadow-lg">
                    Descubra Nuestra Hoja de Ruta
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                 <div class="md:order-2" data-aos="fade-left">
                    <img src="../../../assets/images/paginas_servicios/servicio_consultoria.png" alt="Sesión de consultoría estratégica con equipo de Kasay" class="rounded-lg shadow-2xl w-full h-auto" style="max-height: 500px; object-fit: cover;">
                </div>
                <div class="md:order-1" data-aos="fade-right">
                    <h2 class="text-3xl md:text-4xl font-bold text-sky-900 mb-6">Su Aliado en la Modernización Territorial</h2>
                    <p class="text-lg text-gray-600 mb-4">
                        Convertirse en Gestor Catastral es un proceso complejo que requiere una visión integral. En Kasay Ingeniería, actuamos como su socio estratégico, brindando la asesoría experta necesaria para navegar el marco normativo, diseñar procesos eficientes y adoptar la tecnología correcta.
                    </p>
                    <p class="text-lg text-gray-600">
                        Nuestro equipo multidisciplinario de expertos en derecho, ingeniería y sistemas de información geográfica trabaja de la mano con su municipio para construir una capacidad catastral sólida, autónoma y sostenible.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16 text-sky-900 section-title" data-aos="fade-up">
                Nuestro Enfoque 360°: Una Solución Integral
            </h2>
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-white p-8 rounded-lg text-center border-t-4 border-sky-500 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-gavel text-sky-600 text-5xl mb-5"></i>
                    <h3 class="text-2xl font-bold mb-3 text-gray-800">Cumplimiento Normativo</h3>
                    <p class="text-gray-600">
                        Le guiamos en la interpretación y aplicación de la normativa vigente para una habilitación exitosa y una operación sin contratiempos.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg text-center border-t-4 border-sky-500 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-sitemap text-sky-600 text-5xl mb-5"></i>
                    <h3 class="text-2xl font-bold mb-3 text-gray-800">Optimización de Procesos</h3>
                    <p class="text-gray-600">
                        Rediseñamos y estandarizamos sus flujos de trabajo catastral, desde la atención al ciudadano hasta la conservación de datos.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg text-center border-t-4 border-sky-500 shadow-lg" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-cogs text-sky-600 text-5xl mb-5"></i>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Habilitación Tecnológica</h3>
                    <p class="text-gray-600">
                        Asesoramos en la selección e implementación de la infraestructura y el software SIG adecuados para sus necesidades y presupuesto.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <section id="hoja-de-ruta" class="py-20 bg-white [scroll-margin-top:50px]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16 text-sky-900 section-title" data-aos="fade-up">
                Nuestra Hoja de Ruta hacia la Habilitación
            </h2>
            <div class="relative max-w-4xl mx-auto">
                <div class="absolute left-1/2 w-0.5 h-full bg-sky-200 transform -translate-x-1/2"></div>
                <div class="mb-12 flex justify-between items-center w-full" data-aos="fade-right">
                    <div class="w-2/5"></div>
                    <div class="z-10 bg-sky-600 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl shadow-lg">1</div>
                    <div class="w-2/5 bg-white p-6 rounded-lg shadow-md timeline-card">
                        <h3 class="text-xl font-semibold mb-2 text-sky-800">Diagnóstico y Viabilidad</h3>
                        <p class="text-gray-600 text-sm">Evaluamos las capacidades actuales del municipio y determinamos la viabilidad técnica, jurídica y financiera del proyecto.</p>
                    </div>
                </div>
                <div class="mb-12 flex justify-between flex-row-reverse items-center w-full" data-aos="fade-left">
                    <div class="w-2/5"></div>
                    <div class="z-10 bg-sky-600 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl shadow-lg">2</div>
                    <div class="w-2/5 bg-white p-6 rounded-lg shadow-md timeline-card">
                        <h3 class="text-xl font-semibold mb-2 text-sky-800">Plan Estratégico y Diseño</h3>
                        <p class="text-gray-600 text-sm">Elaboramos un plan detallado que incluye el modelo de operación, la estructura organizacional y los requerimientos tecnológicos.</p>
                    </div>
                </div>
                <div class="mb-12 flex justify-between items-center w-full" data-aos="fade-right">
                    <div class="w-2/5"></div>
                    <div class="z-10 bg-sky-600 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl shadow-lg">3</div>
                    <div class="w-2/5 bg-white p-6 rounded-lg shadow-md timeline-card">
                        <h3 class="text-xl font-semibold mb-2 text-sky-800">Implementación y Capacitación</h3>
                        <p class="text-gray-600 text-sm">Apoyamos en la ejecución del plan y realizamos la transferencia de conocimiento al equipo municipal para asegurar su autonomía.</p>
                    </div>
                </div>
                <div class="flex justify-between flex-row-reverse items-center w-full" data-aos="fade-left">
                    <div class="w-2/5"></div>
                    <div class="z-10 bg-sky-600 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl shadow-lg">4</div>
                    <div class="w-2/5 bg-white p-6 rounded-lg shadow-md timeline-card">
                        <h3 class="text-xl font-semibold mb-2 text-sky-800">Acompañamiento y Mejora</h3>
                        <p class="text-gray-600 text-sm">Brindamos soporte post-habilitación y asesoría para la mejora continua de la prestación del servicio catastral.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        AOS.init({
            duration: 800,
            once: true,
        });
    </script>
    
    <?php include_once '../../inc/footer.php'; ?>

</body>
</html>