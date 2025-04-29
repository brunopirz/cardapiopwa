<?php
// Configuração de Assets
define('ASSETS_VERSION', '1.0.0');
define('CACHE_TIME', 604800); // 1 semana em segundos

// Lista de arquivos CSS para minificação
$cssFiles = [
    'css/base.css',
    'css/custom.css',
    'css/reset.css',
    'css/datepicker.css',
    'css/style-bt-file.css',
    'css/suportewats.css',
    'css/icheck/icheck-material.css'
];

// Lista de arquivos JavaScript para minificação
$jsFiles = [
    'js/jquery-2.2.4.min.js',
    'js/player.js',
    'js/howler.js',
    'js/jquery.gotop.js',
    'js/modalhorarios.js'
];

// Função para gerar URLs versionadas
function asset_url($path) {
    return $path . '?v=' . ASSETS_VERSION;
}

// Configurar headers de cache
header('Cache-Control: public, max-age=' . CACHE_TIME);
header('Expires: ' . gmdate('D, d M Y H:i:s', time() + CACHE_TIME) . ' GMT');