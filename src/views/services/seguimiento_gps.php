<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma de Inteligencia Logística y Seguimiento GPS - Kasay Ingeniería</title>

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
        .industry-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid transparent;
        }
        .industry-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            border-color: #3b82f6; /* border-blue-500 */
        }
    </style>
</head>

<body class="bg-white text-gray-800">

    <?php include_once '../../inc/navbar.php'; ?>

    <section id="inicio" class="relative w-full h-screen overflow-hidden text-white">
        <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
            <source src="/kasayweb//assets/videos/servicios/servicios_seguimiento_gps.mp4" type="video/mp4">
            Tu navegador no soporta video HTML5.
        </video>
        <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-60 z-10"></div>
        <div class="relative z-20 flex flex-col items-center justify-center h-full text-center px-6">
            <div data-aos="fade-down">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Inteligencia Logística en Tiempo Real
                </h1>
                <p class="text-lg md:text-2xl mb-10 max-w-4xl mx-auto font-lora">
                    Transforme sus operaciones con nuestra plataforma avanzada de seguimiento GPS, optimización de flotas y gestión de activos.
                </p>
                <a href="#aplicacion-industria" class="bg-sky-600 text-white font-bold py-3 px-8 rounded-full hover:bg-sky-700 transition duration-300 text-lg shadow-lg">
                    Aplicación según su Industria
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <img src="/kasayweb/assets/images/paginas_servicios/gps_reports.png" alt="Dashboard de la plataforma de seguimiento GPS" class="rounded-lg shadow-2xl w-full h-auto">
                </div>
                <div data-aos="fade-left">
                    <h2 class="text-3xl md:text-4xl font-bold text-sky-900 mb-6">Convierta Datos de Localización en Inteligencia de Negocio</h2>
                    <p class="text-lg text-gray-600 mb-4">
                        Nuestra solución va más allá de mostrar un punto en el mapa. Recopilamos y procesamos datos telemáticos para ofrecerle información valiosa sobre la eficiencia, seguridad y productividad de toda su operación móvil.
                    </p>
                    <p class="text-lg text-gray-600">
                        Tome decisiones proactivas basadas en análisis de rendimiento, patrones de conducción, consumo de combustible y tiempos de inactividad, todo desde una plataforma centralizada e intuitiva.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="aplicacion-industria" class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16 text-sky-900 section-title" data-aos="fade-up">
                Soluciones a la Medida de su Industria
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg industry-card" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-truck text-sky-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Transporte y Logística</h3>
                    <p class="text-gray-600">Optimice entregas, monitorice la cadena de frío y asegure la carga con seguimiento en tiempo real y optimización de rutas.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg industry-card" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-hard-hat text-sky-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Construcción y Maquinaria</h3>
                    <p class="text-gray-600">Controle el uso de maquinaria pesada, prevenga robos y gestione las horas de operación para un mantenimiento predictivo.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg industry-card" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-car text-sky-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Flotas de Servicio y Ventas</h3>
                    <p class="text-gray-600">Mejore la puntualidad, valide visitas a clientes y asigne al técnico más cercano de forma eficiente para aumentar la satisfacción.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg industry-card" data-aos="fade-up" data-aos-delay="400">
                    <i class="fas fa-shield-alt text-sky-600 text-4xl mb-4"></i>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Seguridad y Traslado de Valores</h3>
                    <p class="text-gray-600">Garantice la integridad de sus activos con alertas de pánico, apagado remoto del motor y seguimiento de alta frecuencia.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="a" class="py-20 bg-white [scroll-margin-top:80px]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-20 text-sky-900 section-title" data-aos="fade-up">
                Una Plataforma Robusta para un Control Absoluto
            </h2>
            <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                <div data-aos="fade-right">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Monitoreo en Vivo y Geo-cercas</h3>
                    <p class="text-gray-600 mb-4">Visualice toda su flota en un mapa interactivo con actualizaciones en tiempo real. Cree perímetros virtuales (geo-cercas) y reciba notificaciones instantáneas cuando un vehículo entra o sale de un área designada, como una bodega, un proyecto o la zona de un cliente.</p>
                </div>
                <div data-aos="fade-left">
                    <img src="/kasayweb/assets/images/paginas_servicios/dashboard_seguimiento.png" alt="Mapa en vivo con geo-cercas" class="rounded-lg shadow-xl">
                </div>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="md:order-2" data-aos="fade-left">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Reportes Analíticos y Alertas</h3>
                    <p class="text-gray-600 mb-4">Genere reportes detallados sobre kilometraje, tiempos de parada, excesos de velocidad y consumo de combustible. Configure alertas personalizadas para eventos críticos y recíbalas por email o notificación push, permitiéndole actuar de inmediato.</p>
                </div>
                <div class="md:order-1" data-aos="fade-right">
                    <img src="/kasayweb/assets/images/paginas_servicios/dashboard_gps.png" alt="Dashboard de reportes y analíticas" class="rounded-lg shadow-xl">
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