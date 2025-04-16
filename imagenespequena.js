document.addEventListener("DOMContentLoaded", () => {
  const container = document.querySelector(".icon-container");

  // Fijar la vista en el primer ícono al cargar en móvil
  function ajustarEnMovil() {
      if (window.innerWidth <= 768) {
          container.scrollLeft = 0; // Coloca el scroll al inicio
      }
  }

  // Aplicar ajuste inicial y cuando cambie el tamaño de pantalla
  ajustarEnMovil();
  window.addEventListener("resize", ajustarEnMovil);

  // Permitir desplazamiento con la rueda del mouse
  container.addEventListener("wheel", (event) => {
      event.preventDefault();
      container.scrollLeft += event.deltaY * 2; // Ajusta la velocidad del desplazamiento
  });
});
