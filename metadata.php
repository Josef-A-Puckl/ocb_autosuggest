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
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id'            => 'ocb_autosuggest',
    'title'         => 'OXID Cookbook :: Autosuggestion',
    'description'   => 'Add a autosuggestion to your search.',
    'thumbnail'     => 'cookbook.jpg',
    'version'       => '2.0.0',
    'author'        => 'Joscha Krug, <a href="https://ecomstyle.de" target="_blank" title="eComStyle.de"><span style="font-weight:bold;color: #4169E1">Josef A. Puckl</span></a>',
    'url'           => 'http://www.oxid-kochbuch.de',
    'email'         => 'krug@marmalade.de',
    'extend' => [
    ],
    'controllers' => [
        'ocb_autosuggest' => \OxidCommunity\OcbAutoSuggest\Controller\OcbAutoSuggest::class
    ],
    'blocks' => [
        [
            'template' => 'layout/page.tpl', 'block' => 'layout_header', 'file' => '/views/blocks/autosuggest.tpl'
        ],
    ],
];
