const openBtn = document.getElementById("openBtn");

const pack = document.getElementById("pack");

const stickersContainer =
document.getElementById("stickersContainer");

const tear =
document.querySelector(".pack-tear");

openBtn.addEventListener("click", () => {

  pack.classList.add("open");

  tear.classList.add("open");

  setTimeout(() => {

    stickersContainer.classList.add("show");

  }, 500);

});