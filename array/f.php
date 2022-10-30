<?php
function buscaTexto($texto, $busca)
{
    $arry = [];
    $arr = array_push($arry, $busca);
    foreach ($arry as $ai) {
        $alo = "<span style='color: #f00;'>$ai</span>";
        $pos = str_replace($ai, $alo, $texto);
        echo "$pos";
    }
}
buscaTexto("O mundo precisa de mais dinheiro", "mundo");