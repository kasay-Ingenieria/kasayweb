<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

</head>


<body class="bg-blue-50 text-gray-800">

<!-- Barra de navegación -->
 <?php

        include_once 'src/inc/navbar.php';

?>

  
    <section id="inicio" class="text-white pt-3 pb-16 md:pt-20 md:pb-2">

        <div class="relative w-full h-[500px] overflow-hidden">
 
            <video autoplay muted="muted" loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
            <source src="assets/videos/kasaycontacto.mp4" type="video/mp4">
                Tu navegador no soporta video HTML5.
            </video>

        <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 z-10"></div>

        <div class="relative z-20 flex items-center justify-center h-full text-white text-3xl">

            <div class="container mx-auto px-6 text-left">
            
                <h1 class="text-4xl md:text-8xl font-bold mt-10 mb-6 leading-tight">Kasay Ingeniería S.A.S </h1>
                <p class=" md:text-5xl mb-8 mt-10 max-w-5xl">Especialistas en Inteligencia Territorial y Tecnología Catastral Avanzada</p>
        
            </div>
        </div>

</section>

<br>
<hr/>

   <section class="text-sky-700 px-6 py-24 bg-white">
        <div class="container mx-auto text-left pl-20">
            <h2 class="text-3xl md:text-5xl  font-bold mb-6">Quiénes somos</h2>
            <p class="text-lg md:text-xl mb-8 max-w-6xl ">Somos una empresa especializada en sistemas de información geográfica (SIG) y servicios de georreferenciación, conformada por un equipo multidisciplinario de expertos en tecnología geodésica, cartografía y sistemas de información.
Nos enfocamos en brindar soluciones geoespaciales que permitan a las organizaciones tomar decisiones estratégicas basadas en datos precisos, actualizados en tiempo real. Nuestra misión es transformar la información geográfica en conocimiento útil, aplicando tecnología de vanguardia para maximizar el valor de los datos espaciales.</p>
        </div>

   </section>

<hr/>
<br>
<section class="text-sky-700 px-6 py-24 bg-white">
        <div class="container mx-auto text-left pl-20">
            <h2 class="text-3xl md:text-5xl  font-bold mb-6">R?</h2>
        </div>

   </section>

<br>
<hr/>
   
    <script>
    </script>    


 <!-- Pie de pagina  -->
 <?php

        include_once 'src/inc/footer.php';
 ?>

</body>
</html>