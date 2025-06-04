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

       
<hr/>

 <!-- Pie de pagina  -->
 <?php

        include_once 'src/inc/footer.php';
 ?>

</body>
</html>