function initScrollSuave() {
  const linksInternos = document.querySelectorAll('.navbar a[href^="#"]');

  if (linksInternos.length) {
    function handleScrollSuave(event) {
      event.preventDefault();
      const href = event.currentTarget.getAttribute("href");
      const secoes = document.querySelector(href);
      secoes.scrollIntoView({
        behavior: "smooth",
        block: "center",
      });
      const navbar = document.querySelector(".links-list");
      navbar.classList.remove("ativo");
    }

    linksInternos.forEach((link) => {
      link.addEventListener("click", handleScrollSuave);
    });
  }
}
initScrollSuave();

function initAnimaScroll() {
  const secoes = document.querySelectorAll(".js-scroll");
  if (secoes.length) {
    const tela = window.innerHeight * 0.6;

    function animaScroll() {
      secoes.forEach((secao) => {
        const secaoTopo = secao.getBoundingClientRect().top - tela;
        if (secaoTopo < 0) {
          secao.classList.add("ativo");
        } else {
          secao.classList.remove("ativo");
        }
      });
    }
    animaScroll();

    window.addEventListener("scroll", animaScroll);
  }
}
initAnimaScroll();

const menuIcone = document.querySelector(".menu-icon");
const navbar = document.querySelector(".links-list");

menuIcone.onclick = () => {
  navbar.classList.toggle("ativo");
};
