<section class="citacoes" id="citacoes">
  <div class="container">
    <img src="<?= get_template_directory_uri() ?>/assets/images/citacoes/citacoes.png" alt="">
    <h2 class="titulo1 primary_dark">O que dizem sobre a terapia</h2>

    <section class="slider">
      <div class="slider-content">
        <input type="radio" name="btn-radio" id="radio1">
        <input type="radio" name="btn-radio" id="radio2">
        <input type="radio" name="btn-radio" id="radio3">

        <div class="slide-box primeiro">
          <div class="box_citacao">
            <div class="top_citacao">
              <img src="<?= get_template_directory_uri() ?>/assets/images/citacoes/quest_esquerda.svg" alt="">
              <p class="text_citacao primary_dark">A terapia é uma oportunidade de enxergar o que você já sabe com novos
                olhos.</p>
              <img src="<?= get_template_directory_uri() ?>/assets/images/citacoes/quest_direita.svg" alt="">
            </div>
            <div class="bot_citacao">
              <div class="card_citacao">
                <img src="<?= get_template_directory_uri() ?>/assets/images/citacoes/person.png" alt="">
                <div>
                  <p class="pessoa_citacao primary_dark">Irvin D. Yalom</p>
                  <p class="ocupacao_citacao primary_dark">Psiquiatra e psicoterapeuta</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="slide-box">
          <div class="box_citacao">
            <div class="top_citacao">
              <img src="<?= get_template_directory_uri() ?>/assets/images/citacoes/quest_esquerda.svg" alt="">
              <p class="text_citacao primary_dark">A cura não vem de esquecer, mas de enfrentar e aceitar nossas
                experiências.</p>
              <img src="<?= get_template_directory_uri() ?>/assets/images/citacoes/quest_direita.svg" alt="">
            </div>
            <div class="bot_citacao">
              <div class="card_citacao">
                <img src="<?= get_template_directory_uri() ?>/assets/images/citacoes/person.png" alt="">
                <div>
                  <p class="pessoa_citacao primary_dark">Sigmund Freud</p>
                  <p class="ocupacao_citacao primary_dark">Neurologista</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="slide-box">
          <div class="box_citacao">
            <div class="top_citacao">
              <img src="<?= get_template_directory_uri() ?>/assets/images/citacoes/quest_esquerda.svg" alt="">
              <p class="text_citacao primary_dark">A psicoterapia é como educação; ajuda você a crescer, mas exige que
                você
                realmente queira aprender.</p>
              <img src="<?= get_template_directory_uri() ?>/assets/images/citacoes/quest_direita.svg" alt="">
            </div>
            <div class="bot_citacao">
              <div class="card_citacao">
                <img src="<?= get_template_directory_uri() ?>/assets/images/citacoes/person.png" alt="">
                <div>
                  <p class="pessoa_citacao primary_dark">Carl Rogers</p>
                  <p class="ocupacao_citacao primary_dark">Psicólogo</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="nav-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
        </div>
        <div class="nav-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
        </div>

      </div>
    </section>

    <?php get_template_part('templates/components/button-cta'); ?>
  </div>
</section>

<script>

</script>