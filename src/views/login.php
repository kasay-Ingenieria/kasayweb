<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso al Sistema - Kasay Ingeniería</title>
    <base href="/kasayweb/">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <style>
        .font-lora {
            font-family: 'Lora', serif;
        }
        .gradient-bg-hero {
            /* Using a slightly darker gradient for a more "pro" look, while keeping brand colors */
            background: linear-gradient(120deg, rgba(0,90,180,0.95), rgba(0,120,150,0.85));
            /* Optional: Add a subtle futuristic pattern here */
            /* background-image: url('/kasayweb/assets/images/subtle-grid-pattern.png'), linear-gradient(120deg, rgba(0,90,180,0.95), rgba(0,120,150,0.85)); */
            background-size: cover;
            background-position: center;
        }

        /* Custom animation for card entry */
        @keyframes fadeInSlideUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fadeInSlideUp {
            animation: fadeInSlideUp 0.8s ease-out forwards;
        }

        /* Modern input focus effect */
        .input-elegant-focus:focus {
            border-color: #007cf0; /* A vibrant blue for focus */
            box-shadow: 0 0 0 4px rgba(0, 124, 240, 0.25); /* Stronger, diffused glow */
        }

        /* Subtle underline animation for heading */
        .animated-underline {
            position: relative;
            display: inline-block;
        }
        .animated-underline::after {
            content: '';
            position: absolute;
            width: 0%;
            height: 3px;
            bottom: -5px; /* Adjust distance from text */
            left: 0;
            background-color: #007cf0; /* Blue underline */
            transition: width 0.4s ease-out;
        }
        .animated-underline.is-visible::after {
            width: 100%;
        }

        /* Button hover effect */
        .btn-hover-effect:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(0, 124, 240, 0.3); /* Enhanced shadow */
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">

    <?php include_once '../inc/navbar.php'; /* */ ?>

    <section class="gradient-bg-hero text-white min-h-screen flex items-center justify-center py-16 px-4">
        <div class="container mx-auto max-w-md">
            <div id="login-card" class="bg-white p-8 md:p-10 rounded-xl shadow-2xl w-full text-gray-800 border-b-4 border-sky-600 animate-fadeInSlideUp">
                <div class="text-center mb-8">
                    <img src="/kasayweb/assets/images/logo.png" alt="Kasay Ingeniería Logo" class="mx-auto h-16 w-auto mb-4 opacity-70">
                </div>

                <form action="src/inc/process_login.php" method="POST" class="space-y-6">
                    <div>
                        <label for="username" class="block text-gray-700 text-sm font-medium mb-2">Usuario:</label>
                        <input type="text" id="username" name="username" required autocomplete="username"
                               class="input-elegant-focus shadow-sm appearance-none border border-gray-300 rounded-md w-full py-3 px-4 text-gray-800 leading-tight placeholder-gray-500 focus:outline-none transition duration-200 ease-in-out"
                               placeholder="Su nombre de usuario">
                    </div>
                    <div>
                        <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Contraseña:</label>
                        <input type="password" id="password" name="password" required autocomplete="current-password"
                               class="input-elegant-focus shadow-sm appearance-none border border-gray-300 rounded-md w-full py-3 px-4 text-gray-800 leading-tight placeholder-gray-500 focus:outline-none transition duration-200 ease-in-out"
                               placeholder="Su contraseña segura">
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <button type="submit"
                                class="btn-hover-effect w-full bg-sky-700 hover:bg-sky-800 text-white font-bold py-3 px-6 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-opacity-75 transition duration-300 text-lg shadow-md">
                            Acceder <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                    </div>
                    <div class="text-center mt-4">
                        <a href="#" class="inline-block align-baseline font-semibold text-sm text-sky-600 hover:text-sky-800 hover:underline transition duration-200">
                            ¿Olvidó su contraseña?
                        </a>
                    </div>
                </form>

                <p class="text-center text-gray-500 text-xs mt-8">
                    © <?php echo date("Y"); ?> Kasay Ingeniería. Todos los derechos reservados.
                </p>
            </div>
        </div>
    </section>

    <?php include_once '../inc/footer.php'; /* */ ?>

    <script>
        // JavaScript for animated underline on heading
        document.addEventListener('DOMContentLoaded', () => {
            const heading = document.querySelector('.animated-underline');
            if (heading) {
                heading.classList.add('is-visible'); // Trigger animation on load
            }
        });
    </script>

</body>
</html>