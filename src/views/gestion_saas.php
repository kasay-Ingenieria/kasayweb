<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Catastral SaaS - Kasay Ingeniería</title>
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
                    Gestión Catastral del Futuro: <br class="hidden md:inline"> Ahora en la Nube
                </h1>
                <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto md:mx-0 font-lora">
                    Transforme su administración territorial con nuestra plataforma de vanguardia, accesible, segura y siempre actualizada.
                </p>
                <a href="#solucion" class="bg-white text-sky-700 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg shadow-lg">
                    Descubra la Solución
                </a>
            </div>
            <div class="md:w-1/2 flex justify-center md:justify-end">
                <img src="/kasayweb/assets/images/saas_hero_illustration.png" alt="Ilustración de plataforma SaaS Catastral" class="w-full max-w-lg rounded-lg shadow-2xl animate-fade-in">
            </div>
        </div>
    </section>

    <hr/>

    <section id="solucion" class="py-16 bg-white [scroll-margin-top:80px]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800">
                Optimice su Gestión Territorial con Kasay SaaS
            </h2>
            <div class="max-w-5xl mx-auto text-center text-lg leading-relaxed text-gray-700">
                <p class="mb-8">
                    Nuestro <strong>Sistema de Gestión Catastral bajo la modalidad de Software como Servicio (SaaS)</strong> le permite modernizar y centralizar la administración de la información territorial de su municipio. Olvídese de las complejas infraestructuras y los altos costos de mantenimiento; con Kasay, su catastro está en la nube, siempre disponible y seguro.
                </p>
                <p>
                    Ofrecemos una solución integral que soporta la organización y administración de datos prediales, jurídicos, económicos y físicos, facilitando la toma de decisiones estratégicas y la optimización de procesos operativos.
                </p>
            </div>
        </div>
    </section>

    <hr/>

    <section class="py-16 bg-blue-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800">
                Ventajas Inigualables de Nuestra Plataforma
            </h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Accesibilidad Total</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Acceda a su información catastral desde cualquier lugar, en cualquier momento, con solo una conexión a internet.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Seguridad y Respaldo</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Sus datos están protegidos con los más altos estándares de seguridad y copias de respaldo automáticas, garantizando su integridad.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Escalabilidad y Ahorro</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Adapte la capacidad del sistema a sus necesidades, eliminando costos de infraestructura y mantenimiento.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Actualizaciones Constantes</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Benefíciese automáticamente de las últimas funcionalidades y mejoras sin interrupciones ni costos adicionales.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Facilidad de Uso</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Interfaz intuitiva y amigable que simplifica la gestión diaria y reduce la curva de aprendizaje del personal.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-sitemap"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Integración Flexible</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Capacidad de integrarse con otros sistemas municipales existentes para un ecosistema de información unificado.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <hr/>

    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800">
                Características Clave de Nuestra Plataforma SaaS
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Visualizador Geográfico Interactivo</h3>
                        <p class="text-gray-600">
                            Explore y analice la información territorial a través de mapas dinámicos y herramientas de consulta espacial avanzadas.
                        </p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-database"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Base de Datos Catastral Centralizada</h3>
                        <p class="text-gray-600">
                            Gestione de forma unificada toda la información de predios: datos jurídicos, económicos y físicos.
                        </p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Gestión de Trámites y Solicitudes</h3>
                        <p class="text-gray-600">
                            Automatice y realice seguimiento a los procesos de trámites catastrales y solicitudes ciudadanas.
                        </p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Reportes y Análisis de Datos</h3>
                        <p class="text-gray-600">
                            Genere informes personalizados y visualizaciones estadísticas para una mejor toma de decisiones.
                        </p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Módulos de Campo (Mobile)</h3>
                        <p class="text-gray-600">
                            Permita la captura y actualización de información directamente desde el terreno, en tiempo real.
                        </p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Integración con Entidades Externas</h3>
                        <p class="text-gray-600">
                            Facilite el intercambio de información con otras instituciones gubernamentales y entidades.
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
                ¿Listo para Modernizar su Gestión Catastral?
            </h2>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto">
                Solicite una demostración personalizada y descubra cómo nuestra plataforma SaaS puede transformar la administración de su territorio.
            </p>
            <a href="src/views/contacto.php" class="bg-white text-blue-700 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg shadow-xl">
                Agendar Demostración
            </a>
        </div>
    </section>

    <hr/>

    <?php include_once '../inc/footer.php'; ?>

</body>
</html>