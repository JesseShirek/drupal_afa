<?php

/**
 * @file
 * Stub file for bootstrap_bootstrap_search_form_wrapper().
 */

/**
 * Returns HTML for the Bootstrap search form wrapper.
 *
 * @param array $variables
 *   An associative array of variables.
 *
 * @return string
 *   The constructed HTML markup.
 *
 * @ingroup theme_functions
 */
function artsafa_bootstrap_bootstrap_search_form_wrapper(array $variables) {
  $output = '<div class="input-group">';
  $output .= $variables['element']['#children'];
  $output .= '<span class="input-group-btn">';
  $output .= '<button type="submit" class="btn btn-primary search-form-input-button" aria-label="search"><i class="fa fa-search" aria-hidden="true"></i></button>';
  $output .= '</span>';
  $output .= '</div>';
  return $output;
}
