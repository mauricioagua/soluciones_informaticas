<?php
require_once ("conexion.php");

class Funciones extends Conexion
{
    private $db;
    public function __construct() {
        $this->db=  parent::conexion();
        parent::setNames();
    }
    public function getDatos() {
        $sql="select"
                . "id,nombre,email,pais,ciudad,telefono,asunto,mensaje"
                . "from"
                . "contacto;";
        $datos=  $this->db->query($sql);
        $arreglo=array();
        while ($reg=$datos->fetch_object())
        {
            $arreglo[]=$reg;
        }
        return $arreglo;
    }
    
    
    public function getDatosPorId($id)
    {
        $sql="
            select
            id,nombre,email,pais,ciudad,telefono,asunto,mensaje
            from
            contacto
            where
            id='".$id."'
            ";
       $datos= $this->db->query($sql);
       $arreglo=array();
       while($reg=$datos->fetch_object())
       {
            $arreglo[]=$reg;
       }  
       return $arreglo;   
    }
    
    public function insertar()
    {
        $sql= " INSERT INTO contacto(id,nombre,email,pais,ciudad,telefono,asunto,mensaje)"
                . " VALUES"
                . "(null,'".$_POST["nombre"]."','".$_POST["email"]."','".$_POST["pais"]."','".$_POST["ciudad"]."','".$_POST["telefono"]."','".$_POST["asunto"]."','".$_POST["mensaje"]."');
        ";
        //$this->db->query($sql);
        $result=$this->db->query($sql);  
           if($result){ //Si resultado es true, se agregó correctamente
                    echo'<script type="text/javascript">
                        alert("Mensaje Enviado");
                        window.location="http://localhost/soluciones_informaticas/contacto.php"
                                              </script>';
        
        
    }
    
    } 
}

function set_value_input($result=array(),$post,$campo)
     {
        if(sizeof($result)==0)
                {
                    if(isset($_POST[$post]))
                    {
                         return $_POST[$post];   
                    }else
                    {
                        return '';
                    }
                }else
                {
                    if($campo)
                    {
                         return $campo;   
                    }else
                    {
                        return '';
                    }
                }
     }
     function set_value_select($result=array(),$post,$campo,$valor)
     {
        if(sizeof($result)==0)
                {
                    if(isset($_POST[$post]) and $_POST[$post]==$valor)
                    {
                         return 'selected="true"';   
                    }else
                    {
                        return '';
                    }
                }else
                {
                    if($campo==$valor)
                    {
                         return 'selected="true"';   
                    }else
                    {
                        return '';
                    }
                }
     }
     function validaSelect($valor)
    {
        if($valor==0)
        {
            return false;
        }else
        {
            return true;
        }    
    }