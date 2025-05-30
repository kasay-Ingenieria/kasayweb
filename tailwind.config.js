/** @type {import('tailwindcss').Config} */ module.exports = { content: [ "./*.html", 
    // Escanea todos los archivos HTML en la raíz (index.html, contacto.html, etc.)
    "./partials/**/*.html", // Escanea archivos HTML dentro de la carpeta partials 
    "./assets/js/**/*.js", // Escanea archivos JavaScript en assets/js 
    "./servicios/**/*.html", // Si tienes HTML dentro de la carpeta servicios 
    "./servicios/**/*.js", // Si tienes JS dentro de la carpeta servicios
  ], theme: { extend: {},
  },
  plugins: [],
}
