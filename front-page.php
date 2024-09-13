<?php
get_header();
get_template_part('templates/components/header');
get_template_part('templates/pages/home/hero');
get_template_part('templates/pages/home/sobre');
get_template_part('templates/pages/home/beneficios');
get_template_part('templates/pages/home/citacoes');
get_template_part('templates/pages/home/solutions2');
?>
<div style="border-radius: 56px;
background: linear-gradient(155deg, #1E3257 0%, #0E2A5F 100%);">
  <?php
  get_template_part('templates/pages/home/diferentials');
  get_template_part('templates/pages/home/clients');
  get_template_part('templates/pages/home/about');
  ?>
</div>
<?php
get_template_part('templates/components/depoiments');
get_template_part('templates/pages/home/blog');
get_template_part('templates/components/faq');
get_template_part('templates/components/contact');
get_template_part('templates/components/footer');
get_template_part('templates/components/button-menu-mobile');
get_footer();
