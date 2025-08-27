<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gemelos Digitales y Modelado 3D de Precisión - Kasay Ingeniería</title>
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
        .feature-card-3d {
            background-color: white;
            border: 1px solid #e5e7eb; /* border-gray-200 */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .feature-card-3d:hover {
            transform: scale(1.03);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
    </style>
</head>

<body class="bg-white text-gray-800">

    <?php include_once '../../inc/navbar.php'; ?>

    <section id="inicio" class="relative w-full h-screen text-white">
        <div class="absolute top-0 left-0 w-full h-full bg-cover bg-center" 
             style="background-image: url('/kasayweb/assets/images/ortofoto.png');">
        </div>
        
        <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-40 z-10"></div>
        <div class="relative z-20 flex flex-col items-center justify-center h-full text-center px-6">
            <div data-aos="fade-down">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Gemelos Digitales y Modelado 3D
                </h1>
                <p class="text-lg md:text-2xl mb-10 max-w-4xl mx-auto font-lora">
                    Creamos representaciones 3D interactivas y milimétricamente precisas de sus activos para una simulación, análisis y gestión sin precedentes.
                </p>
                <a href="#modelogeokas" class="bg-sky-600 text-white font-bold py-3 px-8 rounded-full hover:bg-sky-700 transition duration-300 text-lg shadow-lg">
                    Explorar un Modelo
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right">
                    <h2 class="text-3xl md:text-4xl font-bold text-sky-900 mb-6">Más Allá de la Visualización: El Poder del Gemelo Digital</h2>
                    <p class="text-lg text-gray-600 mb-4">
                        Un Gemelo Digital es una réplica virtual y dinámica de un objeto o sistema físico. A diferencia de un modelo 3D estático, un Gemelo Digital se mantiene "vivo" a lo largo del tiempo, pudiendo integrar datos en tiempo real (IoT), información de mantenimiento y resultados de simulaciones.
                    </p>
                    <p class="text-lg text-gray-600">
                        Esta tecnología permite analizar el rendimiento, predecir fallos, simular escenarios futuros y optimizar operaciones con un nivel de profundidad y precisión imposibles de alcanzar por otros medios.
                    </p>
                </div>
                <div data-aos="fade-left">
                    <img src="/kasayweb/assets/images/paginas_servicios/referencia_modelo3d.png" alt="Concepto de un Gemelo Digital conectando el mundo físico y virtual" class="rounded-lg shadow-2xl w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16 text-sky-900 section-title" data-aos="fade-up">
                Aplicaciones en Ingeniería y Urbanismo
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="p-8 rounded-xl text-center feature-card-3d" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-city text-sky-600 text-5xl mb-5"></i>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Planificación Urbana y SIM</h3>
                    <p class="text-gray-600">Simule el impacto de nuevas construcciones, analice flujos de tráfico y gestione la infraestructura urbana en un entorno 3D interactivo.</p>
                </div>
                <div class="p-8 rounded-xl text-center feature-card-3d" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-building text-sky-600 text-5xl mb-5"></i>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Arquitectura e Ingeniería (AEC)</h3>
                    <p class="text-gray-600">Integre nuestros modelos con sus flujos de trabajo BIM, realice detección de colisiones y monitorice el progreso de la construcción con precisión.</p>
                </div>
                <div class="p-8 rounded-xl text-center feature-card-3d" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-industry text-sky-600 text-5xl mb-5"></i>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Gestión de Activos Industriales</h3>
                    <p class="text-gray-600">Administre plantas, redes de servicios públicos e infraestructuras complejas, planificando mantenimientos y expansiones de forma virtual.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section id="visor" class="py-20 bg-white [scroll-margin-top:80px]">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-sky-900 section-title">Explore Nuestro Visor de Gemelos Digitales</h2>
                <p class="text-lg text-gray-600 mt-6 max-w-3xl mx-auto">Interactúe con un modelo 3D de alta densidad. Use los controles del ratón para rotar (clic izquierdo), mover (clic derecho) y hacer zoom (rueda).</p>
            </div>


            <section id="modelogeokas" class="py-20 bg-white [scroll-margin-top:80px]">
        <div class="container mx-auto px-6">
            <div class="w-full max-w-7xl mx-auto p-4 bg-slate-100 rounded-xl shadow-2xl border border-slate-200" data-aos="zoom-in-up">
                 <div class="aspect-w-16 aspect-h-9 bg-black rounded-lg overflow-hidden">
                    <iframe 
                        class="w-full h-[650px]" 
                        src="https://3d-villavo-col.falconprecision.co/" 
                        title="Visor 360 Inmersivo de Kasay Ingeniería"
                        frameborder="0"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </section>
            <!--
            <div class="w-full max-w-7xl mx-auto p-4 bg-slate-100 rounded-xl shadow-2xl border border-slate-200" data-aos="zoom-in-up">
                 <div class="bg-black rounded-lg overflow-hidden">
                    <iframe 
                        class="w-full h-[700px]" 
                        src="/kasayweb/src/functional/visor_digital_twin.php" 
                        title="Visor 3D Interactivo de Gemelo Digital - Kasay Ingeniería"
                        frameborder="0"
                        loading="lazy">
                    </iframe>
                </div>
            </div>
            -->
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