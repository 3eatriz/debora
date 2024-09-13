<section class="page_home_about">
  <div class="container">
    <div class="top_home_about">
      <h2 class="heading40 semi_bold white">Ajudamos as instituições a terem autonomia sobre sua gestão</h2>
      <p class="body24 gray5">Transformamos a relação das instituições com soluções que realmente melhoram a gestão.</p>
    </div>
    <div class="bottom_home_about">
      <div class="left_home_about">
        <div class="item_left_home_about">
          <img src="<?= get_template_directory_uri() ?>/assets/images/home/icon-about1.svg" alt="linha">
          <div class="text_item">
            <h5 class="extra_bold heading18 white margin16">Autonomia gera confiança</h5>
            <p class="body14 gray5">Controlar sua configuração é o que constrói relações de confiança.</p>
          </div>
        </div>
        <img src="<?= get_template_directory_uri() ?>/assets/images/home/line.svg" class="linha1" alt="linha">

        <div class="item_left_home_about">
          <img src="<?= get_template_directory_uri() ?>/assets/images/home/icon-about2.svg" alt="linha">
          <div class="text_item">
            <h5 class="extra_bold heading18 white margin16">Confiança gera simplicidade</h5>
            <p class="body14 gray5">A comunicação efetiva está no centro de tudo que fazemos.</p>
          </div>
        </div>
        <img src="<?= get_template_directory_uri() ?>/assets/images/home/line.svg" class="linha2" alt="linha">

        <div class="item_left_home_about">
          <img src="<?= get_template_directory_uri() ?>/assets/images/home/icon-about3.svg" alt="linha">
          <div class="text_item">
            <h5 class="extra_bold heading18 white margin16">Simplicidade gera eficiência</h5>
            <p class="body14 gray5">Processos mais automatizados para experiências mais fluídas.</p>
          </div>
        </div>
        <img src="<?= get_template_directory_uri() ?>/assets/images/home/line.svg" class="linha3" alt="linha">

        <div class="item_left_home_about last_item_home_about">
          <img src="<?= get_template_directory_uri() ?>/assets/images/home/icon-about4.svg" alt="linha">
          <h5 class="extra_bold heading18 white">Gerando ainda mais negócios e inovação para a sua instituição.</h5>
        </div>
      </div>
      <div class="right_home_about">
        <div class="video-wrapper">
          <iframe id="ytplayer" src="https://www.youtube.com/embed/BV3vWh0aaeo?enablejsapi=1" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
          <div class="custom-play-button" id="customPlayButton"></div>
        </div>
        <!-- <img src="<?= get_template_directory_uri() ?>/assets/images/home/about-video.png" alt="imagem de um video"> -->
        <img src="<?= get_template_directory_uri() ?>/assets/images/home/about-card.png" alt="card">
      </div>
    </div>
  </div>
</section>

<script>
  // Load YouTube IFrame Player API code asynchronously
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  // Replace the 'ytplayer' element with an <iframe> and YouTube player
  var player;
  function onYouTubeIframeAPIReady() {
    player = new YT.Player('ytplayer', {
      events: {
        'onReady': onPlayerReady
      }
    });
  }

  function onPlayerReady(event) {
    var customPlayButton = document.getElementById('customPlayButton');
    customPlayButton.addEventListener('click', function () {
      player.playVideo();
      customPlayButton.style.display = 'none';
    });
  }
</script>