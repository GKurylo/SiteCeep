const menuMobile = document.getElementById('menuMobile');
    const fundoEscuro = document.getElementById('fundoEscuro');

    function abrirMenu() {
      menuMobile.classList.add('aberto');
      fundoEscuro.classList.add('visivel');
    }

    function fecharMenu() {
      menuMobile.classList.remove('aberto');
      fundoEscuro.classList.remove('visivel');
    }