<?php
require __DIR__.'/../vendor/autoload.php';

$file = realpath(__DIR__.'/../vendor/laravel/framework/src/Illuminate/Support/Number.php');
echo 'Arquivo: ' . $file . '<br>';

$content = file_get_contents($file);
echo strpos($content, 'intl check suprimido') !== false
    ? '<b style="color:green">PATCH APLICADO ✓</b>'
    : '<b style="color:red">PATCH NÃO ENCONTRADO ✗</b>';

echo '<br><br>';
echo 'extension intl: ' . (extension_loaded('intl') ? 'ATIVA' : 'INATIVA');
echo '<br>';
echo 'PHP: ' . phpversion();
echo '<br>';
echo 'php.ini: ' . php_ini_loaded_file();
