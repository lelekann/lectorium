<?php

function ju_activate()
{
  if (version_compare(get_bloginfo('version'), '4.2', '<')) {
    wp_die(__('You must have a minimum version of 4.2 to use this theme.'));
  }

  $theme_opts = get_option('ju_opts');

  if (!$theme_opts) {
    $opts         = array(
      'twitter'   => '',
      'facebook'  => '',
      'youtube'   => '',
      'logo_type' => 1,
      'logo_img'  => '',
      'footer'    => ''
    );

    add_option('ju_opts', $opts);
  }
}