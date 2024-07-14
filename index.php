<?php

require_once('./Controllers/UsuarioController.php');

function dd($data)
{
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        exit;
}
if($_SERVER['REQUEST_METHOD'] == 'GET') UsuarioController::index();

if($_SERVER['REQUEST_METHOD'] == 'POST') UsuarioController::getUsuarios();