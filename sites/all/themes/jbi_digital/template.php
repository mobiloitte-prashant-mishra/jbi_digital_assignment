<?php

/**
 * @file
 * The primary PHP file for this theme.
 */

function jbi_digital_preprocess_page(&$vars, $hook) {
    if (isset($vars['node']->type)) {
        $vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;
    }
}