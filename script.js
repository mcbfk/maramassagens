// Função para atualizar ano no footer e na meta tag
function atualizaAno() {
    const currentYear = new Date().getFullYear();
    
    // Atualiza o texto no footer
    const footerText = document.getElementById('textFooter');
    if (footerText) {
        footerText.textContent = `© ${currentYear} Mara Massagens`;
    }

    // Atualiza a meta tag de copyright
    const copyrightMeta = document.querySelector('meta[name="copyright"]');
    if (copyrightMeta) {
        copyrightMeta.setAttribute('content', `Copyright ${currentYear}, Mara Massagens`);
    }
}
atualizaAno();


const botao = document.querySelector(".btnLow");

botao.addEventListener("click", () => {
  const aboutSection = document.querySelector(".sobre");
  
  if (aboutSection) {
    const scrollOffset = 50; 
    const scrollDistance = aboutSection.getBoundingClientRect().top + window.scrollY + scrollOffset;

    // Tempo de rolagem em milissegundos
    const duration = 500; // 2 segundos
    const start = window.scrollY;
    const distance = scrollDistance - start;
    let startTime = null;

    function scrollAnimation(currentTime) {
      if (startTime === null) startTime = currentTime;
      const timeElapsed = currentTime - startTime;
      const progress = Math.min(timeElapsed / duration, 1);

      window.scrollTo(0, start + (distance * progress));

      if (timeElapsed < duration) {
        requestAnimationFrame(scrollAnimation);
      }
    }

    requestAnimationFrame(scrollAnimation);
  }
});

$(window).scroll(function() {
  if ($(document).scrollTop() > 10) {
    $(botao).fadeOut(); 
  } else {
    $(botao).fadeIn(); 
  }
});