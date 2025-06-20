<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasay Ingeneria</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
      
        .hero-bg {
            background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://wallpapers.com/images/high/blue-geometric-kiyhavrstg1buil4.webp'); /* Imagen de fondo de ejemplo */
            background-size: cover;
            background-position: center;
        }
    </style>
</head>


<body class="bg-gray-100 text-gray-800">

<!-- Barra de navegación -->
 <?php

        include_once '../inc/navbar.php';

?>

    <section id="inicio" class="text-white pb-0  md:pb-2">

        <div class="relative w-full h-screen overflow-hidden">

            <img  src="assets/images/ortofoto.png" alt="Ortofoto" class="absolute top-0 left-0 w-full h-full object-cover z-0">


            <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-40 z-10"></div>

    <div class="relative z-20 flex items-center justify-center h-full text-white text-3xl">

        <div class="container mx-auto px-6 text-center">
            
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Soluciones geolocalizadas </h1>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto">Experiencia Corporativa y Colaboraciones Estratégicas.</p>
            <a href="#ortofoto" class="bg-white text-sky-500 font-bold py-3 px-8 rounded-full hover:bg-gray-200 transition duration-300 text-lg">Descubre Más</a>
        </div>

    </div>

    </section>

    <hr/>

    <section id="nosot" class="py-20 bg-blue-50 [scroll-margin-top:60px]">
    <div class="container mx-auto px-6 flex flex-col md:flex-row items-center">
        <div class="md:w-1/2">
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Conoce a Nuestro Equipo ✨</h2>
            <p class="text-gray-700 mb-4 leading-relaxed">Somos un equipo apasionado de desarrolladores, diseñadores y estrategas dedicados a crear soluciones digitales excepcionales. Creemos en la colaboración, la innovación y, sobre todo, en el éxito de nuestros clientes.</p>
            <p class="text-gray-700 leading-relaxed">Nuestra misión es superar tus expectativas y ayudarte a alcanzar tus objetivos de negocio a través de la tecnología y el diseño.</p>
            <a href="#contacto" class="mt-6 inline-block bg-blue-500 text-white font-semibold py-3 px-6 rounded-lg hover:bg-blue-700 transition duration-300">Hablemos</a>
        </div>
        
        <div class="md:w-1/2 mb-8 md:mb-0 md:pr-12 ">
<img src="assets/images/dron2.png"
     class="opacity-0 transition duration-1000 transform translate-x-full"
     id="equipoImg">

        </div>
        
    </div>
</section>

<script>
const img = document.getElementById('equipoImg');

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      img.classList.remove('translate-x-full', 'opacity-0');
      img.classList.add('translate-x-0', 'opacity-100');
    } else {
      img.classList.remove('translate-x-0', 'opacity-100');
      img.classList.add('translate-x-full', 'opacity-0');
    }
  });
}, {
  threshold: 0.2 // Se activa cuando el 20% de la imagen es visible
});

observer.observe(img);
</script>


    <hr/>

    <section id="ortofoto" class="py-16 bg-blue-50">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center">
            <div class="w-[1480px]  text-gray-800">
                 <iframe 
          class="rounded-lg shadow-lg w-full h-[600px]" 
          src="./tiles/visu_ortofoto.php"
          title="Mapa interactivo de OpenLayers"
          frameborder="0">
        </iframe>
            </div>
        </div>
    </section>

    <hr/>

   

 <!-- Pie de pagina  -->
 <?php

        include_once '../inc/footer.php';
 ?>

</body>
</html>