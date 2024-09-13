<?php
function rt_theme_styles()
{
  //css
  wp_enqueue_style("app", get_template_directory_uri() . '/assets/css/app.css');

  //javascript
  wp_enqueue_script("main-js", get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true);
  wp_enqueue_script("maskPhone-js", get_template_directory_uri() . '/assets/js/maskPhone.js', '', '', true);
  wp_enqueue_script("solutions-js", get_template_directory_uri() . '/assets/js/solutions.js', '', '', true);
  wp_enqueue_script("option-js", get_template_directory_uri() . '/assets/js/option.js', '', '', true);
}


function rt_after_setup()
{
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}
