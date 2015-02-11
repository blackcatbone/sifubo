<?php
/**
 * @file
 * theme.inc
 *
 * Contains various theme_function() overrides.
 */

/**
 * Implements theme_bootstrap_search_form_wrapper().
 *
 * Swap the "Search" button text with a search icon.
 */
function acquia_training_bootstrap_search_form_wrapper($variables) {
  $output = '<div class="input-group">';
  $output .= $variables['element']['#children'];
  $output .= '<span class="input-group-btn">';
  $output .= '<button type="submit" class="btn btn-default">';
  $output .= '<i class="glyphicon glyphicon-search" title="' . t('Search') . '"></i>';
  $output .= '</button>';
  $output .= '</span>';
  $output .= '</div>';

  return $output;
}

