<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inteligencia Visual Inmersiva 360° - Kasay Ingeniería</title>

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
        .feature-item { transition: background-color 0.3s ease; }
        .feature-item:hover { background-color: #f0f9ff; /* bg-blue-50 */ }
        .timeline-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .timeline-card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.08); }
    </style>
</head>

<body class="bg-white text-gray-800">

    <?php include_once '../../inc/navbar.php'; ?>

    <section id="inicio" class="relative w-full h-screen overflow-hidden text-white">
        <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
            <source src="../../../assets/videos/servicios/servicios_360.mp4" type="video/mp4">
            Tu navegador no soporta video HTML5.
        </video>
        <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-60 z-10"></div>
        <div class="relative z-20 flex flex-col items-center justify-center h-full text-center px-6">
            <div data-aos="fade-down">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Inteligencia Visual Inmersiva 360°
                </h1>
                <p class="text-lg md:text-2xl mb-10 max-w-4xl mx-auto font-lora">
                    Redefina la inspección de activos, la planificación de proyectos y la toma de decisiones con nuestros recorridos virtuales de alta precisión.
                </p>
                <a href="#plataforma" class="bg-sky-600 text-white font-bold py-3 px-8 rounded-full hover:bg-sky-700 transition duration-300 text-lg shadow-lg">
                    Explorar la Tecnología
                </a>
            </div>
        </div>
    </section>

    <section id="aplicaciones" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-sky-900 section-title">Aplicaciones Estratégicas</h2>
                <p class="text-lg text-gray-600 mt-6 max-w-3xl mx-auto">Nuestra tecnología 360° ofrece soluciones tangibles para los desafíos más complejos de diversas industrias.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <img src="../../../assets/images/paginas_servicios/captura_imagenes360.jpg" alt="Equipo técnico realizando captura 360" class="rounded-lg shadow-xl w-full h-auto">
                </div>
                <div class="space-y-6" data-aos="fade-left">
                    <div class="p-4 rounded-lg feature-item flex items-start">
                        <i class="fas fa-hard-hat text-sky-600 text-3xl w-12 text-center mt-1"></i>
                        <div class="ml-4">
                            <h3 class="text-xl font-bold text-gray-800">Inspección de Infraestructura</h3>
                            <p class="text-gray-600 mt-1">Evalúe el estado de activos críticos (puentes, vías, redes) de forma remota, segura y con un nivel de detalle sin precedentes.</p>
                        </div>
                    </div>
                    <div class="p-4 rounded-lg feature-item flex items-start">
                        <i class="fas fa-drafting-compass text-sky-600 text-3xl w-12 text-center mt-1"></i>
                        <div class="ml-4">
                            <h3 class="text-xl font-bold text-gray-800">Seguimiento de Obra</h3>
                            <p class="text-gray-600 mt-1">Documente y compare el avance de sus proyectos de construcción con registros visuales inmersivos y georreferenciados.</p>
                        </div>
                    </div>
                    <div class="p-4 rounded-lg feature-item flex items-start">
                        <i class="fas fa-city text-sky-600 text-3xl w-12 text-center mt-1"></i>
                        <div class="ml-4">
                            <h3 class="text-xl font-bold text-gray-800">Catastro y Planificación Urbana</h3>
                            <p class="text-gray-600 mt-1">Obtenga una vista a nivel de calle de alta resolución para la actualización catastral, inventario de activos y análisis territorial.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="proceso" class="py-20 bg-slate-50 [scroll-margin-top:50px]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16 text-sky-900 section-title" data-aos="fade-up">
                Nuestro Proceso: De la Captura a la Visualización
            </h2>
            <div class="relative max-w-4xl mx-auto">
                <div class="absolute left-1/2 w-0.5 h-full bg-sky-200 transform -translate-x-1/2"></div>
                <div class="mb-12 flex justify-between items-center w-full" data-aos="fade-right">
                    <div class="w-2/5"></div>
                    <div class="z-10 bg-sky-600 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl shadow-lg">1</div>
                    <div class="w-2/5 bg-white p-6 rounded-lg shadow-md timeline-card">
                        <h3 class="text-xl font-semibold mb-2 text-sky-800">Levantamiento 360°</h3>
                        <p class="text-gray-600 text-sm">Utilizamos cámaras de alta resolución y equipos GPS de precisión para capturar imágenes inmersivas en campo.</p>
                    </div>
                </div>
                <div class="mb-12 flex justify-between flex-row-reverse items-center w-full" data-aos="fade-left">
                    <div class="w-2/5"></div>
                    <div class="z-10 bg-sky-600 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl shadow-lg">2</div>
                    <div class="w-2/5 bg-white p-6 rounded-lg shadow-md timeline-card">
                        <h3 class="text-xl font-semibold mb-2 text-sky-800">Procesamiento y Ensamble</h3>
                        <p class="text-gray-600 text-sm">Procesamos y unimos las imágenes para crear panoramas 360° fluidos y georreferenciados con exactitud.</p>
                    </div>
                </div>
                <div class="flex justify-between items-center w-full" data-aos="fade-right">
                    <div class="w-2/5"></div>
                    <div class="z-10 bg-sky-600 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl shadow-lg">3</div>
                    <div class="w-2/5 bg-white p-6 rounded-lg shadow-md timeline-card">
                        <h3 class="text-xl font-semibold mb-2 text-sky-800">Publicación en Plataforma</h3>
                        <p class="text-gray-600 text-sm">Alojamos los recorridos virtuales en nuestra plataforma segura y de alto rendimiento, accesible desde cualquier dispositivo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="plataforma" class="py-20 bg-white [scroll-margin-top:80px]">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-sky-900 section-title">Plataforma Interactiva: Una Experiencia Real</h2>
                <p class="text-lg text-gray-600 mt-6 max-w-3xl mx-auto">Navegue, explore y analice el entorno como si estuviera allí. Utilice el ratón para moverse en 360 grados.</p>
            </div>
            <div class="w-full max-w-7xl mx-auto p-4 bg-slate-100 rounded-xl shadow-2xl border border-slate-200" data-aos="zoom-in-up">
                 <div class="aspect-w-16 aspect-h-9 bg-black rounded-lg overflow-hidden">
                    <iframe 
                        class="w-full h-[650px]" 
                        src="https://360.geokas.com.co/visualizador_fotos.html?photo=https://360.geokas.com.co//proyecto_streetview/fotos-360/zipaquira/photo26637.jpeg&direction=12.3216&x=4889722.020006847&y=2113141.8962433976&yaw=-12.3216&long=-73.99518444444445&lat=5.02321711111111" 
                        title="Visor 360 Inmersivo de Kasay Ingeniería"
                        frameborder="0"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gradient-to-r from-sky-800 to-blue-900 text-white">
        <div class="container mx-auto px-6 text-center" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Potencie sus Proyectos con Visión 360°</h2>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto font-lora">
                Permita que nuestro equipo de expertos le muestre cómo la inteligencia visual inmersiva puede optimizar sus operaciones.
            </p>
            <a href="/kasayweb/src/views/contacto.php" class="bg-white text-sky-700 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg shadow-xl">
                Contactar a un Especialista
            </a>
        </div>
    </section>

    <script>
        AOS.init({
            duration: 800, // Duración de la animación
            once: true,    // La animación ocurre solo una vez
        });
    </script>
    
    <?php include_once '../../inc/footer.php'; ?>

</body>
</html>