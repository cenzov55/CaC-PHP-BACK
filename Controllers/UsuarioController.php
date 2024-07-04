<?php
require_once('./Models/Usuario.php');
require_once('./Models/Database.php');

class UsuarioController{
    public static function index(){
        try {
            $usuarios = Usuario::getAll();
        } catch (\Throwable $th) {
            $mensajeError = "Error al buscar Usuarios: ".$th->getMessage();
        }finally{
            require_once('./templates/index.php');
            Database::cerrarConexion();
        }
    }
}