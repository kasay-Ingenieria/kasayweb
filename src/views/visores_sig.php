<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visores SIG Web - Kasay Ingeniería</title>
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
        .image-reveal-on-scroll {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        .image-reveal-on-scroll.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">

    <?php include_once '../inc/navbar.php'; ?>

    <section class="gradient-bg-hero text-white pt-24 pb-16 md:pt-32 md:pb-24">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-12">
            <div class="md:w-1/2 text-center md:text-left">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Visores SIG Web: <br class="hidden md:inline"> Explore su Territorio
                </h1>
                <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto md:mx-0 font-lora">
                    Transformamos datos geoespaciales complejos en experiencias visuales interactivas y accesibles desde su navegador.
                </p>
                <a href="#tipos_visores" class="bg-white text-sky-700 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg shadow-lg">
                    Descubra Nuestros Visores
                </a>
            </div>
            <div class="md:w-1/2 flex justify-center md:justify-end">
                <img src="/kasayweb/assets/images/sig_web_hero_illustration.png" alt="Ilustración de mapa interactivo y datos geoespaciales" class="w-full max-w-lg rounded-lg shadow-2xl animate-fade-in">
            </div>
        </div>
    </section>

    <hr/>

    <section id="tipos_visores" class="py-16 bg-white [scroll-margin-top:80px]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800">
                Visualice Datos Geoespaciales en Su Navegador
            </h2>
            <div class="max-w-5xl mx-auto text-center text-lg leading-relaxed text-gray-700">
                <p class="mb-8">
                    En Kasay Ingeniería, creamos **visores SIG Web** que le permiten descubrir y analizar información geoespacial de manera intuitiva y potente, directamente desde cualquier navegador web. Nuestras soluciones están diseñadas para democratizar el acceso a datos complejos, haciéndolos comprensibles y accionables para todos.
                </p>
                <p>
                    Ya sea para la visualización de terrenos, ciudades completas, o departamentos, nuestros visores ofrecen un nivel de detalle y una interactividad sin precedentes, adaptándose a sus necesidades específicas.
                </p>
            </div>
        </div>
    </section>

    <hr/>

    <section class="py-16 bg-blue-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800">
                Nuestros Visores SIG Web Adaptados a Sus Necesidades
            </h2>
            <div class="grid md:grid-cols-1 lg:grid-cols-3 gap-10">

                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col">
                    <div class="text-sky-500 mb-4 text-5xl text-center">
                        <i class="fas fa-vr-cardboard"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700 text-center">Visores 360° Inmersivos</h3>
                    <p class="text-gray-600 leading-relaxed text-center mb-6">
                        Explore entornos como si estuviera allí. Nuestros visores 360° ofrecen una experiencia inmersiva para inspección de sitios o planificación de proyectos.
                    </p>
                    <div class="w-full h-64 bg-gray-200 rounded-md overflow-hidden mb-4">
                        <img id="viewer-360-img" src="/kasayweb/assets/images/visor_360_placeholder.jpg" alt="Visor 360" class="w-full h-full object-cover image-reveal-on-scroll">
                    </div>
                    <div class="text-center mt-auto">
                        <a href="src/views/visor_360_example.php" class="inline-block bg-sky-500 text-white font-bold py-2 px-6 rounded-full hover:bg-sky-600 transition duration-300 text-md">Ver Demo</a>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col">
                    <div class="text-sky-500 mb-4 text-5xl text-center">
                        <i class="fas fa-cube"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700 text-center">Visores de Modelos 3D Avanzados</h3>
                    <p class="text-gray-600 leading-relaxed text-center mb-6">
                        Visualice con detalle modelos 3D de edificaciones, infraestructuras y terrenos. Perfectos para urbanismo, arquitectura e ingeniería.
                    </p>
                    <div class="w-full h-64 bg-gray-200 rounded-md overflow-hidden mb-4">
                         <iframe 
                            class="w-full h-full object-cover image-reveal-on-scroll" 
                            src="src/views/visor_digital_twin.php" 
                            title="Visor 3D Digital Twin"
                            frameborder="0">
                        </iframe>
                    </div>
                     <div class="text-center mt-auto">
                        <a href="src/views/visor_dsm.php" class="inline-block bg-sky-500 text-white font-bold py-2 px-6 rounded-full hover:bg-sky-600 transition duration-300 text-md">Ver Demo</a>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col">
                    <div class="text-sky-500 mb-4 text-5xl text-center">
                        <i class="fas fa-map"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700 text-center">Visores de Ortofotos 2D y Mapas</h3>
                    <p class="text-gray-600 leading-relaxed text-center mb-6">
                        Navegue por mapas de alta resolución y ortofotos actualizadas para un análisis preciso de su territorio en 2D.
                    </p>
                    <div class="w-full h-64 bg-gray-200 rounded-md overflow-hidden mb-4">
                        <iframe
                            class="w-full h-full object-cover image-reveal-on-scroll"
                            src="/kasayweb/assets/tiles/visu_ortofoto.php"
                            title="Mapa interactivo de Ortofotos"
                            frameborder="0">
                        </iframe>
                    </div>
                    <div class="text-center mt-auto">
                        <a href="/kasayweb/assets/tiles/visu_ortofoto.php" class="inline-block bg-sky-500 text-white font-bold py-2 px-6 rounded-full hover:bg-sky-600 transition duration-300 text-md">Ver Demo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr/>

    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800">
                Beneficios y Aplicaciones de Nuestros Visores
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-city"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Planificación Urbana y Territorial</h3>
                        <p class="text-gray-600">
                            Facilite el diseño y la gestión de proyectos de desarrollo urbano y regional con datos precisos.
                        </p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-chart-area"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Análisis Geoespacial Detallado</h3>
                        <p class="text-gray-600">
                            Realice análisis complejos, identifique patrones y tome decisiones informadas basadas en la geografía.
                        </p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Colaboración y Comunicación</h3>
                        <p class="text-gray-600">
                            Comparta proyectos e información con equipos internos y externos de forma clara y eficiente.
                        </p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Integración de Diversas Fuentes</h3>
                        <p class="text-gray-600">
                            Combine datos de catastro, infraestructura, demografía y más en una sola plataforma.
                        </p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-building"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Gestión de Proyectos Inmobiliarios</h3>
                        <p class="text-gray-600">
                            Ideal para desarrolladores y constructoras que necesitan visualizar terrenos y proyectos futuros.
                        </p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Tecnología de Última Generación</h3>
                        <p class="text-gray-600">
                            Desarrollados con las herramientas más avanzadas para garantizar rendimiento y escalabilidad.
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
                Lleve la Visualización de Datos al Siguiente Nivel
            </h2>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto">
                Explore las posibilidades que ofrecen nuestros Visores SIG Web personalizados para su organización.
            </p>
            <a href="src/views/contacto.php" class="bg-white text-blue-700 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg shadow-xl">
                Hablemos de su Proyecto
            </a>
        </div>
    </section>

    <hr/>

    <?php include_once '../inc/footer.php'; ?>

    <script>
        // Simple Intersection Observer to reveal images on scroll
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1 // When 10% of the item is visible
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target); // Stop observing once visible
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.image-reveal-on-scroll').forEach(img => {
                observer.observe(img);
            });
        });
    </script>

</body>
</html>