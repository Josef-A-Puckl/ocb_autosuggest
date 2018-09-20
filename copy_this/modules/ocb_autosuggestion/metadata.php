<?php

/**
 * This file is part of a OXID Cookbook project
 *
 * Version:    1.0
 * Author:     Joscha Krug <krug@marmalade.de>
 * Author URI: http://oxid-kochbuch.de
 */

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'ocb_autosuggestion',
    'title'        => 'OXID Cookbook :: Autosuggestion',
    'thumbnail'    => 'cookbook.jpg',
    'version'      => '1.4.0',
    'author'       => 'Joscha Krug, <a href="https://ecomstyle.de" target="_blank" title="eComStyle.de"><span style="font-weight:bold;color: #4169E1">Josef A. Puckl</span></a>',
    'url'          => 'http://www.oxid-kochbuch.de',
    'email'        => 'krug@marmalade.de',
    'extend'       => array(
    ),
    'files'       => array(
        'ocb_autosuggest'   => 'ocb_autosuggestion/controllers/ocb_autosuggest.php',
    ),
    'blocks' => array(
        array( 
            'template'  => 'layout/page.tpl', 'block' => 'layout_header', 'file' => '/views/blocks/autosuggest.tpl'
        ),
    ),
);
