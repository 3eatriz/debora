<?php

function rt_social_customizer($wp_customize)
{
  //settings
  $wp_customize->add_setting('rt_facebook', array('default' => ''));
  $wp_customize->add_setting('rt_youtube', array('default' => ''));
  $wp_customize->add_setting('rt_telegram', array('default' => ''));
  $wp_customize->add_setting('rt_twitter', array('default' => ''));
  $wp_customize->add_setting('rt_instagram', array('default' => ''));
  $wp_customize->add_setting('rt_whatsapp', array('default' => ''));
  $wp_customize->add_setting('rt_number_whatsapp', array('default' => ''));
  $wp_customize->add_setting('rt_email', array('default' => ''));
  $wp_customize->add_setting('rt_name_email', array('default' => ''));
  $wp_customize->add_setting('rt_number', array('default' => 'ex: tel:+5571999999999'));
  $wp_customize->add_setting('rt_number_tel', array('default' => ''));
  //sections

  $wp_customize->add_section('rt_social_section', array(
    'title' => 'Redes Sociais e Links',
    'priority' => '1'
  ));

  $wp_customize->add_section('rt_number_section', array(
    'title' => 'Números de telefone e Email',
    'priority' => '2'
  ));


  //controllers
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'rt__number',
      array(
        'label' => 'Link Número de telefone',
        'section' => 'rt_social_section',
        'settings' => 'rt_number',
        'type' => 'text'
      )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'rt__number_tel',
      array(
        'label' => 'Número do Telefone',
        'section' => 'rt_number_section',
        'settings' => 'rt_number_tel',
        'type' => 'text'
      )
    )
  );


  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'rt__number_whatsapp',
      array(
        'label' => 'Número do Whatsapp',
        'section' => 'rt_number_section',
        'settings' => 'rt_number_whatsapp',
        'type' => 'text'
      )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'rt_name_email',
      array(
        'label' => 'Email de contato',
        'section' => 'rt_number_section',
        'settings' => 'rt_name_email',
        'type' => 'text'
      )
    )
  );


  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'rt_facebook',
      array(
        'label' => 'Link do Facebook',
        'section' => 'rt_social_section',
        'settings' => 'rt_facebook',
        'type' => 'text'
      )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'rt_youtube',
      array(
        'label' => 'Link do Youtube',
        'section' => 'rt_social_section',
        'settings' => 'rt_youtube',
        'type' => 'text'
      )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'rt_telegram',
      array(
        'label' => 'Link do telegram',
        'section' => 'rt_social_section',
        'settings' => 'rt_telegram',
        'type' => 'text'
      )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'rt_twitter',
      array(
        'label' => 'Link do twitter',
        'section' => 'rt_social_section',
        'settings' => 'rt_twitter',
        'type' => 'text'
      )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'rt_instagram',
      array(
        'label' => 'Link do instagram',
        'section' => 'rt_social_section',
        'settings' => 'rt_instagram',
        'type' => 'text'
      )
    )
  );


  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'rt_whatsapp',
      array(
        'label' => 'Link do Whatsapp',
        'section' => 'rt_social_section',
        'settings' => 'rt_whatsapp',
        'type' => 'text'
      )
    )
  );


  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'rt_email',
      array(
        'label' => 'Link do Email',
        'section' => 'rt_social_section',
        'settings' => 'rt_email',
        'type' => 'text'
      )
    )
  );
}
