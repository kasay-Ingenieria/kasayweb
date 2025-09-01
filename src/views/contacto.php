<!DOCTYPE html>
<html lang="es">
    
    <head> <!-- Inicio de la sección head del documento HTML -->
        <meta charset="UTF-8"> <!-- Define la codificación de caracteres como UTF-8 -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configura la vista para dispositivos móviles -->
        <title>Contacto Kasay Ingeniería</title> <!-- Título de la página que aparece en la pestaña del navegador -->
        <link rel="icon" href="/kasayweb/assets/images/favicon.ico" type="image/x-icon">
        <script src="https://cdn.tailwindcss.com"></script> <!-- Incluye Tailwind CSS para estilos rápidos -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Incluye Font Awesome versión beta 6.0.0 para iconos -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"> <!-- Incluye Font Awesome versión 6.5.0 para iconos -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" /> <!-- Incluye los estilos de Leaflet para mapas -->
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script> <!-- Incluye la librería Leaflet para mapas interactivos -->
    </head> <!-- Fin de la sección head -->


    <body class="bg-blue-50 text-gray-800"> <!-- Define el fondo y color de texto del body -->

        <!-- Barra de navegación -->
        <?php
            include_once '../inc/navbar.php'; // Incluye la barra de navegación desde un archivo externo
        ?>

        <section id="contacto" class="pb-7 bg-white"> <!-- Sección principal de contacto -->

            <section id="inicio" class="text-white pt-3 pb-16 md:pt-16 md:pb-1"> <!-- Sección de inicio con video de fondo -->
                <div class="relative w-full h-[390px] overflow-hidden"> <!-- Contenedor relativo para el video -->
                    <video autoplay muted="muted" loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0"> <!-- Video de fondo -->
                    <source src="/kasayweb/assets/videos/kasaycontacto.mp4" type="video/mp4"> <!-- Fuente del video -->
                    Tu navegador no soporta video HTML5. <!-- Mensaje si el navegador no soporta video -->
                    </video>
                    <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 z-10"></div> <!-- Capa oscura encima del video -->
                    <div class="relative z-20 flex items-center justify-center h-full text-white text-3xl"> <!-- Contenido centrado sobre el video -->
                        <div class="container mx-auto px-6 text-center"> <!-- Contenedor centrado -->
                            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Kasay Ingeniería S.A.S </h1> <!-- Título principal -->
                            <p class="text-lg md:text-3xl mb-8 max-w-4xl mx-auto">Asesoría en gestión catastral, análisis geoespacial y soporte</p> <!-- Subtítulo -->
                        </div>
                    </div>
                </div>
            </section>

            <br> <!-- Salto de línea -->

            <section id="contacto" class="pt-10 pb-10 bg-[linear-gradient(120deg,_rgba(0,124,240,0.6),_rgba(0,223,216,0.2))]"> <!-- Sección de contacto con fondo degradado -->
                <div class="container mx-auto px-6 flex flex-col md:flex-row gap-8"> <!-- Contenedor principal con columnas -->

                    <!-- Columna izquierda: Información de contacto -->
                    <div class="w-2/3 bg-white text-cyan-600 pt-20 p-6 rounded-lg"> <!-- Columna de información de contacto -->
                        <h2 class="text-4xl font-bold text-center mb-10 ">Contáctanos</h2> <!-- Título de la sección -->
                        <h4 class="text-2xl pt-6 text-gray-600 pl-8 font-serif mb-4">
                            <i class="fa-solid text-cyan-500 fa-location-dot mr-2"></i> Carrera 59 #44a-30, Bogotá, Colombia. <!-- Dirección -->
                        </h4>
                        <h4 class="text-2xl pl-8 text-gray-600 font-serif mb-4">
                            <i class="fa-regular text-cyan-500 fa-envelope mr-2"></i> contacto@kasay.com.co <!-- Email -->
                        </h4>
                        <h4 class="text-2xl pl-8 text-gray-600 font-serif mb-10">
                            <i class="fa-solid text-cyan-500 fa-phone mr-2"></i> 3013365167 <!-- Teléfono -->
                        </h4>
                        <h4 class="text-2xl font-bold text-cyan-600 pt-8 text-center mb-4">
                            ¡Síguenos en nuestras redes sociales! <!-- Invitación a redes sociales -->
                        </h4>
                        <div class="flex justify-center pt-2 pb-0 text-cyan-500 space-x-5 text-7xl"> <!-- Iconos de redes sociales -->
                            <a href="https://www.facebook.com" target="_blank">
                                <i class="fa-brands fa-square-facebook"></i> <!-- Facebook -->
                            </a>
                            <a href="https://www.instagram.com" target="_blank">
                                <i class="fa-brands fa-square-instagram"></i> <!-- Instagram -->
                            </a>
                            <a href="https://www.twitter.com" target="_blank">
                                <i class="fa-brands fa-square-x-twitter"></i> <!-- Twitter -->
                            </a>
                        </div>
                    </div>

                    <!-- Columna derecha: Formulario moderno -->
                    <div class="w-full bg-white px-8 md:px-14 pt-12 pb-10 rounded-xl shadow-lg hover:shadow-2xl transition-shadow duration-300"> <!-- Columna del formulario -->
                        <form> <!-- Formulario de contacto -->
                            <!-- Nombre y Email -->
                            <div class="mb-6">
                                <div class="grid grid-flow-row sm:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-cyan-700 text-sm font-medium mb-2" for="nya">Nombre *</label> <!-- Etiqueta nombre -->
                                        <input
                                        class="border border-gray-300 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-300 shadow-sm rounded-lg w-full py-2 px-3 text-gray-700 transition duration-300 ease-in-out placeholder:text-gray-400 focus:outline-none"
                                        id="nya" name="nya" type="text" required placeholder="Ingresa tu nombre"> <!-- Campo nombre -->
                                    </div>
                                    <div>
                                        <label class="block text-cyan-700 text-sm font-medium mb-2" for="email">Email *</label> <!-- Etiqueta email -->
                                        <input
                                        class="border border-gray-300 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-300 shadow-sm rounded-lg w-full py-2 px-3 text-gray-700 transition duration-300 ease-in-out placeholder:text-gray-400 focus:outline-none"
                                        id="email" name="email" type="email" required placeholder="Ingresa tu email"> <!-- Campo email -->
                                    </div>
                                </div>
                            </div>
                            <!-- Teléfono y Dirección -->
                            <div class="mb-6">
                                <div class="grid grid-flow-row sm:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-cyan-700 text-sm font-medium mb-2" for="telefono">Teléfono *</label> <!-- Etiqueta teléfono -->
                                        <input
                                        class="border border-gray-300 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-300 shadow-sm rounded-lg w-full py-2 px-3 text-gray-700 transition duration-300 ease-in-out placeholder:text-gray-400 focus:outline-none"
                                        id="telefono" name="telefono" type="text" required placeholder="Ingresa tu teléfono"> <!-- Campo teléfono -->
                                    </div>

                                    <div>
                                        <label class="block text-cyan-700 text-sm font-medium mb-2" for="direccion">Dirección</label> <!-- Etiqueta dirección -->
                                        <input
                                        class="border border-gray-300 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-300 shadow-sm rounded-lg w-full py-2 px-3 text-gray-700 transition duration-300 ease-in-out placeholder:text-gray-400 focus:outline-none"
                                        id="direccion" name="direccion" type="text" placeholder="Ingresa tu dirección"> <!-- Campo dirección -->
                                    </div>
                                </div>
                            </div>
                            <!-- Asunto -->
                            <div class="mb-6">
                                <label class="block text-cyan-700 text-sm font-medium mb-2" for="asunto">Asunto *</label> <!-- Etiqueta asunto -->
                                <input
                                class="border border-gray-300 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-300 shadow-sm rounded-lg w-full py-2 px-3 text-gray-700 transition duration-300 ease-in-out placeholder:text-gray-400 focus:outline-none"
                                id="asunto" name="asunto" type="text" required placeholder="Ingresa el asunto"> <!-- Campo asunto -->
                            </div>
                            <!-- Mensaje -->
                            <div class="mb-6">
                                <label class="block text-cyan-700 text-sm font-medium mb-2" for="mensaje">Mensaje *</label> <!-- Etiqueta mensaje -->
                                <textarea
                                class="border border-gray-300 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-300 shadow-sm rounded-lg w-full py-2 px-3 text-gray-700 transition duration-300 ease-in-out placeholder:text-gray-400 focus:outline-none"
                                id="mensaje" name="mensaje" required rows="4" placeholder="Ingresa tu mensaje"></textarea> <!-- Campo mensaje -->
                            </div>
                            <!-- Botón -->
                            <div class="flex justify-center text-2xl">
                                <button
                                    class="bg-[linear-gradient(120deg,_rgba(0,124,240,0.9),_rgba(0,154,186,0.8))] hover:from-blue-600 hover:to-cyan-600 text-white font-semibold py-2 px-24 rounded-full shadow-lg hover:shadow-xl transition-all duration-300">
                                    Enviar <!-- Botón de envío -->
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </section>

        <hr/> <!-- Línea horizontal -->

        <section id="nosotros" class="pt-0 pb-7 bg-white"> <!-- Sección del mapa -->
            <div class="relative h-[350px] w-full"> <!-- Contenedor relativo para el mapa -->
                <!-- Mapa Leaflet -->
                <div id="map" class="absolute inset-0 z-0"></div> <!-- Contenedor del mapa -->
                <!-- Capa azul encima -->
                <div class="absolute inset-0 z-10 bg-blue-500/10 pointer-events-none"></div> <!-- Capa azul transparente sobre el mapa -->

                <script src="../../assets/js/script_contacto.js"></script> <!-- Script para inicializar el mapa -->
            </div>
        </section>        

        <hr/> <!-- Línea horizontal -->

        <!-- Pie de pagina  -->
        <?php
        include_once '../inc/footer.php'; // Incluye el pie de página desde un archivo externo
        ?>

    </body>
</html>