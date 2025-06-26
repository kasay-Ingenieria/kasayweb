<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguimiento GPS - Kasay Ingeniería</title>
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
                    Seguimiento GPS: <br class="hidden md:inline"> Control y Eficiencia en Movimiento
                </h1>
                <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto md:mx-0 font-lora">
                    Optimice la gestión de su flota vehicular y activos con nuestras soluciones avanzadas de monitoreo en tiempo real.
                </p>
                <a href="#solucion" class="bg-white text-sky-700 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg shadow-lg">
                    Descubra Nuestros Sistemas
                </a>
            </div>
            <div class="md:w-1/2 flex justify-center md:justify-end">
                <img src="assets/images/gps_hero_illustration.png" alt="Ilustración de seguimiento GPS en mapa" class="w-full max-w-lg rounded-lg shadow-2xl animate-fade-in">
            </div>
        </div>
    </section>

    <hr/>

    <section id="solucion" class="py-16 bg-white [scroll-margin-top:80px]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800">
                Control Total con Tecnología GPS Avanzada
            </h2>
            <div class="max-w-5xl mx-auto text-center text-lg leading-relaxed text-gray-700">
                <p class="mb-8">
                    En Kasay Ingeniería S.A.S., somos expertos en la **implementación de sistemas de seguimiento vehicular y de activos con tecnología GPS**. Nuestras soluciones están diseñadas para ofrecerle visibilidad total y control sobre sus recursos móviles, mejorando la seguridad, la eficiencia operativa y la toma de decisiones.
                </p>
                <p>
                    Desde flotas de vehículos hasta maquinaria especializada y bienes de alto valor, nuestros sistemas de seguimiento le proporcionan datos precisos en tiempo real, lo que le permite optimizar rutas, reducir costos operativos y responder de manera proactiva ante cualquier eventualidad.
                </p>
            </div>
        </div>
    </section>

    <hr/>

    <section class="py-16 bg-blue-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800">
                Ventajas Estratégicas de Nuestro Seguimiento GPS
            </h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-route"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Optimización de Rutas y Tiempos</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Reduzca los tiempos de entrega y el consumo de combustible mediante la planificación y seguimiento eficiente.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Mayor Seguridad de Activos</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Monitoree la ubicación de sus vehículos y activos en todo momento, previniendo robos y usos no autorizados.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Ahorro Significativo</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Disminuya gastos de mantenimiento, combustible y personal al optimizar la operación de su flota.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Datos en Vivo y Precisos</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Acceda a la ubicación, velocidad, estado del motor y más, en tiempo real para decisiones rápidas.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Reportes Personalizados</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Genere informes de actividad, histórico de rutas, y rendimiento para un análisis detallado de sus operaciones.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Mejora de la Responsabilidad</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Establezca zonas geográficas, alertas por exceso de velocidad y comportamientos indebidos para mayor control.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <hr/>

    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800">
                Características Destacadas de Nuestros Sistemas GPS
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-satellite-dish"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Monitoreo en Tiempo Real</h3>
                        <p class="text-gray-600">
                            Visualice la ubicación exacta de cada vehículo o activo en un mapa interactivo al instante.
                        </p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-map-pin"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Geo-cercas Personalizables</h3>
                        <p class="text-gray-600">
                            Cree perímetros virtuales y reciba alertas automáticas al entrar o salir de estas zonas.
                        </p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-history"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Historial Detallado de Recorridos</h3>
                        <p class="text-gray-600">
                            Revise rutas pasadas, tiempos de parada y velocidad para un análisis completo de la actividad.
                        </p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-bell"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Alertas y Notificaciones</h3>
                        <p class="text-gray-600">
                            Reciba avisos por eventos como exceso de velocidad, entrada/salida de zonas o detección de movimiento.
                        </p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Informes Completos</h3>
                        <p class="text-gray-600">
                            Generación de reportes de kilometraje, tiempo de inactividad, consumo de combustible y más.
                        </p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Acceso Multiplataforma</h3>
                        <p class="text-gray-600">
                            Monitoree desde su computadora, tablet o smartphone, con nuestra plataforma web y aplicaciones móviles.
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
                Impulse la Eficiencia de Su Flota Hoy Mismo
            </h2>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto">
                Descubra cómo nuestras soluciones de seguimiento GPS pueden optimizar sus operaciones y brindarle un control sin precedentes.
            </p>
            <a href="src/views/contacto.php" class="bg-white text-blue-700 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg shadow-xl">
                Solicitar una Demostración
            </a>
        </div>
    </section>

    <hr/>

    <?php include_once '../inc/footer.php'; ?>

</body>
</html>