<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operación Catastral - Kasay Ingeniería</title>
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
                    Operación Catastral: <br class="hidden md:inline"> Datos Precisos Desde el Terreno
                </h1>
                <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto md:mx-0 font-lora">
                    Realizamos la captura integral de datos físicos, jurídicos y económicos para una gestión catastral completa y actualizada.
                </p>
                <a href="#solucion" class="bg-white text-sky-700 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg shadow-lg">
                    Conozca Nuestro Enfoque
                </a>
            </div>
            <div class="md:w-1/2 flex justify-center md:justify-end">
                <img src="assets/images/operacion_catastral_hero_illustration.png" alt="Ilustración de operación catastral en campo con dispositivos" class="w-full max-w-lg rounded-lg shadow-2xl animate-fade-in">
            </div>
        </div>
    </section>

    <hr/>

    <section id="solucion" class="py-16 bg-white [scroll-margin-top:80px]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800">
                La Base Fundamental de un Catastro Moderno
            </h2>
            <div class="max-w-5xl mx-auto text-center text-lg leading-relaxed text-gray-700">
                <p class="mb-8">
                    La **Operación Catastral** es el pilar para mantener un sistema de información territorial actualizado y fiable. En Kasay Ingeniería, nos encargamos de la **captura integral de datos físicos, jurídicos y económicos en el terreno**, garantizando la precisión y la consistencia de la información catastral.
                </p>
                <p>
                    Nuestro equipo experto, utilizando tecnología de punta, se desplaza al sitio para recolectar y verificar cada detalle, desde las características físicas de los predios hasta su situación legal y valor económico. Esto es crucial para la correcta administración territorial, la planificación urbana y la equidad fiscal.
                </p>
            </div>
        </div>
    </section>

    <hr/>

    <section class="py-16 bg-blue-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800">
                Ventajas de una Operación Catastral Profesional
            </h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Información Veraz y Fiable</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Garantice la exactitud de los datos para evitar disputas y errores en la gestión territorial.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Catastro Siempre Actualizado</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Mantenga su base de datos catastral al día con los cambios en el terreno y la propiedad.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Soporte Legal y Económico</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Proporcione la base para una tributación justa y la seguridad jurídica de la tenencia de la tierra.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Eficiencia en la Gestión</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Agilice los trámites, reduzca los tiempos de respuesta y mejore el servicio a los ciudadanos.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Cobertura Integral del Territorio</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Asegure que cada predio y su información asociada estén correctamente registrados y georreferenciados.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Transparencia y Accesibilidad</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Mejore la transparencia en la administración pública y el acceso a la información catastral.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <hr/>

    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800">
                Nuestro Proceso para una Operación Catastral Exitosa
            </h2>
            <div class="grid md:grid-cols-1 lg:grid-cols-3 gap-10 items-start max-w-5xl mx-auto">
                <div class="text-center flex flex-col items-center p-6">
                    <div class="text-sky-600 text-6xl mb-4">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">1. Planificación Detallada</h3>
                    <p class="text-gray-600">
                        Diseñamos estrategias de campo eficientes, definiendo áreas de trabajo y recursos necesarios.
                    </p>
                </div>
                <div class="text-center flex flex-col items-center p-6">
                    <div class="text-sky-600 text-6xl mb-4">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">2. Captura de Datos en Terreno</h3>
                    <p class="text-gray-600">
                        Recopilamos información física con GPS de alta precisión y herramientas móviles, junto a datos jurídicos y económicos.
                    </p>
                </div>
                <div class="text-center flex flex-col items-center p-6">
                    <div class="text-sky-600 text-6xl mb-4">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">3. Procesamiento y Validación de Datos</h3>
                    <p class="text-gray-600">
                        Verificamos, depuramos e integramos la información capturada en la base de datos catastral.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <hr/>

    <section class="py-20 bg-gradient-to-r from-blue-600 to-cyan-500 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Asegure la Precisión de su Información Catastral
            </h2>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto">
                Confíe en Kasay Ingeniería para una operación catastral integral y eficiente que fortalezca su gestión territorial.
            </p>
            <a href="src/views/contacto.php" class="bg-white text-blue-700 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg shadow-xl">
                Agendar una Consulta
            </a>
        </div>
    </section>

    <hr/>

    <?php include_once '../inc/footer.php'; ?>

</body>
</html>