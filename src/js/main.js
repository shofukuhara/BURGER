document.addEventListener(
  "DOMContentLoaded",
  function () {
    const hamburger = document.querySelector(".header__hamburger");
    const inner = document.querySelector(".header__inner");
    const list = document.querySelector(".header__list");
    const sns = document.querySelector(".header__sns");
    const link = document.querySelectorAll(".header__list-link");

    hamburger.addEventListener("click", () => {
      hamburger.classList.toggle("active");
      list.classList.toggle("active");
      sns.classList.toggle("active");
      inner.classList.toggle("active");
    });

    link.forEach((link) => {
      link.addEventListener("click", () => {
        inner.classList.remove("active");
        list.classList.remove("active");
        hamburger.classList.remove("active");
        sns.classList.remove("active");
      });
    });
  },
  false
);
