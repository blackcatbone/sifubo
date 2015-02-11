<?php
/**
 * @file
 * template.php
 *
 * This file should only contain light helper functions and stubs pointing to
 * other files containing more complex functions.
 */

/**
 * Include common functions used through out theme.
 */
include_once dirname(__FILE__) . '/theme/common.inc';

/**
 * Declare various hook_*_alter() hooks.
 *
 * e.g. hook_form_alter().
 */
acquia_training_include('acquia_training', 'theme/alter.inc');

/**
 * Declare various hook_preprocess_*() hooks.
 *
 * e.g. theme_preprocess_node().
 */
acquia_training_include('acquia_training', 'theme/preprocess.inc');

/**
 * Declare various hook_theme() hooks.
 *
 * e.g. theme_bootstrap_search_form_wrapper().
 */
acquia_training_include('acquia_training', 'theme/theme.inc');

/**
 * Override of theme_field()
 *
 * @param $variables
 */
/*function acquia_university_field__field_headline__acquia_bio($variables) {
  dsm($variables);
}*/

/**
 * Implementation of theme_field()
 *
 * @param $variables
 * @return string
 */
function acquia_university_field__field_headline__acquia_bio($variables) {

  $output = '';
  // Render the label, if it's not hidden.
  if (!$variables['label_hidden']) {
    $output .= '<div class="field-label"' . $variables['title_attributes'] . '>' . $variables['label'] . ':&nbsp;</div>';
  }

  // Render the items.
  $output .= '<div class="field-items"' . $variables['content_attributes'] . '>';
  foreach ($variables['items'] as $delta => $item) {
    $classes = 'field-item ' . ($delta % 2 ? 'odd' : 'even');
    $output .= '<div class="' . $classes . '"' . $variables['item_attributes'][$delta] . '>' . drupal_render($item) . '</div>';
  }
  $output .= '</div>';
  if ($variables['element']['#view_mode'] == 'full') {
    // Render the top-level DIV.
    $output = '<div class="' . $variables['classes'] . '"' . $variables['attributes'] . '><h2>' . $output . '</h2></div>';
  } else {
    $output = '<div class="' . $variables['classes'] . ' lead"' . $variables['attributes'] . '>' . $output . '</div>';
  }
  return $output;
}


/**
 * Implementation of theme_views_view_grouping()
 *
 * @param $variables
 * @return string
 */
function acquia_university_views_view_grouping($variables) {
  $output = '';
  if ($variables['view']->name == 'acquiau_bios') {
    $output .= '<div class="view-grouping panel panel-default">';
    $output .= '<div class="view-grouping-header panel-heading">';
    $output .= '<h3 class="panel-title">' . $variables['title'] . '</h3>';
    $output .= '</div>';
    $output .= '<div class="view-grouping-content panel-body">';
    $output .= $variables['content'];
    $output .= '</div>';
    $output .= '<div class="panel-footer">' . implode(', ', $variables['grouping']) . '</div>';
    $output .= '</div>';
  }

  return $output;
}
