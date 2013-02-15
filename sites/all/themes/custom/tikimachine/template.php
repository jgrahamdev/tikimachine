<?php


function tikimachine_preprocess_region(&$variables, $hook) {
  if ($variables['region'] == "sidebar_first") {
    $variables['classes_array'][] = 'clearfix';
  }
}