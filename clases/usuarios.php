<?php

require_once ("conexion.php");
require_once ("helpers.php");
class Usuarios extends Conexion{
    private $db;
    public function __construct() {
        $this->db=  parent::conexion();
        parent::setNames();
    }
    public function getDatos()
    {
        $sql="slect"
                . " id, nombre,correo,pais,facebook,twitter,blog,pass"
                . "from"
                . "usuarios ;";
        
        $datos=  $this->db->query($sql);
        $arreglo=array();
        while($reg=$datos->fetch_object()){
            $arreglo[]=$reg;
            
        }
        return $arreglo;
    }
    
    
    public function getLogin($correo,$pass)
            {
        $sql="select
                id, nombre,correo, pass
                from
                usuarios
                where
                correo='".$correo."'
                and
                pass='".$pass."';";
                
        $datos=  $this->db->query($sql);
        $arreglo=array();
        while($reg=$datos->fetch_object())
        {
            $arreglo[]=$reg;
            
        }
                
        return $arreglo;    
    }
}