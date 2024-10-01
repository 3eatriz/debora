<footer class="footer">
  <div class="container">
    <div class="top_footer">
      <div class="left_top_footer">
        <img class="chat" src="<?= get_template_directory_uri() ?>/assets/images/logo-footer.png" alt="">
        <p class="text_footer1 primary_dark">Transforme sua vida com a ajuda de um profissional. Entre em contato!</p>
      </div>
      <div class="mid_top_footer rapido_none">
        <p class="acesso_rapido_footer primary_dark">Acesso rápido</p>
        <a class="acesso_footer primary_dark">Início</a>
        <a class="acesso_footer primary_dark">Sobre mim</a>
        <a class="acesso_footer primary_dark">Benefícios</a>
        <a class="acesso_footer primary_dark">Citações</a>
        <a class="acesso_footer primary_dark">Dúvidas frequentes</a>
      </div>
      <div class="mid_top_footer">
        <p class="acesso_rapido_footer primary_dark">Contato</p>
        <a class="acesso_footer primary_dark"><img style="width: 24px; height: 24px" src="<?= get_template_directory_uri() ?>/assets/images/components/insta.png"> (81) 99477-3186</a>
        <a class="acesso_footer primary_dark"><img style="width: 24px; height: 24px" src="<?= get_template_directory_uri() ?>/assets/images/components/whats.png"> deboradiaaspsi@gmail.com</a>
        <a class="acesso_footer primary_dark"><img style="width: 24px; height: 24px" src="<?= get_template_directory_uri() ?>/assets/images/components/email.png"> @psideboradiaas</a>
      </div>
      <div class="right_top_footer">
        <p class="text_footer2 primary_dark">Não enfrente os desafios sozinho. Agende uma sessão de terapia!</p>
        <?php get_template_part('templates/components/button-cta'); ?>
      </div>
    </div>
    <div class="bot_footer">
      <p class="footer_copy primary_dark">© <time datetime="<?php echo date('c'); ?>"><?php echo date('Y'); ?></time> Débora Dias. Todos os direitos
        reservados</p>
      <a class="footer_copy seila primary_dark" href="#topo">Voltar ao início <img class="chat" src="<?= get_template_directory_uri() ?>/assets/images/top.png"
          alt=""></a>
    </div>
  </div>
</footer>