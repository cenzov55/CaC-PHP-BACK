<?php
//SINGLETON PARA CONEXION
class Database {
    public static $connection=null;

    public static function getConexion() {
        if (self::$connection==null) {
            self::$connection = new mysqli("localhost", "id22407367_root", "Root-555", "id22407367_final_db");
            if (self::$connection->connect_error) {
            throw new Exception("Error al conectar a la base de datos: " . self::$connection->connect_error);
        }
        }
        return self::$connection;
    }

    public static function cerrarConexion() {
        self::$connection->close();
    }

}