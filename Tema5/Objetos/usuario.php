<?php
    class Usuario{
        public string $usuario;
        public string $nombre;
        public string $apellidos;
        public string $fecha_nacimiento;

        function __construct($usuario, $nombre, $apellidos, $fecha_nacimiento){
            $this->usuario = $usuario;
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->fecha_nacimiento = $fecha_nacimiento;

        }
    }
?>