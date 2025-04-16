document.addEventListener("DOMContentLoaded", () => {
  const container = document.querySelector(".icon-container");
  const icons = document.querySelectorAll(".icon");
  const izquierda = document.querySelector(".izquierda");
  const derecha = document.querySelector(".derecha");

  let index = 0;

  derecha.addEventListener("click", () => {
      if (index < icons.length - 1) {
          index++;
          container.style.transform = `translateX(${-index * 100}px)`;
      }
  });

  izquierda.addEventListener("click", () => {
      if (index > 0) {
          index--;
          container.style.transform = `translateX(${-index * 100}px)`;
      }
  });
});


