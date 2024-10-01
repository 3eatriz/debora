<header id="topo">
  <nav class="container" id="header_principal">
    <div class="left_nav">
      <div class="logo">
        <a href="/">
          <img src="<?= get_template_directory_uri() ?>/assets/images/logo.png" alt="logo">
        </a>
      </div>
    </div>
    <div class="right_nav">
      <ul>
        <a href="#sobre">
          <li class="link16 secondary hover_secondary">
            Sobre Mim
          </li>
        </a>
        <a href="#beneficios">
          <li class="link16 secondary hover_secondary">
            Benefícios
          </li>
        </a>
        <a href="#citacoes">
          <li class="link16 secondary hover_secondary">
            Citações
          </li>
        </a>
        <a href="#faq">
          <li class="link16 secondary hover_secondary">
            Dúvidas frequentes
          </li>
        </a>
      </ul>
      <div class="button_header_cta">
        <?php get_template_part('templates/components/button-cta');?>
      </div>
      <div class="menu_responsivo_header" onclick="abrirMenuResponsivo()">
        <div class="linha_responsivo"></div>
        <div class="linha_responsivo"></div>
        <div class="linha_responsivo"></div>
      </div>
      <div class="overlay_menu_responsivo" id="overlay_menu_responsivo">
        <div class="modal_menu_responsivo">
          <div class="menu_resp_top">
            <img src="<?= get_template_directory_uri() ?>/assets/images/components/arrow-up-line.svg"
              class="fechar_menu_responsivo" id="fechar_menu_responsivo">
            <p class="text_menu">Menu</p>
          </div>
          <hr class="hr_menu_resp">
          <div class="a_menu_resp">
            <a href="#topo" id="fechar_menu_responsivo">
              <img id="fechar_menu_responsivo" src="<?= get_template_directory_uri() ?>/assets/images/components/icon-menu1.svg" alt="">
              <p id="fechar_menu_responsivo" class="body18 primary_dark font400">Início</p>
            </a>
          </div>
          <div class="a_menu_resp">
            <a href="#sobre" id="fechar_menu_responsivo">
              <img id="fechar_menu_responsivo" src="<?= get_template_directory_uri() ?>/assets/images/components/icon-menu2.svg" alt="">
              <p id="fechar_menu_responsivo" class="body18 primary_dark font400">Sobre mim</p>
            </a>
          </div>
          <div class="a_menu_resp">
            <a href="#beneficios" id="fechar_menu_responsivo">
              <img id="fechar_menu_responsivo" src="<?= get_template_directory_uri() ?>/assets/images/components/icon-menu3.svg" alt="">
              <p id="fechar_menu_responsivo" class="body18 primary_dark font400">Benefícios</p>
            </a>
          </div>
          <div class="a_menu_resp">
            <a href="#citacoes" id="fechar_menu_responsivo">
              <img id="fechar_menu_responsivo" src="<?= get_template_directory_uri() ?>/assets/images/components/icon-menu4.svg" alt="">
              <p id="fechar_menu_responsivo" class="body18 primary_dark font400">Citações</p>
            </a>
          </div>
          <div class="a_menu_resp">
            <a href="#faq" id="fechar_menu_responsivo">
              <img id="fechar_menu_responsivo" src="<?= get_template_directory_uri() ?>/assets/images/components/icon-menu5.svg" alt="">
              <p id="fechar_menu_responsivo" class="body18 primary_dark font400">Dúvidas frequentes</p>
            </a>
          </div>
          <div class="a_menu_resp">
            <a href="#contato" id="fechar_menu_responsivo">
              <img id="fechar_menu_responsivo" src="<?= get_template_directory_uri() ?>/assets/images/components/icon-menu6.svg" alt="">
              <p id="fechar_menu_responsivo" class="body18 primary_dark font400">Agendamento</p>
            </a>
          </div>

          <hr class="hr_menu_resp">
          <div class="menu_resp_mid">
            <p class="font400 primary_dark body18">Siga nossas redes sociais</p>
            <div class="redes_menu_resp">
              <a target="_blank" style="width: 24px; height: 24px;" href="https://www.instagram.com/psideboradiaas?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><img
                  src="<?= get_template_directory_uri() ?>/assets/images/components/insta.png"></a>
              <a target="_blank" style="width: 24px; height: 24px;" href="https://api.whatsapp.com/send?phone=5581994773186&text=Ol%C3%A1%20D%C3%A9bora,%20vim%20pelo%20site%20e%20gostaria%20de%20saber%20mais%20sobre%20as%20consultas%20:)."><img
                  src="<?= get_template_directory_uri() ?>/assets/images/components/whats.png"></a>
              <a style="width: 24px; height: 24px;" href="mailto:deboradiaaspsi@gmail.com"><img
                  src="<?= get_template_directory_uri() ?>/assets/images/components/email.png"></a>
            </div>
          </div>
          <hr class="hr_menu_resp">
          <div class="menu_resp_bot">
            <p class="body12 font400 primary_dark">© 2024 Débora Dias. Todos os direitos reservados</p>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>


<script>
  function abrirMenuResponsivo() {
    const menuResponsivo = document.getElementById('overlay_menu_responsivo')
    menuResponsivo.classList.add('active_menu_responsivo')

    menuResponsivo.addEventListener('click', (e) => {
      if (e.target.id == 'fechar_menu_responsivo' || e.target.id == 'overlay_menu_responsivo') {
        menuResponsivo.classList.remove('active_menu_responsivo')
      }
    })
  }

  document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.getElementById('drop_menu1');
    const toggleElement = document.querySelector('.drop_a_wae');

    toggleButton.addEventListener('click', function () {
      if (toggleElement.style.display === 'flex') {
        toggleElement.style.display = 'none';
      } else {
        toggleElement.style.display = 'flex';
      }
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
    const toggleButton2 = document.getElementById('drop_menu2');
    const toggleElement2 = document.querySelector('.drop_servicos');

    toggleButton2.addEventListener('click', function () {
      if (toggleElement2.style.display === 'flex') {
        toggleElement2.style.display = 'none';
      } else {
        toggleElement2.style.display = 'flex';
      }
    });
  });
</script>