<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bases de Datos Geográficas - Kasay Ingeniería</title>
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
                    Bases de Datos Geográficas: <br class="hidden md:inline"> El Corazón de Su Información
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

    <hr/>

    <section id="solucion" class="py-16 bg-white [scroll-margin-top:80px]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800">
                La Infraestructura de Datos para su Territorio
            </h2>
            <div class="max-w-5xl mx-auto text-center text-lg leading-relaxed text-gray-700">
                <p class="mb-8">
                    En Kasay Ingeniería, nos especializamos en el **diseño e implementación de bases de datos espaciales** para la gestión integral de información geográfica. Una base de datos geográfica sólida es el cimiento para cualquier Sistema de Información Geográfica (SIG) efectivo, permitiendo almacenar, organizar y consultar datos con un componente espacial.
                </p>
                <p>
                    Nuestras soluciones aseguran que su información geográfica sea accesible, segura, actualizada y estructurada de manera óptima para soportar sus necesidades de análisis, visualización y toma de decisiones.
                </p>
            </div>
        </div>
    </section>

    <hr/>

    <section class="py-16 bg-blue-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800">
                Beneficios de Contar con Bases de Datos Geográficas Robustas
            </h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-cubes"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Integración de Información</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Unifique datos de diversas fuentes (catastrales, ambientales, demográficos) en un único repositorio.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Consistencia y Fiabilidad</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Garantice la calidad, integridad y coherencia de sus datos geoespaciales.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Consultas Ágiles y Potentes</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Recupere y analice grandes volúmenes de datos espaciales de forma rápida y eficiente.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Seguridad y Permisos</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Proteja su información sensible y controle el acceso de usuarios con sistemas de permisos robustos.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-expand-alt"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Escalabilidad y Crecimiento</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Diseñadas para crecer junto con su organización y el volumen de sus datos.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
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

    <hr/>

    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800">
                Nuestros Servicios en Bases de Datos Geográficas
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
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
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
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
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
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
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
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
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
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
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
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

    <hr/>

    <section class="py-20 bg-gradient-to-r from-blue-600 to-cyan-500 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Construya el Cimiento de su Inteligencia Territorial
            </h2>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto">
                Hable con nuestros expertos para diseñar una base de datos geográfica que impulse sus proyectos.
            </p>
            <a href="src/views/contacto.php" class="bg-white text-blue-700 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg shadow-xl">
                Contáctenos Ahora
            </a>
        </div>
    </section>

    <hr/>

    <?php include_once '../inc/footer.php'; ?>

</body>
</html>