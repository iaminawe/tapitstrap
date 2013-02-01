<?php

/**
 * @file
 * Provides preprocess logic and other functionality for theming.
 */


/**
 * Implements hook_preprocess_html().
 */
function tapitstrap_preprocess_html(&$variables) {
  if($GLOBALS['user']->uid == 1) {
    $variables['classes_array'][] = 'admin';
  }
}