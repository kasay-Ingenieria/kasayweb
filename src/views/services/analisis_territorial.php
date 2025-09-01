<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análisis Geoespacial Estratégico - Kasay Ingeniería</title>
    <base href="/kasayweb/">
    <link rel="icon" href="/kasayweb/assets/images/favicon.ico" type="image/x-icon">

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
    </style>
</head>

<body class="bg-white text-gray-800">

    <?php include_once '../../inc/navbar.php'; ?>

    <section id="inicio" class="text-white">
        <div class="relative w-full h-screen">
            <video autoplay muted="muted" loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
                <source src="/kasayweb/assets/videos/servicios/servicios_analisis_territorial.mp4" type="video/mp4">
                Tu navegador no soporta video HTML5.
            </video>
            <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 z-10"></div>

            <div class="relative z-20 flex items-center justify-center h-full text-white">
                <div class="container mx-auto px-6 pt-32 text-center md:pt-40">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                        Análisis Geoespacial Estratégico
                    </h1>
                    <p class="text-lg md:text-2xl mb-8 max-w-3xl mx-auto font-lora">
                        Convertimos datos territoriales complejos en insights claros y accionables para su organización.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-6 text-center" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-sky-900 section-title">Descifrando el ADN de su Territorio</h2>
            <div class="max-w-4xl mx-auto text-lg text-gray-600 mt-8 space-y-4 text-justify hyphens-auto">
                <p>
                    El verdadero valor de los datos geográficos no está en tenerlos, sino en entenderlos. Nuestro servicio de Análisis Territorial va más allá de la cartografía para descubrir patrones, predecir tendencias y responder preguntas críticas para su negocio o gestión.
                </p>
                <p>
                    Aplicamos metodologías científicas y herramientas SIG avanzadas para transformar grandes volúmenes de datos en conocimiento estratégico que impulsa decisiones informadas, eficientes y rentables.
                </p>
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16 text-sky-900 section-title" data-aos="fade-up">
                Nuestros Entregables: Inteligencia Aplicada
            </h2>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-white p-6 md:p-8 rounded-lg text-center border-t-4 border-sky-500 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-map-marked-alt text-sky-600 text-5xl mb-5"></i>
                    <h3 class="text-2xl font-bold mb-3 text-gray-800">Mapas Temáticos y de Aptitud</h3>
                    <p class="text-gray-600">
                        Visualizaciones claras que responden a preguntas clave: ¿cuáles son las zonas de mayor riesgo? ¿dónde es más apto construir?
                    </p>
                </div>
                <div class="bg-white p-6 md:p-8 rounded-lg text-center border-t-4 border-sky-500 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-chart-pie text-sky-600 text-5xl mb-5"></i>
                    <h3 class="text-2xl font-bold mb-3 text-gray-800">Dashboards Interactivos</h3>
                    <p class="text-gray-600">
                        Herramientas dinámicas que le permiten explorar los datos, aplicar filtros y descubrir sus propios insights de manera intuitiva y personalizada.
                    </p>
                </div>
                <div class="bg-white p-6 md:p-8 rounded-lg text-center border-t-4 border-sky-500 shadow-lg" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-file-alt text-sky-600 text-5xl mb-5"></i>
                    <h3 class="text-2xl font-bold mb-3 text-gray-800">Informes Técnicos Detallados</h3>
                    <p class="text-gray-600">
                        Documentos estratégicos que resumen la metodología, los hallazgos y las recomendaciones accionables derivadas del análisis.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <section id="capacidades" class="py-20 bg-white [scroll-margin-top:80px]">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-16 text-sky-900 section-title" data-aos="fade-up">
            Capacidades Analíticas Avanzadas
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto" data-aos="fade-up">
            
            <div class="p-6 bg-slate-50 rounded-lg transition-all duration-300 hover:shadow-xl hover:bg-white hover:-translate-y-1">
                <div class="flex items-start">
                    <div class="flex-shrink-0 bg-sky-100 text-sky-600 w-12 h-12 rounded-full flex items-center justify-center">
                        <i class="fas fa-sitemap text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Análisis Multicriterio</h3>
                        <p class="text-gray-600 leading-relaxed">Evaluación de múltiples factores para determinar la idoneidad o viabilidad de un área o proyecto.</p>
                    </div>
                </div>
            </div>

            <div class="p-6 bg-slate-50 rounded-lg transition-all duration-300 hover:shadow-xl hover:bg-white hover:-translate-y-1">
                <div class="flex items-start">
                    <div class="flex-shrink-0 bg-sky-100 text-sky-600 w-12 h-12 rounded-full flex items-center justify-center">
                        <i class="fas fa-dna text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Modelado y Simulación Espacial</h3>
                        <p class="text-gray-600 leading-relaxed">Creación de modelos predictivos para escenarios futuros de crecimiento, impacto o distribución.</p>
                    </div>
                </div>
            </div>

            <div class="p-6 bg-slate-50 rounded-lg transition-all duration-300 hover:shadow-xl hover:bg-white hover:-translate-y-1">
                <div class="flex items-start">
                    <div class="flex-shrink-0 bg-sky-100 text-sky-600 w-12 h-12 rounded-full flex items-center justify-center">
                        <i class="fas fa-calculator text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Análisis Geoestadístico</h3>
                        <p class="text-gray-600 leading-relaxed">Aplicación de métodos estadísticos para analizar patrones espaciales y relaciones de datos.</p>
                    </div>
                </div>
            </div>

            <div class="p-6 bg-slate-50 rounded-lg transition-all duration-300 hover:shadow-xl hover:bg-white hover:-translate-y-1">
                <div class="flex items-start">
                    <div class="flex-shrink-0 bg-sky-100 text-sky-600 w-12 h-12 rounded-full flex items-center justify-center">
                        <i class="fas fa-satellite-dish text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Teledetección y Clasificación</h3>
                        <p class="text-gray-600 leading-relaxed">Extracción de información de imágenes satelitales y aéreas para mapeo de coberturas y cambios.</p>
                    </div>
                </div>
            </div>
            
            <div class="p-6 bg-slate-50 rounded-lg transition-all duration-300 hover:shadow-xl hover:bg-white hover:-translate-y-1">
                <div class="flex items-start">
                    <div class="flex-shrink-0 bg-sky-100 text-sky-600 w-12 h-12 rounded-full flex items-center justify-center">
                        <i class="fas fa-project-diagram text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Análisis de Redes y Conectividad</h3>
                        <p class="text-gray-600 leading-relaxed">Estudio de rutas óptimas, áreas de servicio y conectividad en redes de transporte o servicios.</p>
                    </div>
                </div>
            </div>

            <div class="p-6 bg-slate-50 rounded-lg transition-all duration-300 hover:shadow-xl hover:bg-white hover:-translate-y-1">
                <div class="flex items-start">
                    <div class="flex-shrink-0 bg-sky-100 text-sky-600 w-12 h-12 rounded-full flex items-center justify-center">
                        <i class="fas fa-server text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Integración y Big Data Geoespacial</h3>
                        <p class="text-gray-600 leading-relaxed">Manejo y análisis de grandes volúmenes de datos geográficos para insights complejos.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

    <script>
        AOS.init({
            duration: 800,
            once: false,
        });
    </script>
    
    <?php include_once '../../inc/footer.php'; ?>

</body>

</body>
</html>