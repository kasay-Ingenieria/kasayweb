<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultoría Especializada - Kasay Ingeniería</title>
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
            <div class="md:w-4/2 md:text-left">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Consultoría Especializada: <br class="hidden md:inline"> Guía en Gestión Catastral
                </h1>
                <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto md:mx-0 font-lora">
                    Acompañamos en cada paso hacia la habilitación como Gestor Catastral y la optimización de servicios.
                </p>
                <a href="pilares_fundamentales" class="bg-white text-sky-700 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg shadow-lg">
                    Pilares Fundamentales
                </a>
            </div>
            <div class="md:w-1/2 flex justify-center md:justify-end">
                <img src="/kasayweb/assets/images/servicios/consultoria.png" alt="Ilustración de consultoría estratégica" class="w-full max-w-lg rounded-lg shadow-2xl animate-fade-in">
            </div>
        </div>
    </section>

    <hr/>
    <section class="text-sky-700 mx-auto pt-20 pb-10 bg-white">
        <div class="container mx-auto  text-justify pb-10 px-4 sm:px-8 md:px-24 lg:px-48">
            <h2 class="text-3xl md:text-5xl  font-bold mb-6">
                Soluciones Expertas en Catastro
            </h2>
            
            <p class="text-lg md:text-xl mb-2 max-w-6xl ">
                En Kasay Ingeniería, somos su aliado estratégico para la modernización y eficiencia en la administración territorial. Ofrecemos **consultoría especializada** para la habilitación de su municipio como Gestor Catastral y la planificación de la prestación del servicio público.
                </p>
                <p class="text-lg md:text-xl mb-8 max-w-6xl">
                    Nuestro equipo multidisciplinario combina profundo conocimiento técnico, legal y operativo para diseñar soluciones a medida que garantizan el cumplimiento normativo, la optimización de procesos y el uso de tecnologías de vanguardia en su gestión catastral.
                </p>
        </div>

   </section>

    <hr/>

    <section id="pilares_fundamentales" class="py-16 bg-blue-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800">
                Pilares Fundamentales de Nuestro Servicio
            </h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Marco Legal y Normativo</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Le guiamos a través de la compleja normativa para asegurar la correcta habilitación y operación como Gestor Catastral.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Diseño de Procesos Eficientes</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Implementamos metodologías que optimizan cada etapa de la gestión catastral, desde la captura hasta la actualización.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover-effect flex flex-col items-center text-center">
                    <div class="text-sky-500 mb-4 text-5xl">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-gray-700">Integración de Tecnología</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Asesoramos en la selección e integración de las mejores herramientas GIS y plataformas para su operación.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <hr/>

    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800">
                Cómo Impulsamos su Gestión Catastral
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-search"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Diagnóstico Estratégico</h3>
                        <p class="text-gray-600">
                            Evaluación exhaustiva de su situación actual para identificar oportunidades de mejora y puntos críticos.
                        </p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Planificación Detallada</h3>
                        <p class="text-gray-600">
                            Diseño de hojas de ruta claras y planes de trabajo precisos para la habilitación y operación del servicio.
                        </p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Capacitación y Transferencia</h3>
                        <p class="text-gray-600">
                            Formación especializada a su equipo para asegurar la autonomía y el dominio de los nuevos procesos y herramientas.
                        </p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-desktop"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Soporte en Implementación Tecnológica</h3>
                        <p class="text-gray-600">
                            Asesoría en la adquisición e implementación de hardware y software geoespacial.
                        </p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Diseño de Modelos Operacionales</h3>
                        <p class="text-gray-600">
                            Creación de estructuras y flujos de trabajo eficientes para la operación diaria de su oficina catastral.
                        </p>
                    </div>
                </div>
                <div class="flex items-start bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex-shrink-0 text-sky-600 text-3xl mr-4">
                        <i class="fas fa-recycle"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Estrategias de Sostenibilidad</h3>
                        <p class="text-gray-600">
                            Desarrollo de planes a largo plazo para la actualización continua y la conservación del catastro.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr/>

    <?php include_once '../inc/footer.php'; ?>

</body>
</html>