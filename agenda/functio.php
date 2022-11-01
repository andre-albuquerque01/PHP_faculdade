<?php

function conect()
{
    session_start();
    if (isset($_SESSION['usuario'])) {
        $a[] = $_SESSION['usuario'];
        $a[] = $_SESSION['ts_login'];
        return $a;
    } else {
        return null;
    }
}

function welcome($user)
{
    date_default_timezone_set('America/Sao_Paulo');
    echo "Olá! " . $user[0] . ". Seu login foi feito as " . date("d-m-Y H:i:s", $user[1]);
}
