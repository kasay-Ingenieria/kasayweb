<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>


<body class="bg-gray-100 text-gray-800">

<!-- Barra de navegación -->
 <?php

        include_once 'src/inc/navbar.php';

?>
       

  
     <section id="contacto" class="pt-40 pb-10 bg-blue-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Ponte en Contacto 📧</h2>
            <div class="max-w-2xl mx-auto bg-gray-50 p-8 rounded-lg shadow-lg">
                <form action="#" method="POST">
                    <div class="mb-6">
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Nombre Completo</label>
                        <input type="text" name="name" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Correo Electrónico</label>
                        <input type="email" name="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block text-gray-700 font-semibold mb-2">Mensaje</label>
                        <textarea name="message" id="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-blue-600 text-white font-bold py-3 px-8 rounded-lg hover:bg-blue-500 transition duration-300">Enviar Mensaje</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <hr/>

        <section id="nosotros" class="pt-0 bg-white">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.6913261566597!2d-74.09614079005497!3d4.649035495306297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bb8db53308d%3A0xea102704edc4714b!2sKasay%20Ingenier%C3%ADa!5e0!3m2!1sen!2sco!4v1748981413696!5m2!1sen!2sco" width="1900" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
    </section>
        <hr/>

 <!-- Pie de pagina  -->
 <?php

        include_once 'src/inc/footer.php';
 ?>

</body>
</html>