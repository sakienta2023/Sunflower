const menuButton = document.getElementById("menuButton");
const navMenu = document.getElementById("navMenu");
const closeButton = document.getElementById("closeButton");

menuButton.addEventListener("click", () => {
  navMenu.classList.toggle("visible");
  menuButton.classList.toggle("hidden");
  closeButton.classList.toggle("hidden");
});

closeButton.addEventListener("click", () => {
  navMenu.classList.toggle("visible");
  menuButton.classList.toggle("hidden");
  closeButton.classList.toggle("hidden");
});