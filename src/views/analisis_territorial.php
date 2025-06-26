<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análisis Territorial - Kasay Ingeniería</title>
    <base href="/kasayweb/">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <style>
        .font-lora {
            font-family: 'Lora', serif;
        }
        .gradient-bg-hero {
            background: linear-gradient(120deg, rgba(0,124,240,0.9), rgba(0,154,186,0.8));
        }
        .card-hover-effect {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .card-hover-effect:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">

    <?php include_once '../inc/navbar.php'; ?>

    <section class="gradient-bg-hero text-white pt-24 pb-16 md:pt-32 md:pb-24">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-12">
            <div class="md:w-1/2 text-center md:text-left">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Análisis Territorial: <br class="hidden md:inline"> Inteligencia para sus Decisiones
                </h1>
                <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto md:mx-0 font-lora">
                    Transformamos datos geográficos en conocimientos accionables para una planificación y gestión territorial estratégica.
                </p>
                <a href="#solucion" class="bg-white text-sky-700 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg shadow-lg">
                    Descubra los Insights
                </a>
            </div>
            <div class="md:w-1/2 flex justify-center md:justify-end">
                <img src="assets/images/analisis_territorial_hero_illustration.png" alt="Ilustración de análisis de datos geoespaciales y gráficos" class="w-full max-w-lg rounded-lg shadow-2xl animate-fade-in">
            </div>
        </div>
    </section>

    <hr/>

    <section id="solucion" class="py-16 bg-white [scroll-margin-top:80px]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800">
                Información Geoespacial Convertida en Estrategia
            </h2>
            <div class="max-w-5xl mx-auto text-center text-lg leading-relaxed text-gray-700">
                <p class="mb-8">
                    En Kasay Ingeniería, el **Análisis Territorial** es la clave para desvelar patrones, relaciones y tendencias ocultas en sus datos geoespaciales. Vamos más allá de la simple visualización, realizando **análisis espacial y estudios territoriales profundos para la toma de decisiones estratégicas**.
                </p>
                <p>
                    Utilizamos herramientas avanzadas de Sistemas de Información Geográfica (SIG) y técnicas de Big Data para procesar y comprender grandes volúmenes de información, desde variables socioeconómicas y ambientales hasta infraestructura y dinámicas de uso del suelo.
                </p>
            </div>
        </div>
    </section>

    <hr/>

    <section class="py-16 bg-blue-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800">
                Beneficios Tangibles del Análisis Territorial
            </h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-vote-yea"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Decisiones Basadas en Datos</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Reduzca la incertidumbre y tome decisiones más sólidas y estratégicas con insights geoespaciales.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Optimización de Recursos</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Identifique las mejores ubicaciones, rutas y áreas de inversión para maximizar el impacto.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Identificación de Riesgos</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Detecte y evalúe vulnerabilidades, zonas de riesgo o conflictos territoriales.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-map-signs"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Planificación Urbana y Rural</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Soporte para el desarrollo de planes de ordenamiento territorial, expansión urbana y uso del suelo.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Insights Detallados</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Obtenga una comprensión más profunda de las interacciones espaciales y los fenómenos geográficos.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-chart-area"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Visualización de Resultados</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Presentación clara y efectiva de los resultados del análisis a través de mapas y gráficos.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <hr/>

    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800">
                Nuestras Metodologías y Capacidades en Análisis
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-sitemap"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Análisis Multicriterio</h3>
                        <p class="text-gray-600">
                            Evaluación de múltiples factores para determinar la idoneidad o viabilidad de un área o proyecto.
                        </p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-dna"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Modelado y Simulación Espacial</h3>
                        <p class="text-gray-600">
                            Creación de modelos predictivos para escenarios futuros de crecimiento, impacto o distribución.
                        </p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Análisis Geoestadístico</h3>
                        <p class="text-gray-600">
                            Aplicación de métodos estadísticos para analizar patrones espaciales y relaciones de datos.
                        </p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-satellite-dish"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Teledetección y Clasificación</h3>
                        <p class="text-gray-600">
                            Extracción de información de imágenes satelitales y aéreas para mapeo de coberturas y cambios.
                        </p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Análisis de Redes y Conectividad</h3>
                        <p class="text-gray-600">
                            Estudio de rutas óptimas, áreas de servicio y conectividad en redes de transporte o servicios.
                        </p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-server"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Integración y Big Data Geoespacial</h3>
                        <p class="text-gray-600">
                            Manejo y análisis de grandes volúmenes de datos geográficos para insights complejos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr/>

    <section class="py-20 bg-gradient-to-r from-blue-600 to-cyan-500 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Convierta sus Datos en Ventaja Competitiva
            </h2>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto">
                Permita que nuestros expertos en análisis territorial revelen el potencial oculto de su información geográfica.
            </p>
            <a href="src/views/contacto.php" class="bg-white text-blue-700 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg shadow-xl">
                Contáctenos para un Análisis
            </a>
        </div>
    </section>

    <hr/>

    <?php include_once '../inc/footer.php'; ?>

</body>
</html>