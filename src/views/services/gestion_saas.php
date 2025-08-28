<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma Catastral Inteligente (SaaS) - Kasay Ingeniería</title>
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

    <section id="inicio" class="relative w-full h-screen overflow-hidden text-white">
        <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
            <source src="/kasayweb/assets/videos/saas_platform_hero.mp4" type="video/mp4">
            Tu navegador no soporta video HTML5.
        </video>
        <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-60 z-10"></div>
        <div class="relative z-20 flex flex-col items-center justify-center h-full text-center px-6">
            <div data-aos="fade-down">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Plataforma Catastral Inteligente (SaaS)
                </h1>
                <p class="text-lg md:text-2xl mb-10 max-w-4xl mx-auto font-lora">
                    Su gestión territorial, simplificada en la nube. Nuestra solución es segura, escalable y siempre actualizada.
                </p>
                <a href="#plataforma" class="bg-sky-600 text-white font-bold py-3 px-8 rounded-full hover:bg-sky-700 transition duration-300 text-lg shadow-lg">
                    Ver Características Clave
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right">
                    <h2 class="text-3xl md:text-4xl font-bold text-sky-900 mb-6">El Fin de la Complejidad. El Inicio de la Eficiencia.</h2>
                    <p class="text-lg text-gray-600 mb-6">
                        Con nuestro modelo de Software como Servicio (SaaS), eliminamos las barreras tecnológicas para que pueda centrarse en lo que realmente importa: la gestión de su territorio. Olvídese de servidores, mantenimiento y actualizaciones costosas.
                    </p>
                    <div class="space-y-5">
                        <div class="flex items-start"><i class="fas fa-cloud text-sky-500 text-2xl w-8"></i><p class="ml-3 text-gray-700"><strong>Acceso Universal:</strong> Gestione su catastro desde cualquier lugar y en cualquier dispositivo con conexión a internet.</p></div>
                        <div class="flex items-start"><i class="fas fa-shield-alt text-sky-500 text-2xl w-8"></i><p class="ml-3 text-gray-700"><strong>Seguridad de Nivel Superior:</strong> Sus datos están protegidos en centros de datos de alta seguridad con copias de respaldo automáticas.</p></div>
                        <div class="flex items-start"><i class="fas fa-chart-line text-sky-500 text-2xl w-8"></i><p class="ml-3 text-gray-700"><strong>Costo-Eficiencia:</strong> Modelo de suscripción predecible que elimina la necesidad de grandes inversiones iniciales en infraestructura.</p></div>
                    </div>
                </div>
                <div data-aos="fade-left">
                    <img src="/kasayweb/assets/images/saas_user_experience.jpg" alt="Usuario accediendo a la plataforma SaaS desde un portátil" class="rounded-lg shadow-2xl w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <section id="plataforma" class="py-20 bg-slate-50 [scroll-margin-top:80px]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-20 text-sky-900 section-title" data-aos="fade-up">
                Una Plataforma Diseñada para el Gestor Moderno
            </h2>
            <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                <div data-aos="fade-right">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Visualizador Geográfico Interactivo</h3>
                    <p class="text-gray-600 mb-4">Explore, consulte y analice su información territorial sobre un potente motor de mapas. Realice búsquedas por dirección, matrícula o referencia catastral y visualice capas de información de forma dinámica.</p>
                </div>
                <div data-aos="fade-left">
                    <img src="/kasayweb/assets/images/saas_feature_geovisor.png" alt="Screenshot del visualizador geográfico de la plataforma" class="rounded-lg shadow-xl border border-gray-200">
                </div>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                <div class="md:order-2" data-aos="fade-left">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Gestión de Datos 360°</h3>
                    <p class="text-gray-600 mb-4">Administre de forma centralizada todos los componentes de sus predios. Fichas detalladas para la información física, jurídica y económica, con historiales de cambios y gestión documental integrada.</p>
                </div>
                <div class="md:order-1" data-aos="fade-right">
                    <img src="/kasayweb/assets/images/saas_feature_datamanagement.png" alt="Screenshot de la ficha de gestión de datos prediales" class="rounded-lg shadow-xl border border-gray-200">
                </div>
            </div>
             <div class="grid md:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Analítica y Reportes Inteligentes</h3>
                    <p class="text-gray-600 mb-4">Genere reportes personalizados, certificados y estadísticas clave para la toma de decisiones. Visualice el estado de su catastro a través de dashboards intuitivos y fáciles de interpretar.</p>
                </div>
                <div data-aos="fade-left">
                    <img src="/kasayweb/assets/images/saas_feature_reports.png" alt="Screenshot del dashboard de analíticas y reportes" class="rounded-lg shadow-xl border border-gray-200">
                </div>
            </div>
        </div>
    </section>

     <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16 text-sky-900 section-title" data-aos="fade-up">
                Implementación Rápida y Sencilla
            </h2>
            <div class="grid md:grid-cols-3 gap-8 text-center max-w-5xl mx-auto">
                <div data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-sky-100 text-sky-600 w-20 h-20 rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-4">1</div>
                    <h3 class="text-xl font-bold mb-2">Configuración Inicial</h3>
                    <p class="text-gray-600">Preparamos su instancia personalizada en la nube y la ajustamos a las necesidades específicas de su municipio.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-sky-100 text-sky-600 w-20 h-20 rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-4">2</div>
                    <h3 class="text-xl font-bold mb-2">Migración de Datos</h3>
                    <p class="text-gray-600">Nuestro equipo de expertos le asiste en la carga y validación de su información catastral existente en la plataforma.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-sky-100 text-sky-600 w-20 h-20 rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-4">3</div>
                    <h3 class="text-xl font-bold mb-2">Capacitación y Soporte</h3>
                    <p class="text-gray-600">Formamos a su equipo para que domine la herramienta y le brindamos soporte continuo para garantizar su éxito.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gradient-to-r from-sky-800 to-blue-900 text-white">
        <div class="container mx-auto px-6 text-center" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">¿Listo para Dar el Salto a la Nube?</h2>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto font-lora">
                Descubra cómo nuestra plataforma SaaS puede revolucionar la administración de su territorio con una demostración personalizada.
            </p>
            <a href="/kasayweb/src/views/contacto.php" class="bg-white text-sky-700 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg shadow-xl">
                Solicitar una Demostración Guiada
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