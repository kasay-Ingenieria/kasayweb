<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visores 360° Inmersivos - Kasay Ingeniería</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <style>
        html {
            scroll-behavior: smooth;
        }
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
        .section-title::after {
            content: '';
            display: block;
            width: 100px; /* Ancho ajustado para subtítulos */
            height: 4px;
            margin: 16px auto 0;
            background: linear-gradient(90deg, rgb(8, 45, 63), rgb(0, 153, 177));
            border-radius: 2px;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800">

    <?php include_once '../../inc/navbar.php'; ?>

    <section class="gradient-bg-hero text-white pt-24 pb-16 md:pt-32 md:pb-24">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-12">
            <div class="md:w-1/2 text-center md:text-left">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Visores 360° Inmersivos: <br class="hidden md:inline"> Explore Entornos Como si Estuviera Allí
                </h1>
                <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto md:mx-0 font-lora">
                    Ofrecemos experiencias visuales inmersivas para la inspección remota, planificación de proyectos y promoción de propiedades.
                </p>
                <a href="#visor" class="bg-white text-sky-700 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg shadow-lg">
                    Ver Demostración
                </a>
            </div>
            <div class="md:w-1/2 flex justify-center md:justify-end" data-aos="fade-left">
                <img src="/kasayweb/assets/images/servicios/servicio_360.png" alt="Ilustración de un visor 360 grados" class="w-full max-w-md rounded-lg shadow-2xl">
            </div>
        </div>
    </section>

    <section id="solucion" class="py-16 bg-white [scroll-margin-top:80px]">
        <div class="container mx-auto px-6" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-sky-800 section-title">
                Una Ventana Digital a sus Proyectos
            </h2>
            <div class="max-w-4xl mx-auto text-center text-lg leading-relaxed text-gray-700">
                <p class="mb-6">
                    En Kasay Ingeniería, transformamos la manera en que interactúa con sus activos y locaciones. Nuestros <strong>visores 360° inmersivos</strong> le permiten realizar recorridos virtuales detallados desde la comodidad de su oficina, proporcionando una comprensión completa del entorno sin necesidad de desplazamientos físicos.
                </p>
                <p>
                    Esta tecnología es ideal para la inspección de infraestructuras, el seguimiento de obras, la promoción inmobiliaria o la documentación de sitios de interés, ofreciendo una perspectiva realista y precisa que las fotografías tradicionales no pueden igualar.
                </p>
            </div>
        </div>
    </section>

    <section class="py-16 bg-blue-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-sky-800 section-title" data-aos="fade-up">
                Beneficios Clave de Nuestros Visores 360°
            </h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-street-view"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Inmersión Total</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Navegue por los espacios con una libertad de movimiento completa, obteniendo una percepción real de las dimensiones y detalles.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-search-location"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Inspección Remota Eficiente</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Realice análisis y mediciones preliminares a distancia, identificando posibles problemas sin estar físicamente en el lugar.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Ahorro de Tiempo y Costos</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Reduzca drásticamente los gastos y el tiempo asociados a viajes y visitas a campo, optimizando la productividad de su equipo.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="visor" class="py-16 bg-white [scroll-margin-top:80px]">
        <div class="container mx-auto px-6" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-sky-800 section-title">
                Demostración Interactiva
            </h2>
            <div class="w-full max-w-6xl mx-auto h-[600px] text-gray-800 shadow-xl rounded-lg overflow-hidden border-4 border-gray-200">
                <iframe 
                    class="w-full h-full" 
                    src="https://360.geokas.com.co/visualizador_fotos.html?photo=https://360.geokas.com.co//proyecto_streetview/fotos-360/zipaquira/photo26637.jpeg&direction=12.3216&x=4889722.020006847&y=2113141.8962433976&yaw=-12.3216&long=-73.99518444444445&lat=5.02321711111111" 
                    title="Visor 360 Inmersivo de Kasay Ingeniería"
                    frameborder="0"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gradient-to-r from-blue-600 to-cyan-500 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                ¿Listo para Llevar sus Proyectos a la Siguiente Dimensión?
            </h2>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto">
                Contáctenos para descubrir cómo nuestros visores 360° pueden transformar su forma de trabajar.
            </p>
            <a href="/kasayweb/src/views/contacto.php" class="bg-white text-blue-700 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg shadow-xl">
                Solicitar Cotización
            </a>
        </div>
    </section>

    <script>
        AOS.init({
            duration: 800,
            once: true, // La animación ocurre solo una vez al scrollear
        });
    </script>
    
    <?php include_once '../../inc/footer.php'; ?>

</body>
</html>