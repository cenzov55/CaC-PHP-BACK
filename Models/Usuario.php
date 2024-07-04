<?php

class Usuario
{
    private $id;
    public $usuario;
    public $nombre;
    public $apellido;
    public $documento;
    public $email;

    public function __construct($id, $usuario, $nombre, $apellido, $documento, $email)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->usuario = $usuario;
        $this->documento = $documento;
        $this->email = $email;
    }

    public static function getAll()
    {
        $connection = Database::getConexion();
        $sql = "SELECT * FROM Usuarios";
        $resultado = $connection->query($sql);
        $usuarios = $resultado->fetch_all(MYSQLI_ASSOC);;
        // dd($usuarios);
        return array_map(fn ($usuario) => new self($usuario['id'], $usuario['usuario'], $usuario['nombre'], $usuario['apellido'], $usuario['documento'], $usuario['email'],), $usuarios);
    }
}
