<?php

/**
 * @file
 * Theme settings form for demoTheme theme.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function demotheme_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['demotheme'] = [
    '#type' => 'details',
    '#title' => t('demoTheme'),
    '#open' => TRUE,
  ];

  $form['demotheme']['font_size'] = [
    '#type' => 'number',
    '#title' => t('Font size'),
    '#min' => 12,
    '#max' => 18,
    '#default_value' => theme_get_setting('font_size'),
  ];

}
