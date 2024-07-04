<?php

require_once('./Controllers/UsuarioController.php');

function dd($data)
{
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        exit;
}

UsuarioController::index();