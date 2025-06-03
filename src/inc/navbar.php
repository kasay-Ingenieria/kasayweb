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
        <nav class="container mx-auto px-6 py-3 flex justify-between items-center">
            <img src="./assets/images/logo.jpg" alt="logo" class="w-32 h-auto">
            <div class="space-x-4">
                <a href="./servicios.php" class="text-gray-600 hover:text-blue-500 transition duration-300">Inicio</a>
                <a href="#servicios" class="text-gray-600 hover:text-blue-500 transition duration-300">Servicios</a>
                <a href="./nosotros.php" class="text-gray-600 hover:text-blue-500 transition duration-300">Nosotros</a>
                <a href="./contacto.php" class="text-gray-600 hover:text-blue-500 transition duration-300">Contacto</a>
                <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-500 transition duration-300">Empezar</a>
            </div>
        </nav>
    </header>
</body>
</html>