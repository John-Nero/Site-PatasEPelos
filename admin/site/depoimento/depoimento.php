<?php

//QUANDO USA O GET É PQ TA PROCURANDO O VALOR DESSA VARIAVEL NA URL
$pagina = @$_GET['d'];

if ($pagina == null) {
    require_once('listar.php');
}
if ($pagina == 'ativar') {
    require_once('ativar.php');
}

if ($pagina == 'desativar') {
    require_once('desativar.php');
}