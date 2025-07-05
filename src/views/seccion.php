<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sección con Tailwind CSS</title>
    <base href="/kasayweb/">
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* Estilos personalizados que son difíciles de replicar solo con clases de Tailwind sin configuración */
        /* La lógica de posicionamiento de los items del carrusel se mantiene para la funcionalidad JS */
        .slide .item:nth-child(1),
        .slide .item:nth-child(2) {
            top: 0;
            left: 0;
            transform: translate(0, 0);
            border-radius: 0;
            width: 100%;
            height: 100%;
        }

        .slide .item:nth-child(3) { left: 50%; }
        .slide .item:nth-child(4) { left: calc(50% + 220px); }
        .slide .item:nth-child(5) { left: calc(50% + 440px); }
        .slide .item:nth-child(n + 6) {
            left: calc(50% + 660px);
            opacity: 0;
        }

        /* La animación se mantiene para simplicidad */
        .content .name, .content .des, .content button {
            opacity: 0;
            animation: animate 1s ease-in-out forwards;
        }
        
        .slide .item:nth-child(2) .content {
            display: block;
        }

        .content .des { animation-delay: 0.3s; }
        .content button { animation-delay: 0.6s; }

        @keyframes animate {
            from {
                opacity: 0;
                transform: translateY(100px);
                filter: blur(33px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
                filter: blur(0);
            }
        }
    </style>
</head>
<body >

<section>
    <div >
        <div class="slide">
            
            <div class="item absolute top-1/2 -translate-y-1/2 w-[200px] h-[300px] rounded-2xl shadow-[0_30px_50px_#505050] bg-cover bg-center inline-block transition-all duration-500" style="background-image: url(https://i.ibb.co/qCkd9jS/img1.jpg);">
                <div class="content absolute top-1/2 left-[100px] w-[300px] text-left text-gray-100 -translate-y-1/2 hidden font-sans">
                    <div class="name text-4xl uppercase font-bold">Switzerland</div>
                    <div class="des mt-2.5 mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                    <button class="px-5 py-2.5 border-none cursor-pointer bg-white text-black rounded">See More</button>
                </div>
            </div>

            <div class="item absolute top-1/2 -translate-y-1/2 w-[200px] h-[300px] rounded-2xl shadow-[0_30px_50px_#505050] bg-cover bg-center inline-block transition-all duration-500" style="background-image: url(https://i.ibb.co/jrRb11q/img2.jpg);">
                <div class="content absolute top-1/2 left-[100px] w-[300px] text-left text-gray-100 -translate-y-1/2 hidden font-sans">
                    <div class="name text-4xl uppercase font-bold">Finland</div>
                    <div class="des mt-2.5 mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                    <button class="px-5 py-2.5 border-none cursor-pointer bg-white text-black rounded">See More</button>
                </div>
            </div>

            <div class="item absolute top-1/2 -translate-y-1/2 w-[200px] h-[300px] rounded-2xl shadow-[0_30px_50px_#505050] bg-cover bg-center inline-block transition-all duration-500" style="background-image: url(https://i.ibb.co/NSwVv8D/img3.jpg);">
                <div class="content absolute top-1/2 left-[100px] w-[300px] text-left text-gray-100 -translate-y-1/2 hidden font-sans">
                    <div class="name text-4xl uppercase font-bold">Iceland</div>
                    <div class="des mt-2.5 mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                    <button class="px-5 py-2.5 border-none cursor-pointer bg-white text-black rounded">See More</button>
                </div>
            </div>

            <div class="item absolute top-1/2 -translate-y-1/2 w-[200px] h-[300px] rounded-2xl shadow-[0_30px_50px_#505050] bg-cover bg-center inline-block transition-all duration-500" style="background-image: url(https://i.ibb.co/Bq4Q0M8/img4.jpg);">
                <div class="content absolute top-1/2 left-[100px] w-[300px] text-left text-gray-100 -translate-y-1/2 hidden font-sans">
                    <div class="name text-4xl uppercase font-bold">Australia</div>
                    <div class="des mt-2.5 mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                    <button class="px-5 py-2.5 border-none cursor-pointer bg-white text-black rounded">See More</button>
                </div>
            </div>

            <div class="item absolute top-1/2 -translate-y-1/2 w-[200px] h-[300px] rounded-2xl shadow-[0_30px_50px_#505050] bg-cover bg-center inline-block transition-all duration-500" style="background-image: url(https://i.ibb.co/jTQfmTq/img5.jpg);">
                <div class="content absolute top-1/2 left-[100px] w-[300px] text-left text-gray-100 -translate-y-1/2 hidden font-sans">
                    <div class="name text-4xl uppercase font-bold">Netherland</div>
                    <div class="des mt-2.5 mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                    <button class="px-5 py-2.5 border-none cursor-pointer bg-white text-black rounded">See More</button>
                </div>
            </div>

            <div class="item absolute top-1/2 -translate-y-1/2 w-[200px] h-[300px] rounded-2xl shadow-[0_30px_50px_#505050] bg-cover bg-center inline-block transition-all duration-500" style="background-image: url(https://i.ibb.co/RNkk6L0/img6.jpg);">
                <div class="content absolute top-1/2 left-[100px] w-[300px] text-left text-gray-100 -translate-y-1/2 hidden font-sans">
                    <div class="name text-4xl uppercase font-bold">Ireland</div>
                    <div class="des mt-2.5 mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                    <button class="px-5 py-2.5 border-none cursor-pointer bg-white text-black rounded">See More</button>
                </div>
            </div>

        </div>

        <div class="button absolute bottom-5 w-full text-center">
            <button class="prev w-10 h-9 rounded-lg border border-black cursor-pointer mx-1.5 transition-all duration-300 hover:bg-gray-400 hover:text-white">
                <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button class="next w-10 h-9 rounded-lg border border-black cursor-pointer mx-1.5 transition-all duration-300 hover:bg-gray-400 hover:text-white">
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </div>
    </div>
</section>

<script>
    // El script no necesita cambios, funciona con la estructura de clases actual.
    let next = document.querySelector('.next');
    let prev = document.querySelector('.prev');

    next.addEventListener('click', function(){
        let items = document.querySelectorAll('.item');
        document.querySelector('.slide').appendChild(items[0]);
    });

    prev.addEventListener('click', function(){
        let items = document.querySelectorAll('.item');
        document.querySelector('.slide').prepend(items[items.length - 1]);
    });
</script>

</body>
</html>