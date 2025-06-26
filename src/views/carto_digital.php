<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartografía Digital - Kasay Ingeniería</title>
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
                    Cartografía Digital: <br class="hidden md:inline"> El Mapa de Su Visión
                </h1>
                <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto md:mx-0 font-lora">
                    Convertimos la información geográfica en mapas precisos y detallados para una representación digital completa del territorio.
                </p>
                <a href="#solucion" class="bg-white text-sky-700 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg shadow-lg">
                    Explore Nuestros Servicios
                </a>
            </div>
            <div class="md:w-1/2 flex justify-center md:justify-end">
                <img src="assets/images/cartografia_hero_illustration.png" alt="Ilustración de cartografía digital con mapa y datos" class="w-full max-w-lg rounded-lg shadow-2xl animate-fade-in">
            </div>
        </div>
    </section>

    <hr/>

    <section id="solucion" class="py-16 bg-white [scroll-margin-top:80px]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800">
                Precisión y Detalle en Cada Mapa Digital
            </h2>
            <div class="max-w-5xl mx-auto text-center text-lg leading-relaxed text-gray-700">
                <p class="mb-8">
                    En Kasay Ingeniería, somos especialistas en la **producción y actualización de cartografía digital** para una representación precisa y completa del territorio. Entendemos que un mapa es más que una imagen; es una herramienta vital para la planificación, el desarrollo y la toma de decisiones informadas.
                </p>
                <p>
                    Ofrecemos servicios integrales que abarcan desde la captura de datos geoespaciales hasta la elaboración de mapas temáticos, topográficos, urbanos y rurales, garantizando siempre la máxima calidad y exactitud.
                </p>
            </div>
        </div>
    </section>

    <hr/>

    <section class="py-16 bg-blue-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800">
                Nuestro Amplio Rango de Servicios Cartográficos
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Cartografía Base y Topográfica</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Creación de mapas base fundamentales para cualquier proyecto, con información topográfica y del terreno detallada.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Cartografía Temática Especializada</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Desarrollo de mapas enfocados en temas específicos: demografía, uso del suelo, riesgos, recursos naturales, etc.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-images"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Ortofotografía y Modelos Digitales</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Generación de ortofotos de alta resolución, Modelos Digitales de Terreno (MDT) y Superficie (MDS).
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Actualización y Mantenimiento</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Servicios de revisión y actualización constante para garantizar la vigencia y relevancia de su cartografía.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-mouse-pointer"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Digitalización y Conversión de Datos</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Transformamos mapas impresos o datos CAD a formatos digitales compatibles con sistemas SIG.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-map-pin"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Mapas Urbanos y Rurales Detallados</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Cartografía específica para la gestión de infraestructuras, servicios públicos, propiedades y recursos naturales.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <hr/>

    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800">
                Nuestro Proceso para Mapas de Excelencia
            </h2>
            <div class="grid md:grid-cols-1 lg:grid-cols-3 gap-10 items-start max-w-5xl mx-auto">
                <div class="text-center flex flex-col items-center p-6">
                    <div class="text-sky-600 text-6xl mb-4">
                        <i class="fas fa-satellite"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">1. Captura de Datos Geoespaciales</h3>
                    <p class="text-gray-600">
                        Utilizamos tecnología avanzada como drones, GPS de precisión y LIDAR para una recolección exhaustiva.
                    </p>
                </div>
                <div class="text-center flex flex-col items-center p-6">
                    <div class="text-sky-600 text-6xl mb-4">
                        <i class="fas fa-bezier-curve"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">2. Procesamiento y Georreferenciación</h3>
                    <p class="text-gray-600">
                        Transformamos los datos crudos en información geoespacial precisa y referenciada, lista para la cartografía.
                    </p>
                </div>
                <div class="text-center flex flex-col items-center p-6">
                    <div class="text-sky-600 text-6xl mb-4">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">3. Diseño y Producción Cartográfica</h3>
                    <p class="text-gray-600">
                        Diseñamos y elaboramos mapas digitales con simbología clara y atractiva, adaptados a sus objetivos.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <hr/>

    <section class="py-20 bg-gradient-to-r from-blue-600 to-cyan-500 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Convierta Sus Datos en Mapas Inteligentes
            </h2>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto">
                Permítanos crear la cartografía digital que su proyecto o entidad necesita para una comprensión territorial sin igual.
            </p>
            <a href="src/views/contacto.php" class="bg-white text-blue-700 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg shadow-xl">
                Cotice su Proyecto Cartográfico
            </a>
        </div>
    </section>

    <hr/>

    <?php include_once '../inc/footer.php'; ?>

</body>
</html>