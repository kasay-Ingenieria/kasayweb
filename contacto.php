<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

</head>


<body class="bg-gray-100 text-gray-800">

<!-- Barra de navegación -->
 <?php

        include_once 'src/inc/navbar.php';

?>

  
     <section id="contacto" class="pt-40 pb-10 bg-blue-50">
        <div id="contacto" class="pt-16 pb-10 bg-white">
        <div class="container ml-64 flex items-center justify-right px-6">
    
                  <div class="max-w-4xl mx-auto px-4 text-gray-800">

                    <h2 class="text-4xl font-bold text-center  mb-20 text-gray-800">
                      Contáctanos 
                    </h2>

                    <h4 class="text-2xl font-bold text-left  mb-4 flex text-gray-800">
                      <i class="fa-solid fa-location-dot mr-2"></i> &nbsp; Carrera 59 #44a-30, Bogotá, Colombia. 
                    </h4>

                    <h4 class="text-2xl font-bold text-left  mb-4 text-gray-800">
                      <i class="fa-regular fa-envelope mr-2"></i> &nbsp; contacto@kasay.com.co 
                    </h4>

                    <h4 class="text-2xl font-bold text-left  mb-20 text-gray-800">
                      <i class="fa-solid fa-phone mr-2"></i> &nbsp; 3013365167 
                    </h4>

                    <h4 class="text-2xl font-bold text-center  mb-4 text-gray-800">
                      ¡Síguenos en nuestras redes sociales!
                    </h4>
                      
                      <div class="flex justify-center space-x-6 text-3xl">

                        <h4 class="text-2xl font-bold text-left  mb-4 text-gray-800">
                          <i class="fa-brands fa-square-facebook mr-2"></i>
                        </h4>

                        <h4 class="text-2xl font-bold text-left  mb-4 text-gray-800">
                          <i class="fa-brands fa-square-instagram mr-2"></i>
                        </h4>

                        <h4 class="text-2xl font-bold text-left  mb-4 text-gray-800">
                          <i class="fa-brands fa-square-x-twitter mr-2"></i>
                        </h4>
                        
                      </div>

                    </div>
        
          <div class="w-full md:w-1/8" >
            <form class="bg-blue-50 mr-60 ml-0 px-8 pt-6 pb-8 mb-4 ">
              
            <div class="mb-4">
                <div class="grid grid-flow-row sm:grid-flow-col gap-3">
                    
                    <div class="sm:col-span-4 justify-center">
                      <label class="block text-gray-700 text-sm font-bold mb-2" for="nya">Nombre *</label>
                      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nya" name="nya" type="text" required placeholder="Ingresa tu nombre ">
                    </div>
                    
                    <div class="sm:col-span-4 justify-center">
                      <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email *</label>
                      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="text" required placeholder="Ingresa tu email">
                    </div>
                </div>
              </div>

              <div class="mb-4">
                <div class="grid grid-flow-row sm:grid-flow-col gap-3">

                    <div class="sm:col-span-4 justify-center">
                      <label class="block text-gray-700 text-sm font-bold mb-2" for="telefono">Telefono *</label>
                      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="telefono" name="telefono" type="text" required placeholder="Ingresa tu telefono ">
                    </div>
                    
                    <div class="sm:col-span-4 justify-center">
                      <label class="block text-gray-700 text-sm font-bold mb-2" for="direccion">Dirección </label>
                      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="direccion" name="direccion" type="text" required placeholder="Ingresa tu dirección">
                    </div>
                </div>

              <div class="mb-4">
                <div class="grid grid-flow-row sm:grid-flow-col gap-3">

                    <div class="sm:col-span-4 justify-center">
                      <label class="block text-gray-700 text-sm font-bold mb-2" for="asunto">Asunto *</label>
                      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="asunto" name="asunto" type="text" required placeholder="Ingresa el asunto ">
                    </div>
              
                </div>
              </div>

              <div class="mb-4">
                <div class="grid grid-flow-row sm:grid-flow-col gap-3">

                    <div class="sm:col-span-4 justify-center">
                      <label class="block text-gray-700 text-sm font-bold mb-2" for="mensaje">Mensaje *</label>
                      <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="mensaje" name="mensaje" required placeholder="Ingresa tu mesaje "> </textarea>
                    </div>
              
                </div>
              </div>
            
              <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" >
                  Enviar
                </button>
              

            </form> 
          </div>
        </div>
        </div>
    </section>

<hr/>

  <section id="nosotros" class="pt-0 bg-white">
    <div class="w-full h-[350px]">
       
        <iframe class="w-full h-30 border-0" 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.6913261566597!2d-74.09614079005497!3d4.649035495306297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bb8db53308d%3A0xea102704edc4714b!2sKasay%20Ingenier%C3%ADa!5e0!3m2!1sen!2sco!4v1748981413696!5m2!1sen!2sco" width="1900" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      
    </div>
  </section>        
<hr/>

 <!-- Pie de pagina  -->
 <?php

        include_once 'src/inc/footer.php';
 ?>

</body>
</html>