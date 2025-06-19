<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>

    <base href="/kasayweb/">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <link href="https://cesium.com/downloads/cesiumjs/releases/1.126/Build/Cesium/Widgets/widgets.css" rel="stylesheet">
        <style>
  
    model-viewer {
        width: 800px;
        height: 450px;
        background-color: #2c2c2c;
    }
    </style>
</head>


<body class="bg-gray-100 text-gray-800">

<!-- Barra de navegación -->
 <?php

        include_once '../inc/navbar.php';

?>
       

  
<section id="contacto" class="pt-28 bg-blue-50">
  <div class="w-full px-20">
     <div class="bg-white p-8 rounded-lg">
      
      <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Modelo 3D Xd</h2>

     
      <div class="flex flex-col md:flex-row items-center gap-8">
        
      
   <iframe 
          class="rounded-lg shadow-lg w-full h-[600px]" 
          src="assets/tiles/visu_ortofoto.php"
          title="Mapa interactivo de OpenLayers"
          frameborder="0">
        </iframe>


    
        <div class="w-full md:w-1/2 text-gray-800">
  <h2 class="text-2xl font-bold mb-4">La mejor moto</h2>
  <p class="text-gray-700">
    Descubre la <strong>Yamaha MT-15</strong>, una fusión perfecta entre <em>diseño agresivo</em>, <em>tecnología de punta</em> y <em>rendimiento urbano</em>. 
    Esta máquina ligera pero poderosa está hecha para quienes viven con pasión cada curva y disfrutan la ciudad con actitud. <br><br>
    Explora cada detalle en 3D y siente de cerca su <strong>estilo naked</strong>, su motor de alto desempeño y su esencia rebelde. 
    ¿Estás listo para dominar las calles?
  </p>
</div>


      </div>
    </div>
  </div>
</section>


<section id="contacto" class="pt-8 bg-blue-50">
  <div class="w-full px-20">
    <div class="bg-white p-8 rounded-lg">
      
      <h2 class="text-3xl font-bold text-center mb-12 text-white">Modelo 3D Xd</h2>

     
      <div class="flex flex-col md:flex-row items-center gap-8">
        
              <div class="w-full md:w-1/2 text-gray-800">
          <h2 class="text-2xl font-bold mb-4">figura</h2>
          <p class="text-gray-700">
           Como es?
          </p>
        </div>

        <iframe 
          class="rounded-lg shadow-lg w-full h-[600px]" 
          src="visu_modelo3d.php"
          title="Mapa interactivo de OpenLayers"
          frameborder="0">
        </iframe>

    


      </div>
    </div>
  </div>
</section>


<section id="contacto" class="pt-8 pb-10 bg-blue-50">
  <div class="w-full px-20">
    <div class="bg-white p-8 rounded-lg">
      
      <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Modelo 3D Xd</h2>

     
      <div class="flex flex-col md:flex-row items-center gap-8">
        
      
         <iframe 
          class="rounded-lg shadow-lg w-full h-[600px]" 
          src="visu_modpuntos.php"
          title="Mapa interactivo de OpenLayers"
          frameborder="0">
        </iframe>

    
        <div class="w-full md:w-1/2 text-gray-800">
          <h2 class="text-2xl font-bold mb-4">arma</h2>
          <p class="text-gray-700">
           Como es?
          </p>
        </div>

      </div>
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