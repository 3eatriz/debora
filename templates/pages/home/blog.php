<section class="page_home_blog">
  <div class="container">
    <div class="top_home_blog">
      <div class="left_top_home_blog">
        <h2 class="gray heading40 semi_bold">Acesse nossos conteúdos</h2>
      </div>
      <a href="/blog" class="link16 blue_dark ajust_gap8">Ver mais publicações <img
          src="<?= get_template_directory_uri() ?>/assets/images/home/arrow-right-blue.svg" alt="arrow right"></a>
    </div>
    <div class="bottom_home_blog">

      <?php
      // the query
      $the_query = new WP_Query(
        array(
          'posts_per_page' => 4,
          'ignore_sticky_posts' => 1,
        )
      );
      ?>

      <?php if ($the_query->have_posts()): ?>
        <?php while ($the_query->have_posts()):
          $the_query->the_post(); ?>

          <?php get_template_part("/templates/pages/blog/card") ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

      <?php else: ?>
      <?php endif; ?>
    </div>
  </div>
</section>