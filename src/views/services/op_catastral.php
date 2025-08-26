<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operación Catastral Integral y de Precisión - Kasay Ingeniería</title>
    <base href="/kasayweb/">

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
            <source src="/kasayweb/assets/videos/cadastral_ops_hero.mp4" type="video/mp4">
            Tu navegador no soporta video HTML5.
        </video>
        <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-60 z-10"></div>
        <div class="relative z-20 flex flex-col items-center justify-center h-full text-center px-6">
            <div data-aos="fade-down">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Operación Catastral Integral
                </h1>
                <p class="text-lg md:text-2xl mb-10 max-w-4xl mx-auto font-lora">
                    Capturamos la realidad del territorio con precisión, integrando datos físicos, jurídicos y económicos directamente desde el terreno.
                </p>
                <a href="#metodologia" class="bg-sky-600 text-white font-bold py-3 px-8 rounded-full hover:bg-sky-700 transition duration-300 text-lg shadow-lg">
                    Conocer Nuestra Metodología
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16 text-sky-900 section-title" data-aos="fade-up">
                Un Mosaico Completo: Los Tres Componentes del Catastro
            </h2>
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-slate-50 p-8 rounded-lg text-center border-t-4 border-sky-500" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-ruler-combined text-sky-600 text-5xl mb-5"></i>
                    <h3 class="text-2xl font-bold mb-3 text-gray-800">Componente Físico</h3>
                    <p class="text-gray-600">
                        Identificación, levantamiento y georreferenciación de linderos, áreas, construcciones y características del terreno.
                    </p>
                </div>
                <div class="bg-slate-50 p-8 rounded-lg text-center border-t-4 border-sky-500" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-gavel text-sky-600 text-5xl mb-5"></i>
                    <h3 class="text-2xl font-bold mb-3 text-gray-800">Componente Jurídico</h3>
                    <p class="text-gray-600">
                        Investigación de la relación entre el propietario/poseedor y el inmueble, verificando la tenencia y los registros públicos.
                    </p>
                </div>
                <div class="bg-slate-50 p-8 rounded-lg text-center border-t-4 border-sky-500" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-hand-holding-usd text-sky-600 text-5xl mb-5"></i>
                    <h3 class="text-2xl font-bold mb-3 text-gray-800">Componente Económico</h3>
                    <p class="text-gray-600">
                        Determinación del avalúo catastral a través del análisis de variables como el valor del suelo, la construcción y el mercado.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right">
                    <img src="assets/images/paginas_servicios/servicio_opcatastral.jpg" alt="Equipo técnico de Kasay realizando levantamiento catastral en campo" class="rounded-lg shadow-2xl w-full h-auto">
                </div>
                <div data-aos="fade-left">
                    <h2 class="text-3xl md:text-4xl font-bold text-sky-900 mb-6">Sinergia en el Terreno: Talento y Tecnología</h2>
                    <p class="text-lg text-gray-600 mb-6">
                        El éxito de una operación catastral reside en la perfecta combinación de profesionales expertos y herramientas de vanguardia. Nuestro enfoque integra ambos para garantizar la máxima calidad y eficiencia.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start"><i class="fas fa-check-circle text-sky-500 mt-1 mr-3"></i><div><strong class="text-gray-800">Equipos Multidisciplinarios:</strong> Topógrafos, abogados y técnicos catastrales trabajando de forma coordinada.</div></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-sky-500 mt-1 mr-3"></i><div><strong class="text-gray-800">GPS de Alta Precisión:</strong> Equipos geodésicos para la captura de linderos y puntos con exactitud centimétrica.</div></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-sky-500 mt-1 mr-3"></i><div><strong class="text-gray-800">Aplicaciones Móviles de Captura:</strong> Formularios digitales y validación de datos en tiempo real para minimizar errores.</div></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section id="metodologia" class="py-20 bg-white [scroll-margin-top:50px]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16 text-sky-900 section-title" data-aos="fade-up">
                Nuestra Metodología de Trabajo
            </h2>
            <div class="relative max-w-4xl mx-auto">
                <div class="absolute left-1/2 w-0.5 h-full bg-sky-200 transform -translate-x-1/2"></div>
                <div class="mb-12 flex justify-between items-center w-full" data-aos="fade-right">
                    <div class="w-2/5"></div>
                    <div class="z-10 bg-sky-600 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl shadow-lg">1</div>
                    <div class="w-2/5 bg-white p-6 rounded-lg shadow-md timeline-card">
                        <h3 class="text-xl font-semibold mb-2 text-sky-800">Planificación y Alistamiento</h3>
                        <p class="text-gray-600 text-sm">Análisis de la zona, socialización con la comunidad y despliegue logístico del proyecto.</p>
                    </div>
                </div>
                <div class="mb-12 flex justify-between flex-row-reverse items-center w-full" data-aos="fade-left">
                    <div class="w-2/5"></div>
                    <div class="z-10 bg-sky-600 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl shadow-lg">2</div>
                    <div class="w-2/5 bg-white p-6 rounded-lg shadow-md timeline-card">
                        <h3 class="text-xl font-semibold mb-2 text-sky-800">Levantamiento Predial</h3>
                        <p class="text-gray-600 text-sm">Nuestros equipos recorren el terreno, capturando datos físicos, jurídicos y económicos de cada predio.</p>
                    </div>
                </div>
                <div class="mb-12 flex justify-between items-center w-full" data-aos="fade-right">
                    <div class="w-2/5"></div>
                    <div class="z-10 bg-sky-600 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl shadow-lg">3</div>
                    <div class="w-2/5 bg-white p-6 rounded-lg shadow-md timeline-card">
                        <h3 class="text-xl font-semibold mb-2 text-sky-800">Análisis y Control de Calidad</h3>
                        <p class="text-gray-600 text-sm">La información recolectada es procesada y validada rigurosamente por nuestro equipo de oficina.</p>
                    </div>
                </div>
                <div class="flex justify-between flex-row-reverse items-center w-full" data-aos="fade-left">
                    <div class="w-2/5"></div>
                    <div class="z-10 bg-sky-600 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl shadow-lg">4</div>
                    <div class="w-2/5 bg-white p-6 rounded-lg shadow-md timeline-card">
                        <h3 class="text-xl font-semibold mb-2 text-sky-800">Integración y Entrega Final</h3>
                        <p class="text-gray-600 text-sm">Consolidamos la base de datos catastral actualizada y la integramos según el modelo LADM-COL.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gradient-to-r from-sky-800 to-blue-900 text-white">
        <div class="container mx-auto px-6 text-center" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Garantice la Calidad de su Catastro</h2>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto font-lora">
                Confíe en un equipo experto y una metodología probada para la actualización y conservación de la información territorial de su municipio.
            </p>
            <a href="/kasayweb/src/views/contacto.php" class="bg-white text-sky-700 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg shadow-xl">
                Contactar a Nuestros Expertos
            </a>
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