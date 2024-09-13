<section class="section_contact" id="contato">
  <div class="container">
    <div class="left_contact">
      <img src="<?= get_template_directory_uri() ?>/assets/images/components/wae.png" alt="wae" class="margin8">
      <h2 class="heading40 semi_bold white margin16">Como podemos transformar a gestão da sua instituição?</h2>
      <p class="body20 opacity75 white">Descubra como nossas soluções podem ajudar a transformar sua instituição. Selecione a solução ideal para você e fale com um especialista.</p>
      <p class="ajust_gap8">
        <img src="<?= get_template_directory_uri() ?>/assets/images/components/emoji.svg" alt="wae">
        <span class=" body20 white opacity75 "> Não se preocupe, nós não te enviaremos spam, ok?</span>
      </p>
    </div>
    <div class=" right_contact">
      <?= do_shortcode('[contact-form-7 id="b73e761" title="wae"]') ?>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var cargoSelect = document.querySelector('select[name="your-cargo"]');
    cargoSelect.selectedIndex = 0; // Força a seleção da primeira opção ("Selecione")

    cargoSelect.addEventListener('change', function() {
        // Remove a opção "Selecione" após selecionar outra opção
        if (cargoSelect.value !== "Selecione") {
            cargoSelect.querySelector('option[value="Selecione"]').disabled = true;
        }
    });

    document.querySelector('form.wpcf7-form').addEventListener('submit', function(e) {
        if (cargoSelect.value === "Selecione") {
            e.preventDefault();
            alert('Por favor, selecione uma opção válida.');
        }
    });
});
</script>