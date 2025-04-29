<?php
header('Content-Type: application/json');
require('_app/Config.inc.php');

$lerbanco->ExeRead('ws_empresa', "WHERE user_id = :user", "user={$getu}");
if ($lerbanco->getResult()) {
    extract($lerbanco->getResult()[0]);
}

$manifest = [
    'name' => !empty($nome_empresa) ? $nome_empresa : 'Cardápio Digital',
    'short_name' => !empty($nome_empresa) ? $nome_empresa : 'Cardápio',
    'description' => !empty($descricao_empresa) ? $descricao_empresa : 'Cardápio Digital PWA',
    'start_url' => './',
    'display' => 'standalone',
    'background_color' => '#ffffff',
    'theme_color' => '#34AF23',
    'orientation' => 'portrait',
    'icons' => [
        [
            'src' => !empty($img_logo) ? 'uploads/' . $img_logo : 'img/favicon.png',
            'sizes' => '192x192',
            'type' => 'image/png',
            'purpose' => 'any maskable'
        ],
        [
            'src' => !empty($img_logo) ? 'uploads/' . $img_logo : 'img/favicon.png', 
            'sizes' => '512x512',
            'type' => 'image/png',
            'purpose' => 'any maskable'
        ]
    ],
    'prefer_related_applications' => false,
    'shortcuts' => [
        [
            'name' => 'Cardápio',
            'url' => './'
        ],
        [
            'name' => 'Carrinho', 
            'url' => './carrinho'
        ]
    ]
];

echo json_encode($manifest, JSON_PRETTY_PRINT);