<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-800">

    <header class="bg-white shadow-md fixed w-full z-50">
        <nav class="container mx-auto px-4 py-2 flex items-center justify-between">
            <a href="src/views/inicio.php">
                <img src="/kasayweb/assets/images/logo.jpg" alt="logo" class="w-32 h-[50px]">
            </a>

            <!-- Botón hamburguesa para móviles -->
            <button id="menu-btn" class="md:hidden text-gray-600 focus:outline-none text-2xl">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Enlaces -->
            <div id="menu" class="hidden md:flex flex-col md:flex-row md:items-center md:space-x-4 absolute md:static top-16 left-0 w-full md:w-auto bg-white md:bg-transparent shadow-md md:shadow-none px-6 md:px-0 py-4 md:py-0 z-50">
                <a href="/kasayweb/src/views/inicio.php" class="block text-gray-600 hover:text-blue-500 transition duration-300 py-2 md:py-0">Inicio</a>
                <a href="/kasayweb/src/views/inicio.php#servicios_inicio" class="block text-gray-600 hover:text-blue-500 transition duration-300 py-2 md:py-0">Servicios</a>
                <a href="/kasayweb/src/views/nosotros.php" class="block text-gray-600 hover:text-blue-500 transition duration-300 py-2 md:py-0">Nosotros</a>
                <a href="/kasayweb/src/views/contacto.php" class="block text-gray-600 hover:text-blue-500 transition duration-300 py-2 md:py-0">Contacto</a>
                <a href="/kasayweb/src/views/login.php" class="block text-center bg-[linear-gradient(120deg,_rgba(0,124,240,0.9),_rgba(0,154,186,0.8))] text-white px-4 py-2 rounded-full hover:bg-blue-500 transition duration-300 mt-2 md:mt-0">Iniciar sesión</a>
            </div>
        </nav>
    </header>

    <script>
        const menuBtn = document.getElementById('menu-btn');
        const menu = document.getElementById('menu');

        menuBtn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>

</body>
</html>
