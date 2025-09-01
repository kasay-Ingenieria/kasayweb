<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quienes</title>
    <link rel="icon" href="../../assets/images/favicon.ico" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="../../assets/css/style_nosotros.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">

</head>


<body class="bg-blue-50 text-gray-800">

    <!-- Barra de navegación -->
    <?php
    include_once '../inc/navbar.php';
    ?>

    <section id="inicio" class="text-white pt-3 md:pt-16 pb-0">

        <!-- Sección de video de fondo -->
        <div class="relative w-full h-[70vh] md:h-[50vh] overflow-hidden">
            <video autoplay muted="muted" loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0"
                aria-hidden="true">
                <source src="/kasayweb/assets/videos/kasay_nosotros.mp4" type="video/mp4">
                Tu navegador no soporta video HTML5.
            </video>

            <!-- Capa de superposición oscura para mejorar la legibilidad del texto -->
            <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 z-10">

            </div>


            <!-- Informacion que se superpone al video -->
            <div class="relative z-20 flex items-center justify-center h-full text-white text-3xl text-center">

                <div class="container mx-auto px-6">

                    <h1 class="text-4xl md:text-8xl font-bold mt-10 mb-6 leading-tight">
                        Kasay Ingeniería S.A.S
                    </h1>
                    <p class="md:text-5xl mb-8 mt-10 max-w-5xl"></p>
                        Especialistas en Inteligencia Territorial y Tecnología Catastral Avanzada
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de quiénes somos -->
    <section class="text-sky-700 mx-auto pt-20 sm:mb-10 bg-white">
        <div class="container mx-auto  text-justify pb-10 px-4 sm:px-8 md:px-24 lg:px-48">
            <h2 class="text-3xl md:text-5xl sm:text-left sm:pl-4 text-center font-bold mb-6">
                Quiénes somos
            </h2>

            <p class="text-ls md:text-xl mb-8 px-6 max-w-6xl text-justify hyphens-auto">
                Somos una empresa especializada en sistemas de información geográfica (SIG) y servicios de
                georreferenciación, conformada por un equipo multidisciplinario de expertos en tecnología geodésica,
                cartografía y sistemas de información.
                Nos enfocamos en brindar soluciones geoespaciales que permitan a las organizaciones tomar decisiones
                estratégicas basadas en datos precisos, actualizados en tiempo real. Nuestra misión es transformar la
                información geográfica en conocimiento útil, aplicando tecnología de vanguardia para maximizar el valor
                de los datos espaciales.
            </p>
        </div>
    </section>


    <!-- Sección frase inspiradora -->
    <section id="servicios" class="py-6 px-4 sm:px-10 md:px-20 bg-sky-50">
        <div class="px-0 md:px-6">
            <div class="grid md:grid-cols-2 gap-10 md:gap-40 items-center">
                <!-- Bloque de texto -->
                <div class="bg-sky-50 w-full max-w-4xl p-6 md:p-8 rounded-lg mx-auto md:ml-20">
                    <p class="text-sky-600 text-2xl sm:text-3xl md:text-4xl text-center font-lora leading-relaxed">
                        ❝ En Kasay Ingeniería S.A.S., nuestra misión y visión reflejan nuestro compromiso con la
                        tecnología, el territorio y el desarrollo sostenible. ❞
                    </p>
                </div>
                <!-- Imagen del logo -->
                <div class="flex justify-center  md:justify-start sm:pt-8 pt-0 md:pt-2">
                    <img src="/kasayweb/assets/images/logotrans.png" alt="Logotipo de Kasay Ingeniería"
                        class="rounded-lg sm:pt-8 pt-0 w-[200px] sm:w-[300px] md:w-[500px] h-[120px] sm:h-[120px] md:h-[230px] object-cover">
                </div>
            </div>
        </div>
    </section>
    <!-- Sección de misión y visión -->
    <section id="servicios" class="py-24 bg-white">
  <div class="container mx-auto grid grid-cols-1 md:grid-cols-7 gap-12 justify-center items-start px-4">
    <!--Contenedor de Mision-->
    <div
      class="bg-white h-full border-2 border-sky-50 max-w-7xl md:col-span-2 p-6 rounded-lg hover:shadow-xl transition-shadow duration-300">
      <div class="flex items-center justify-center mb-8">
        <h3 class="text-sky-700 text-3xl font-semibold text-center">
          <i class="fa-solid fa-meteor"></i>
          Misión
        </h3>
      </div>
      <p class="text-sky-700 leading-relaxed text-justify hyphens-auto">
        Liderar en el desarrollo de soluciones innovadoras en sistemas de información geográfica (SIG), ofreciendo servicios avanzados de georreferenciación predial y aplicaciones basadas en geolocalización. A través del uso de tecnología de última generación, brindamos asesoría especializada a entidades públicas y privadas en todo el país, optimizando sus procesos y mejorando la toma de decisiones con calidad, precisión e innovación.
      </p>
    </div>

    <!--Contenedor de Vision-->
    <div
      class="bg-white h-full border-2 border-sky-50 md:col-span-5 p-6 rounded-lg hover:shadow-xl transition-shadow duration-300">
      <div class="flex items-center justify-center mb-8">
        <h3 class="text-sky-700 text-3xl font-semibold text-center">
          <i class="fa-solid fa-star"></i>
          Visión
        </h3>
      </div>
      <p class="text-sky-700 leading-relaxed text-justify hyphens-auto">
        En Kasay Ingeniería S.A.S, nuestra misión es empoderar a entidades públicas y privadas en Colombia y más allá, mediante soluciones geoespaciales avanzadas y consultoría experta en gestión catastral. Nos especializamos en aprovechar tecnologías de última generación en sistemas de información geográfica (SIG), georreferenciación GPS y análisis de datos espaciales, para ofrecer resultados precisos, eficientes y sostenibles en la administración del territorio y la planificación urbana. A través de la innovación, la precisión y un firme compromiso con la excelencia, apoyamos a los municipios en su habilitación como Gestores Catastrales, optimizamos procesos de toma de decisiones georreferenciadas y mejoramos la eficiencia operativa mediante herramientas de seguimiento vehicular en tiempo real y planificación inteligente de rutas. Nuestras plataformas SIG web y soluciones SaaS ofrecen herramientas escalables y accesibles para una gestión territorial moderna y efectiva. Colaboramos estrechamente con nuestros clientes, entendiendo sus desafíos geográficos y administrativos particulares para entregar estrategias a la medida, que generen decisiones informadas e impactos medibles. Con integridad, excelencia técnica y una visión centrada en el desarrollo sostenible, estamos comprometidos con liderar el futuro de la inteligencia geoespacial y contribuir a la transformación digital de los territorios en América Latina y el mundo.
      </p>
    </div>
  </div>
</section>


    <!-- Footer -->
    <?php
    include_once '../inc/footer.php';
    ?>
</body>

</html>