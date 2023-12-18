document.addEventListener("DOMContentLoaded", function () {
  const inicioMenu = document.getElementById("inicioMenu");

  inicioMenu.addEventListener("click", function () {
      window.scrollTo({ top: 0, behavior: "smooth" });
  });

  const links = document.querySelectorAll('nav ul li a');

  links.forEach(link => {
      link.addEventListener('click', function (event) {
          event.preventDefault();

          const targetId = this.getAttribute('href').substring(1);
          const targetElement = document.getElementById(targetId);

          if (targetElement) {
              const offset = -100; // Ajusta o ponto de parada para 50 pixels acima do topo da seção
              const targetPosition = targetElement.offsetTop + offset;

              window.scrollTo({
                  top: targetPosition,
                  behavior: 'smooth'
              });
          }
      });
  });
});

  function toggleAnswer(answerId) {
    const answer = document.getElementById(answerId);
    answer.style.display = answer.style.display === 'none' ? 'block' : 'none';
  }
  document.addEventListener("DOMContentLoaded", function() {
    // Quando a página carregar, adicionamos um evento ao formulário
    var form = document.querySelector("form");
  
    form.addEventListener("submit", function(event) {
      event.preventDefault(); // Impede o envio padrão do formulário
  
      // Obtém o valor do campo de CPF
      var cpfInput = document.getElementById("cpf");
      var cpfValue = cpfInput.value;
  
      // Remove caracteres não numéricos do CPF
      var cpfDigits = cpfValue.replace(/\D/g, "");
  
      // Formata o CPF (XXX.XXX.XXX-XX)
      var formattedCPF = cpfDigits.replace(/^(\d{3})(\d{3})(\d{3})(\d{2})$/, "$1.$2.$3-$4");
  
      // Define o valor formatado de volta no campo de CPF
      cpfInput.value = formattedCPF;
    });
  });
  $('#cpf').mask('000.000.000-00', {reverse: true});
  function toggleMenu() {
  var menu = document.querySelector(".menu");
  var nav = document.querySelector("nav");
  menu.classList.toggle("active");
  nav.classList.toggle("active");
  }
  
  
  