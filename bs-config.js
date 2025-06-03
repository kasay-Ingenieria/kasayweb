module.exports = {
  proxy: "http://localhost/kasayweb/", // Cambia esta URL si tu ruta es diferente
  files: ["**/*.php", "css/*.css", "js/*.js"],
  browser: ["chrome", "opera"],
  notify: false
};
