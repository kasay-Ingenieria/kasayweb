document.addEventListener("DOMContentLoaded", function () {
  // --- MÓDULO 1: CARRUSEL DE SERVICIOS (Personalizado) ---
  const slideContainer = document.querySelector(".slide");
  const carruselSection = document.getElementById("seccion_carrusel");
  const nextBtn = document.querySelector(".next");
  const prevBtn = document.querySelector(".prev");
  let intervaloSlide;

  // Se comprueba que todos los elementos del carrusel principal existan antes de ejecutar su lógica
  if (slideContainer && carruselSection && nextBtn && prevBtn) {
    function avanzarSlide() {
      let items = slideContainer.querySelectorAll(".item");
      if (items.length > 1) {
        slideContainer.appendChild(items[0]);
      }
    }

    function retrocederSlide() {
      let items = slideContainer.querySelectorAll(".item");
      if (items.length > 1) {
        slideContainer.prepend(items[items.length - 1]);
      }
    }

    function detenerIntervalo() {
      clearInterval(intervaloSlide);
    }

    function iniciarIntervalo() {
      detenerIntervalo(); // Siempre limpia el anterior para evitar duplicados
      intervaloSlide = setInterval(avanzarSlide, 6000); // 6 segundos
    }

    // Eventos para los botones de navegación
    nextBtn.addEventListener("click", () => {
      detenerIntervalo();
      avanzarSlide();
      iniciarIntervalo();
    });

    prevBtn.addEventListener("click", () => {
      detenerIntervalo();
      retrocederSlide();
      iniciarIntervalo();
    });

    // Eventos para pausar con el ratón
    carruselSection.addEventListener("mouseenter", detenerIntervalo);
    carruselSection.addEventListener("mouseleave", iniciarIntervalo);

    // Evento para seleccionar un slide haciendo clic (versión corregida)
    slideContainer.addEventListener("click", function (event) {
      const clickedItem = event.target.closest(".item");
      if (!clickedItem) return;

      const allItems = [...slideContainer.querySelectorAll(".item")];
      const clickIndex = allItems.indexOf(clickedItem);

      // Condición corregida: > 1 porque los slides 0 y 1 son los principales
      if (clickIndex > 1) {
        detenerIntervalo();

        // Bucle corregido con "- 1" para detenerse en el slide correcto
        for (let i = 0; i < clickIndex - 1; i++) {
          avanzarSlide();
        }

        iniciarIntervalo();
      }
    });

    // Arranque automático del carrusel
    iniciarIntervalo();
  }

  // --- MÓDULO 2: CARRUSEL DE ALIADOS (Swiper) ---
  if (document.querySelector(".swiper-allies")) {
    const alliesSwiper = new Swiper(".swiper-allies", {
      loop: true,
      grabCursor: true,
      spaceBetween: 20,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      breakpoints: {
        320: { slidesPerView: 2, spaceBetween: 20 },
        768: { slidesPerView: 4, spaceBetween: 30 },
        1024: { slidesPerView: 6, spaceBetween: 40 },
      },
    });
  }

  // --- MÓDULO 3: ANIMACIÓN DE SCROLL Y SCROLL SUAVE ---
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("animate__animated", "animate__fadeInUp");
          observer.unobserve(entry.target); // Para que la animación ocurra solo una vez
        }
      });
    },
    { threshold: 0.1 }
  );

  document.querySelectorAll("section, .service-card").forEach((section) => {
    observer.observe(section);
  });

  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      const targetId = this.getAttribute("href");
      const targetElement = document.querySelector(targetId);

      if (targetElement) {
        const headerOffset = 60; // Altura de tu barra de navegación fija
        const elementPosition =
          targetElement.getBoundingClientRect().top + window.pageYOffset;
        window.scrollTo({
          top: elementPosition - headerOffset,
          behavior: "smooth",
        });
      }
    });
  });
});

// Animación al hacer scroll Y Scroll Suave
document.addEventListener("DOMContentLoaded", function () {
  // Script para animaciones al aparecer (IntersectionObserver)
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("animate__animated", "animate__fadeInUp");
        }
      });
    },
    {
      threshold: 0.1,
    }
  );

  document.querySelectorAll("section, .service-card").forEach((section) => {
    observer.observe(section);
  });

  // Script para scroll suave en enlaces de ancla
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault(); // Evita el salto instantáneo predeterminado

      const targetId = this.getAttribute("href"); // Obtiene el ID del destino (ej. "#servicios_inicio")
      const targetElement = document.querySelector(targetId); // Selecciona el elemento de destino

      if (targetElement) {
        // Opción B: Usar window.scrollTo con cálculo de offset (para headers fijos)
        const headerOffset = 60; // <<< AJUSTA ESTE VALOR: Altura de tu barra de navegación fija
        const elementPosition =
          targetElement.getBoundingClientRect().top + window.pageYOffset;
        window.scrollTo({
          top: elementPosition - headerOffset,
          behavior: "smooth",
        });

        // Opcional: Actualizar la URL en la barra de direcciones sin recargar
        // history.pushState(null, null, targetId);
      }
    });
  });
});
