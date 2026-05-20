<?php
if (function_exists('opcache_reset')) {
    opcache_reset();
    echo 'OPcache limpo com sucesso.';
} else {
    echo 'OPcache nao esta ativo ou nao disponivel.';
}
