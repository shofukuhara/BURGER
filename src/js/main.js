const hamburger = document.querySelector(".header__hamburger");
const inner = document.querySelector(".header__inner");
const list = document.querySelector(".header__list");
const sns = document.querySelector(".header__sns");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  list.classList.toggle("active");
  sns.classList.toggle("active");
  inner.classList.toggle("active");
});
