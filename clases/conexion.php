<?php
session_start();
abstract class Conexion{
    private $mysqli;
    public function Conexion()
    {
        $this->mysqli=new mysqli('localhost','root','','soluciones_informaticas.net');
        
        return $this->mysqli;
    }
    public function setNames()
    {
        return $this->mysqli->query("SET NAMES 'utf8'");
    }
}
