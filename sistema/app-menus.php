  <!-- Fundo escuro para fechar o menu no mobile -->
  <div class="fundo-escuro" id="fundoEscuro" onclick="fecharMenu()"></div>

  <!-- Menu lateral -->
  <div class="menu-lateral d-none d-md-block" id="menuDesktop">
      <div class="p-3 border-bottom">
          <h5>Painel Admin</h5>
      </div>
      <ul class="nav flex-column p-3">
          <li class="nav-item">
              <a class="nav-link btn btnMenu" href="index_sistema.php">Início</a>
          </li>
          <li class="nav-item">
              <a class="nav-link btn btnMenu" href="usuarios-pesquisar.php">Usuários</a>
          </li>
          <li class="nav-item">
              <a class="nav-link btn btnMenu" href="locais-pesquisar.php">Locais</a>
          </li>
          <li class="nav-item">
              <a class="nav-link btn btnMenu" href="teste.php">Teste</a>
          </li>
          <li class="nav-item">
              <a class="nav-link btn btnMenu" href="site.php">Gerir Site</a>
          </li>
      </ul>

      <div class="mt-5 text-center">
          <a class="btn btnMenu" href="../">Voltar ao Site</a>
      </div>

  </div>




  <!-- Menu mobile (invisível no desktop) -->
  <div class="menu-lateral d-md-none" id="menuMobile">
      <div class="p-3 border-bottom">
          <h5>Painel Admin</h5>
      </div>
      <ul class="nav flex-column p-3">
          <li class="nav-item">
              <a class="nav-link btn btnMenu" href="index_sistema.php">Início</a>
          </li>
          <li class="nav-item">
              <a class="nav-link btn btnMenu" href="usuarios-pesquisar.php">Usuários</a>
          </li>
          <li class="nav-item">
              <a class="nav-link btn btnMenu" href="#">Relatórios</a>
          </li>
          <li class="nav-item">
              <a class="nav-link btn btnMenu" href="#">Configurações</a>
          </li>
          <li class="nav-item">
              <a class="nav-link btn btnMenu" href="adicionarNoticias.php">Adicionar Notícia</a>
          </li>
          
      </ul>

      <div class="mt-5 text-center">
          <a class="btn btnMenu" href="index.php">Voltar ao Site</a>
      </div>

      
      
  </div>

  <!-- Conteúdo principal -->
  <div class="conteudo-principal ">
      <button class="btn btn-secondary botao-menu w-100" onclick="abrirMenu()">☰ Abrir Menu</button>