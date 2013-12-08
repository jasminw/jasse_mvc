<?php
/**
 * Helpers for the template file.
 */
$ja->data['header'] = '<h1>Header: Jasse</h1>';
$ja->data['main']   = '<p>Main: Now with a theme engine, Not much more to report for now.</p>';
$ja->data['footer'] = '<p>Footer: &copy; Jasse  av Jasmin Wikström</p>';


/**
 * Print debuginformation from the framework.
 */
function get_debug() {
    $ja = Cjasse::Instance();
    $html = "<h2>Debuginformation</h2><hr><p>The content of the config array:</p><pre>" . htmlentities(print_r($ja->config, true)) . "</pre>";
    $html .= "<hr><p>The content of the data array:</p><pre>" . htmlentities(print_r($ja->data, true)) . "</pre>";
    $html .= "<hr><p>The content of the request array:</p><pre>" . htmlentities(print_r($ja->request, true)) . "</pre>";
    return $html;
}