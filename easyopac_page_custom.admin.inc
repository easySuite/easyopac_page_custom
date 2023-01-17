<?php

/**
 * @file
 * Provides administrative functionality.
 */

/**
 * Provides form for administrative tasks.
 *
 * @param array $form
 *   Form structure.
 * @param array $form_state
 *   Form state.
 *
 * @return array
 *   Form structure.
 */
function easyopac_page_custom_admin_form(array $form, array &$form_state): array {
  $default = variable_get('easyopac_page_custom_markup', '');

  drupal_set_message(t('The contents entered might have security implications.'), 'error', FALSE);

  $form['easyopac_page_custom_markup'] = [
    '#type' => 'textarea',
    '#title' => t('Page markup'),
    '#required' => FALSE,
    '#default_value' => !empty($default) ? base64_decode($default) : '',
  ];

  $form['easyopac_page_custom_submit'] = [
    '#type' => 'submit',
    '#value' => t('Save configuration'),
  ];

  return $form;
}

/**
 * Custom submit handler for administrative form.
 *
 * @param array $form
 *   Form structure.
 * @param array $form_state
 *   Form state.
 *
 * @see easyopac_page_custom_admin_form()
 */
function easyopac_page_custom_admin_form_submit(array $form, array &$form_state): void {
  form_state_values_clean($form_state);

  $markup = $form_state['values']['easyopac_page_custom_markup'] ?? '';
  if (!empty($markup) || $markup === '0') {
    $markup = base64_encode($markup);
  }

  variable_set('easyopac_page_custom_markup', $markup);

  drupal_set_message(t('The configuration options have been saved.'));
}
