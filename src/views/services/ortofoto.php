<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ortofotos de Alta Precisión y Cartografía Digital - Kasay Ingeniería</title>

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
        .tech-card {
            border: 1px solid #e5e7eb; /* border-gray-200 */
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        }
        .tech-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.07);
            border-color: #3b82f6; /* border-blue-500 */
        }
    </style>
</head>

<body class="bg-white text-gray-800">

    <?php include_once '../../inc/navbar.php'; ?>

    <section id="inicio" class="relative w-full h-screen overflow-hidden text-white">
        <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
            <source src="../../../assets/videos/servicios/servicios_ortofoto.mp4" type="video/mp4">
            Tu navegador no soporta video HTML5.
        </video>
        <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-60 z-10"></div>
        <div class="relative z-20 flex flex-col items-center justify-center h-full text-center px-6">
            <div data-aos="fade-down">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    El Territorio Visto con Precisión Absoluta
                </h1>
                <p class="text-lg md:text-2xl mb-10 max-w-4xl mx-auto font-lora">
                    Generamos ortofotos y cartografía digital de alta resolución que sirven como la base para una planificación y gestión territorial inteligente.
                </p>
                <a href="#visor" class="bg-sky-600 text-white font-bold py-3 px-8 rounded-full hover:bg-sky-700 transition duration-300 text-lg shadow-lg">
                    Explorar Demostración
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-6 text-center" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-sky-900 section-title">Cartografía Digital: La Base para Decisiones Informadas</h2>
            <div class="max-w-4xl mx-auto text-lg text-gray-600 mt-8 space-y-4 text-justify">
                <p>
                    Una <strong>ortofoto</strong> es mucho más que una simple fotografía aérea. Es una imagen del terreno geométricamente corregida, de manera que la escala es uniforme y puede ser utilizada para medir distancias reales. Cada píxel está georreferenciado con precisión.
                </p>
                <p>
                    En Kasay Ingeniería, producimos ortofotos que actúan como un "mapa fotográfico" de alta fidelidad, una herramienta indispensable para el análisis detallado, la planificación urbana, el catastro multipropósito, la gestión de recursos naturales y proyectos de ingeniería.
                </p>
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16 text-sky-900 section-title" data-aos="fade-up">
                Tecnología de Vanguardia para Resultados Superiores
            </h2>
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-white p-8 rounded-lg text-center tech-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-sky-600 mb-5 text-6xl">
                        <i class="fas fa-drone"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-gray-800">Drones (UAVs)</h3>
                    <p class="text-gray-600">
                        Equipos de última generación para la captura de imágenes aéreas con la máxima resolución y eficiencia operativa.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg text-center tech-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-sky-600 mb-5 text-6xl">
                        <i class="fas fa-satellite-dish"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-gray-800">Control Geodésico</h3>
                    <p class="text-gray-600">
                        Implementación de puntos de control en tierra con GPS de alta precisión (GCPs) para garantizar una exactitud cartográfica milimétrica.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg text-center tech-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-sky-600 mb-5 text-6xl">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-gray-800">Fotogrametría Avanzada</h3>
                    <p class="text-gray-600">
                        Uso de software especializado para el procesamiento de miles de imágenes, generando modelos digitales y ortofotos consistentes.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="visor" class="py-20 bg-white [scroll-margin-top:80px]">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-sky-900 section-title">Plataforma de Visualización Cartográfica</h2>
                <p class="text-lg text-gray-600 mt-6 max-w-3xl mx-auto">Interactúe con nuestra demostración. Utilice las herramientas del mapa para hacer zoom, moverse y explorar la riqueza de detalles de una ortofoto real.</p>
            </div>
            <div class="w-full max-w-7xl mx-auto p-4 bg-slate-100 rounded-xl shadow-2xl border border-slate-200" data-aos="zoom-in-up">
                 <div class="bg-black rounded-lg overflow-hidden">
                    <iframe 
                        class="w-full h-[650px]" 
                        src="/kasayweb/assets/tiles/visu_ortofoto.php"
                        title="Visor Cartográfico Interactivo de Kasay Ingeniería"
                        frameborder="0">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gradient-to-r from-sky-800 to-blue-900 text-white">
        <div class="container mx-auto px-6 text-center" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Transforme la Gestión de su Territorio</h2>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto font-lora">
                Nuestros datos geoespaciales son el primer paso hacia una administración más eficiente, sostenible y rentable.
            </p>
            <a href="/kasayweb/src/views/contacto.php" class="bg-white text-sky-700 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg shadow-xl">
                Solicitar Asesoría Técnica
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