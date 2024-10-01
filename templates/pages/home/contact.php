<section class="contato" id="contato">
  <div class="container">
    <div class="top_contato">
      <img class="chat" src="<?= get_template_directory_uri() ?>/assets/images/contato/agendamento.png" alt="">
      <h2 class="titulo_contato primary_dark">Preencha o formulário abaixo para agendar uma sessão ou esclarecer dúvidas. </h2>
      <p class="subtitulo_contato primary_dark">Eu entrarei em contato com você o mais breve possível.</p>
    </div>
    <div class="formulario">
      <?= do_shortcode('[contact-form-7 id="b99a526" title="debora"]') ?>
      <img class="contato_img1" src="<?= get_template_directory_uri() ?>/assets/images/contato/imagem1.png" alt="" draggable="false">
      <img class="contato_img2" src="<?= get_template_directory_uri() ?>/assets/images/contato/imagem2.png" alt="" draggable="false">
    </div>
  </div>
</section>