<?php

require get_template_directory() . '/include/customizer/social.php';

function rt_customize_register($wp_customize)
{
  rt_social_customizer($wp_customize);
}
