<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
} else {
    unset($_SESSION['usuario']);
    session_destroy();
    header('Location: login.php');
    setcookie("usuario", "", 0);
    setcookie("ts_login", "", 0);
}
