<?php


require_once ("conexion.php");
        
class Registrar extends Conexion
{
    private $db;
    
    public function __construct() {
        $this->db=  parent::conexion();
        parent::setNames();
    }
    public function getDatos() {
        $sql="select"
                . "id,nombre,correo,pais,facebook,twitter,blog,pass"
                . "from"
                . "usuarios;";
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
            id,nombre,correo,pais,facebook,twitter,blog,pass
            from
            usuarios
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
       // $nuevo_correo = "select email from usuarios where email='email'";
        //$valida = $this->db->query($nuevo_correo);
 
        //Como correo es UNIQUE si valida tiene más de un resultado,
        //el correo ya estaba en la base de datos
       // if($valida->num_rows > 0)
       // {
           //   echo'<script type="text/javascript">
             //   alert("Error al registrar! - Correo Duplicado - Ingresa otro");
              //  window.location="http://localhost/soluciones_informaticas/registro.php"
              //  </script>';
        //} else {
          $sql= " INSERT INTO usuarios(id,nombre,correo,pais,facebook,twitter,blog,pass)"
                . " VALUES"
                . "(null,'".$_POST["nombre"]."','".$_POST["correo"]."','".$_POST["pais"]."','".$_POST["facebook"]."','".$_POST["twitter"]."','".$_POST["blog"]."','".  sha1($_POST["pass"])."');
        ";
          $result=$this->db->query($sql);  
           if($result){ //Si resultado es true, se agregó correctamente
                    echo'<script type="text/javascript">
                        alert("Usuario Agregado Exitosamente");
                        window.location="http://localhost/soluciones_informaticas/registro.php"
                                              </script>';
        } else {
            echo'<script type="text/javascript">
                        alert("Correo designado ya existe");
                        window.location="http://localhost/soluciones_informaticas/registro.php"
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
