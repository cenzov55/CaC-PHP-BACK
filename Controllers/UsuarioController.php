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

    public static function getUsuarios(){
        try {
            $usuarios = Usuario::getAll();
            return json_encode($usuarios);
        } catch (\Throwable $th) {
            return json_encode(['mensaje'=>"Error al buscar Usuarios: ".$th->getMessage()]);
        }finally{
            Database::cerrarConexion();
        }
    }

}