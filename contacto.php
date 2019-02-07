<?php
require_once "clases/funciones.php";

if(isset($_POST["nombre"]) )
{
    $u=new Funciones();
    $u->insertar();
   // header("location:index.php?m+1");
}
?>






<!DOCTYPE html>

<html class="no-js">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        <title>Contacto</title>
        
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="fonts.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>        
        
       
    </head>
  <body background="img/web.jpg">
        
        <div class="container">
        <br>
        <br>
           
           <header>
           <nav class="navbar nabvar-toggle navbar-fixed-top navbar-inverse">
               
               <div class="navbar-header">
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                     <span class="sr-only">Menu</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       
                   </button>
                   <a href="#" class="navbar-brand row"><img src="img/img6.jpg" width="70%" height="100%" width="auto" height="auto" ></a>
                   </div>
               <!-- navegacion---->
               
                   <div class="collapse navbar-collapse navbar-ex1-collapse">
                     <ul class="nav navbar-nav navbar-right"> 
                       <ul class="nav navbar-nav">
                           <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"> </span> Home</a> </li>
                       
                       <li class="dropdown">
                           <a href="#" class=" dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                               <span class="glyphicon glyphicon-bookmark"> </span> Servicios
                               <span class="caret"></span>  
                           </a>
                       <ul class="dropdown-menu nav navbar-nav navbar-right navbar-inverse" aria-labelledby="dropdownMenu1">
                           
                               <li><a href="mantenimientopc.php"><span class="icon-display"> </span> MANTENIMIENTOS PC      </a></li>
                               <li><a href="cableadoestructurado.php"><span class="icon-sphere"> </span> CABLEADO ESTRUCTURADO  </a></li>
                               <li><a href="instalacion_camaras_ip.php"><span class="glyphicon glyphicon-facetime-video"> </span> INSTALACION DE CAMARAS IP</a></li>
                              <li><a href="diseno_web.php"><span class="icon-html-five"> </span> DISEÑO Y DESARROLLO WEB  </a></li>
                           
                              </ul>
                       </li>
                       <li class="dropdown">
                           <a href="" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">
                               <span class="glyphicon glyphicon-education"> </span> Cursos <span class="caret"></span></a> 
                       
                           <ul class="dropdown-menu nav navbar-nav navbar-right navbar-inverse" aria-labelledby="dropdownMenu1">
                          
                               <li><a href="#">Instalaci&oacute;n C&aacute;maras IP</a></li>
                               <li><a href="#">Programaci&oacute;n en Php</a></li>
                                    
                           </ul>
                           
                           </li>
                       <li class=""><a href=""><span class="glyphicon glyphicon-compressed"> </span> Blog</a> </li>
                       <li class=""><a href="contacto.php"><span class="glyphicon glyphicon-book"> </span> Contacto</a> </li>
                       <li class=""><a href="login.php"><span class="icon icon-key"> Login</span></a> </li>
                       </ul>
                       
                       <form action="" class="navbar-form navbar-left" role="search">
                       <div class=" form-group">
                           <input type="text" class="form-control" placeholder="Buscar">
                           
                          
                           <button type="submit" class="btn btn-default"> <span class="glyphicon glyphicon-search">Buscar</span></button>
                        </div>
                       </form>
                       
                       </ul>
                       
                   </div>
              
               </nav>
           </header>
        <br>
           
        </div> 
        
        
            <div class="container">
                <div class="panel-heading">
               <h3 class="panel-title color3">CONTACTENOS</h3>
            </div>
                
             <div class="table-responsive">
      
            <table class=" table">
  
       <thead>
               
        <form  method="post" action="contacto.php">
              <div class="comment-form">
                
                 <button type="button" class="close" data-dismiss="alert">x</button>
                 <p>
                     <label for="nombre" class="color3">Nombre:</label>
                        <input type="text" name="nombre"  class="form-control" placeholder="Nombre" autofocus="true" class="form-control" required="true" />
                    </p>
       

              <p>
                  <label for="email" class="color3">E-Mail:</label>
                        <input type="text" name="email" class="form-control" placeholder="E-Mail" class="form-control" required="true" />
                    </p>
             
            
              <div class="comment-form">
                  <label for="pais" class="color3">País</label>
             <select name="pais" class="form-control">
                <option value="0"<?php echo set_value_select(array(),'pais','pais','0') ?>>Seleccione.....</option>
                
                                        <option value="1" <?php echo set_value_select(array(),'pais','pais','1') ?>>Afganistán</option>
                                        <option value="2" <?php echo set_value_select(array(),'pais','pais','2') ?>>Islas Gland</option>
                                        <option value="3" <?php echo set_value_select(array(),'pais','pais','3') ?>>Albania</option>
                                        <option value="4" <?php echo set_value_select(array(),'pais','pais','4') ?>>Alemania</option>
                                        <option value="5" <?php echo set_value_select(array(),'pais','pais','5') ?>>Andorra</option>
                                        <option value="6" <?php echo set_value_select(array(),'pais','pais','6') ?>>Angola</option>
                                        <option value="7" <?php echo set_value_select(array(),'pais','pais','7') ?>>Anguilla</option>
                                        <option value="8" <?php echo set_value_select(array(),'pais','pais','8') ?>>Antártida</option>
                                        <option value="9" <?php echo set_value_select(array(),'pais','pais','9') ?>>Antigua y Barbuda</option>
                                        <option value="10" <?php echo set_value_select(array(),'pais','pais','10') ?>>Antillas Holandesas</option>
                                        <option value="11" <?php echo set_value_select(array(),'pais','pais','11') ?>>Arabia Saudí</option>
                                        <option value="12" <?php echo set_value_select(array(),'pais','pais','12') ?>>Argelia</option>
                                        <option value="13" <?php echo set_value_select(array(),'pais','pais','13') ?>>Argentina</option>
                                        <option value="14" <?php echo set_value_select(array(),'pais','pais','14') ?>>Armenia</option>
                                        <option value="15" <?php echo set_value_select(array(),'pais','pais','15') ?>>Aruba</option>
                                        <option value="16" <?php echo set_value_select(array(),'pais','pais','16') ?>>Australia</option>
                                        <option value="17" <?php echo set_value_select(array(),'pais','pais','17') ?>>Austria</option>
                                        <option value="18" <?php echo set_value_select(array(),'pais','pais','18') ?>>Azerbaiyán</option>
                                        <option value="19" <?php echo set_value_select(array(),'pais','pais','19') ?>>Bahamas</option>
                                        <option value="20" <?php echo set_value_select(array(),'pais','pais','20') ?>>Bahréin</option>
                                        <option value="21" <?php echo set_value_select(array(),'pais','pais','21') ?>>Bangladesh</option>
                                        <option value="22" <?php echo set_value_select(array(),'pais','pais','22') ?>>Barbados</option>
                                        <option value="23" <?php echo set_value_select(array(),'pais','pais','23') ?>>Bielorrusia</option>
                                        <option value="24" <?php echo set_value_select(array(),'pais','pais','24') ?>>Bélgica</option>
                                        <option value="25" <?php echo set_value_select(array(),'pais','pais','25') ?>>Belice</option>
                                        <option value="26" <?php echo set_value_select(array(),'pais','pais','26') ?>>Benin</option>
                                        <option value="27" <?php echo set_value_select(array(),'pais','pais','27') ?>>Bermudas</option>
                                        <option value="28" <?php echo set_value_select(array(),'pais','pais','28') ?>>Bhután</option>
                                        <option value="29" <?php echo set_value_select(array(),'pais','pais','29') ?>>Bolivia</option>
                                        <option value="30" <?php echo set_value_select(array(),'pais','pais','30') ?>>Bosnia y Herzegovina</option>
                                        <option value="31" <?php echo set_value_select(array(),'pais','pais','31') ?>>Botsuana</option>
                                        <option value="32" <?php echo set_value_select(array(),'pais','pais','32') ?>>Isla Bouvet</option>
                                        <option value="33" <?php echo set_value_select(array(),'pais','pais','33') ?>>Brasil</option>
                                        <option value="34" <?php echo set_value_select(array(),'pais','pais','34') ?>>Brunéi</option>
                                        <option value="35" <?php echo set_value_select(array(),'pais','pais','35') ?>>Bulgaria</option>
                                        <option value="36" <?php echo set_value_select(array(),'pais','pais','36') ?>>Burkina Faso</option>
                                        <option value="37" <?php echo set_value_select(array(),'pais','pais','37') ?>>Burundi</option>
                                        <option value="38" <?php echo set_value_select(array(),'pais','pais','38') ?>>Cabo Verde</option>
                                        <option value="39" <?php echo set_value_select(array(),'pais','pais','39') ?>>Islas Caimán</option>
                                        <option value="40" <?php echo set_value_select(array(),'pais','pais','40') ?>>Camboya</option>
                                        <option value="41" <?php echo set_value_select(array(),'pais','pais','41') ?>>Camerún</option>
                                        <option value="42" <?php echo set_value_select(array(),'pais','pais','42') ?>>Canadá</option>
                                        <option value="43" <?php echo set_value_select(array(),'pais','pais','43') ?>>República Centroafricana</option>
                                        <option value="44" <?php echo set_value_select(array(),'pais','pais','44') ?>>Chad</option>
                                        <option value="45" <?php echo set_value_select(array(),'pais','pais','45') ?>>República Checa</option>
                                        <option value="46" <?php echo set_value_select(array(),'pais','pais','46') ?>>Chile</option>
                                        <option value="47" <?php echo set_value_select(array(),'pais','pais','47') ?>>China</option>
                                        <option value="48" <?php echo set_value_select(array(),'pais','pais','48') ?>>Chipre</option>
                                        <option value="49" <?php echo set_value_select(array(),'pais','pais','49') ?>>Isla de Navidad</option>
                                        <option value="50" <?php echo set_value_select(array(),'pais','pais','50') ?>>Ciudad del Vaticano</option>
                                        <option value="51" <?php echo set_value_select(array(),'pais','pais','51') ?>>Islas Cocos</option>
                                        <option value="52" <?php echo set_value_select(array(),'pais','pais','52') ?>>Colombia</option>
                                        <option value="53" <?php echo set_value_select(array(),'pais','pais','53') ?>>Comoras</option>
                                        <option value="54" <?php echo set_value_select(array(),'pais','pais','54') ?>>República Democrática del Congo</option>
                                        <option value="55" <?php echo set_value_select(array(),'pais','pais','55') ?>>Congo</option>
                                        <option value="56" <?php echo set_value_select(array(),'pais','pais','56') ?>>Islas Cook</option>
                                        <option value="57" <?php echo set_value_select(array(),'pais','pais','57') ?>>Corea del Norte</option>
                                        <option value="58" <?php echo set_value_select(array(),'pais','pais','58') ?>>Corea del Sur</option>
                                        <option value="59" <?php echo set_value_select(array(),'pais','pais','59') ?>>Costa de Marfil</option>
                                        <option value="60" <?php echo set_value_select(array(),'pais','pais','60') ?>>Costa Rica</option>
                                        <option value="61" <?php echo set_value_select(array(),'pais','pais','61') ?>>Croacia</option>
                                        <option value="62" <?php echo set_value_select(array(),'pais','pais','62') ?>>Cuba</option>
                                        <option value="63" <?php echo set_value_select(array(),'pais','pais','63') ?>>Dinamarca</option>
                                        <option value="64" <?php echo set_value_select(array(),'pais','pais','64') ?>>Dominica</option>
                                        <option value="65" <?php echo set_value_select(array(),'pais','pais','65') ?>>República Dominicana</option>
                                        <option value="66" <?php echo set_value_select(array(),'pais','pais','66') ?>>Ecuador</option>
                                        <option value="67" <?php echo set_value_select(array(),'pais','pais','67') ?>>Egipto</option>
                                        <option value="68" <?php echo set_value_select(array(),'pais','pais','68') ?>>El Salvador</option>
                                        <option value="69" <?php echo set_value_select(array(),'pais','pais','69') ?>>Emiratos Árabes Unidos</option>
                                        <option value="70" <?php echo set_value_select(array(),'pais','pais','70') ?>>Eritrea</option>
                                        <option value="71" <?php echo set_value_select(array(),'pais','pais','71') ?>>Eslovaquia</option>
                                        <option value="72" <?php echo set_value_select(array(),'pais','pais','72') ?>>Eslovenia</option>
                                        <option value="73" <?php echo set_value_select(array(),'pais','pais','73') ?>>España</option>
                                        <option value="74" <?php echo set_value_select(array(),'pais','pais','74') ?>>Islas ultramarinas de Estados Unidos</option>
                                        <option value="75" <?php echo set_value_select(array(),'pais','pais','75') ?>>Estados Unidos</option>
                                        <option value="76" <?php echo set_value_select(array(),'pais','pais','76') ?>>Estonia</option>
                                        <option value="77" <?php echo set_value_select(array(),'pais','pais','77') ?>>Etiopía</option>
                                        <option value="78" <?php echo set_value_select(array(),'pais','pais','78') ?>>Islas Feroe</option>
                                        <option value="79" <?php echo set_value_select(array(),'pais','pais','79') ?>>Filipinas</option>
                                        <option value="80" <?php echo set_value_select(array(),'pais','pais','80') ?>>Finlandia</option>
                                        <option value="81" <?php echo set_value_select(array(),'pais','pais','81') ?>>Fiyi</option>
                                        <option value="82" <?php echo set_value_select(array(),'pais','pais','82') ?>>Francia</option>
                                        <option value="83" <?php echo set_value_select(array(),'pais','pais','83') ?>>Gabón</option>
                                        <option value="84" <?php echo set_value_select(array(),'pais','pais','84') ?>>Gambia</option>
                                        <option value="85" <?php echo set_value_select(array(),'pais','pais','85') ?>>Georgia</option>
                                        <option value="86" <?php echo set_value_select(array(),'pais','pais','86') ?>>Islas Georgias del Sur y Sandwich del Sur</option>
                                        <option value="87" <?php echo set_value_select(array(),'pais','pais','87') ?>>Ghana</option>
                                        <option value="88" <?php echo set_value_select(array(),'pais','pais','88') ?>>Gibraltar</option>
                                        <option value="89" <?php echo set_value_select(array(),'pais','pais','89') ?>>Granada</option>
                                        <option value="90" <?php echo set_value_select(array(),'pais','pais','90') ?>>Grecia</option>
                                        <option value="91" <?php echo set_value_select(array(),'pais','pais','91') ?>>Groenlandia</option>
                                        <option value="92" <?php echo set_value_select(array(),'pais','pais','92') ?>>Guadalupe</option>
                                        <option value="93" <?php echo set_value_select(array(),'pais','pais','93') ?>>Guam</option>
                                        <option value="94" <?php echo set_value_select(array(),'pais','pais','94') ?>>Guatemala</option>
                                        <option value="95" <?php echo set_value_select(array(),'pais','pais','95') ?>>Guayana Francesa</option>
                                        <option value="96" <?php echo set_value_select(array(),'pais','pais','96') ?>>Guinea</option>
                                        <option value="97" <?php echo set_value_select(array(),'pais','pais','97') ?>>Guinea Ecuatorial</option>
                                        <option value="98" <?php echo set_value_select(array(),'pais','pais','98') ?>>Guinea-Bissau</option>
                                        <option value="99" <?php echo set_value_select(array(),'pais','pais','99') ?>>Guyana</option>
                                        <option value="100" <?php echo set_value_select(array(),'pais','pais','100') ?>>Haití</option>
                                        <option value="101" <?php echo set_value_select(array(),'pais','pais','101') ?>>Islas Heard y McDonald</option>
                                        <option value="102" <?php echo set_value_select(array(),'pais','pais','102') ?>>Honduras</option>
                                        <option value="103" <?php echo set_value_select(array(),'pais','pais','103') ?>>Hong Kong</option>
                                        <option value="104" <?php echo set_value_select(array(),'pais','pais','104') ?>>Hungría</option>
                                        <option value="105" <?php echo set_value_select(array(),'pais','pais','105') ?>>India</option>
                                        <option value="106" <?php echo set_value_select(array(),'pais','pais','106') ?>>Indonesia</option>
                                        <option value="107" <?php echo set_value_select(array(),'pais','pais','107') ?>>Irán</option>
                                        <option value="108" <?php echo set_value_select(array(),'pais','pais','108') ?>>Iraq</option>
                                        <option value="109" <?php echo set_value_select(array(),'pais','pais','109') ?>>Irlanda</option>
                                        <option value="110" <?php echo set_value_select(array(),'pais','pais','110') ?>>Islandia</option>
                                        <option value="111" <?php echo set_value_select(array(),'pais','pais','111') ?>>Israel</option>
                                        <option value="112" <?php echo set_value_select(array(),'pais','pais','112') ?>>Italia</option>
                                        <option value="113" <?php echo set_value_select(array(),'pais','pais','113') ?>>Jamaica</option>
                                        <option value="114" <?php echo set_value_select(array(),'pais','pais','114') ?>>Japón</option>
                                        <option value="115" <?php echo set_value_select(array(),'pais','pais','115') ?>>Jordania</option>
                                        <option value="116" <?php echo set_value_select(array(),'pais','pais','116') ?>>Kazajstán</option>
                                        <option value="117" <?php echo set_value_select(array(),'pais','pais','117') ?>>Kenia</option>
                                        <option value="118" <?php echo set_value_select(array(),'pais','pais','118') ?>>Kirguistán</option>
                                        <option value="119" <?php echo set_value_select(array(),'pais','pais','119') ?>>Kiribati</option>
                                        <option value="120" <?php echo set_value_select(array(),'pais','pais','120') ?>>Kuwait</option>
                                        <option value="121" <?php echo set_value_select(array(),'pais','pais','121') ?>>Laos</option>
                                        <option value="122" <?php echo set_value_select(array(),'pais','pais','122') ?>>Lesotho</option>
                                        <option value="123" <?php echo set_value_select(array(),'pais','pais','123') ?>>Letonia</option>
                                        <option value="124" <?php echo set_value_select(array(),'pais','pais','124') ?>>Líbano</option>
                                        <option value="125" <?php echo set_value_select(array(),'pais','pais','125') ?>>Liberia</option>
                                        <option value="126" <?php echo set_value_select(array(),'pais','pais','126') ?>>Libia</option>
                                        <option value="127" <?php echo set_value_select(array(),'pais','pais','127') ?>>Liechtenstein</option>
                                        <option value="128" <?php echo set_value_select(array(),'pais','pais','128') ?>>Lituania</option>
                                        <option value="129" <?php echo set_value_select(array(),'pais','pais','129') ?>>Luxemburgo</option>
                                        <option value="130" <?php echo set_value_select(array(),'pais','pais','130') ?>>Macao</option>
                                        <option value="131" <?php echo set_value_select(array(),'pais','pais','131') ?>>ARY Macedonia</option>
                                        <option value="132" <?php echo set_value_select(array(),'pais','pais','132') ?>>Madagascar</option>
                                        <option value="133" <?php echo set_value_select(array(),'pais','pais','133') ?>>Malasia</option>
                                        <option value="134" <?php echo set_value_select(array(),'pais','pais','134') ?>>Malawi</option>
                                        <option value="135" <?php echo set_value_select(array(),'pais','pais','135') ?>>Maldivas</option>
                                        <option value="136" <?php echo set_value_select(array(),'pais','pais','136') ?>>Malí</option>
                                        <option value="137" <?php echo set_value_select(array(),'pais','pais','137') ?>>Malta</option>
                                        <option value="138" <?php echo set_value_select(array(),'pais','pais','138') ?>>Islas Malvinas</option>
                                        <option value="139" <?php echo set_value_select(array(),'pais','pais','139') ?>>Islas Marianas del Norte</option>
                                        <option value="140" <?php echo set_value_select(array(),'pais','pais','140') ?>>Marruecos</option>
                                        <option value="141" <?php echo set_value_select(array(),'pais','pais','141') ?>>Islas Marshall</option>
                                        <option value="142" <?php echo set_value_select(array(),'pais','pais','142') ?>>Martinica</option>
                                        <option value="143" <?php echo set_value_select(array(),'pais','pais','143') ?>>Mauricio</option>
                                        <option value="144" <?php echo set_value_select(array(),'pais','pais','144') ?>>Mauritania</option>
                                        <option value="145" <?php echo set_value_select(array(),'pais','pais','145') ?>>Mayotte</option>
                                        <option value="146" <?php echo set_value_select(array(),'pais','pais','146') ?>>México</option>
                                        <option value="147" <?php echo set_value_select(array(),'pais','pais','147') ?>>Micronesia</option>
                                        <option value="148" <?php echo set_value_select(array(),'pais','pais','148') ?>>Moldavia</option>
                                        <option value="149" <?php echo set_value_select(array(),'pais','pais','149') ?>>Mónaco</option>
                                        <option value="150" <?php echo set_value_select(array(),'pais','pais','150') ?>>Mongolia</option>
                                        <option value="151" <?php echo set_value_select(array(),'pais','pais','151') ?>>Montserrat</option>
                                        <option value="152" <?php echo set_value_select(array(),'pais','pais','152') ?>>Mozambique</option>
                                        <option value="153" <?php echo set_value_select(array(),'pais','pais','153') ?>>Myanmar</option>
                                        <option value="154" <?php echo set_value_select(array(),'pais','pais','154') ?>>Namibia</option>
                                        <option value="155" <?php echo set_value_select(array(),'pais','pais','155') ?>>Nauru</option>
                                        <option value="156" <?php echo set_value_select(array(),'pais','pais','156') ?>>Nepal</option>
                                        <option value="157" <?php echo set_value_select(array(),'pais','pais','157') ?>>Nicaragua</option>
                                        <option value="158" <?php echo set_value_select(array(),'pais','pais','158') ?>>Níger</option>
                                        <option value="159" <?php echo set_value_select(array(),'pais','pais','159') ?>>Nigeria</option>
                                        <option value="160" <?php echo set_value_select(array(),'pais','pais','160') ?>>Niue</option>
                                        <option value="161" <?php echo set_value_select(array(),'pais','pais','161') ?>>Isla Norfolk</option>
                                        <option value="162" <?php echo set_value_select(array(),'pais','pais','162') ?>>Noruega</option>
                                        <option value="163" <?php echo set_value_select(array(),'pais','pais','163') ?>>Nueva Caledonia</option>
                                        <option value="164" <?php echo set_value_select(array(),'pais','pais','164') ?>>Nueva Zelanda</option>
                                        <option value="165" <?php echo set_value_select(array(),'pais','pais','165') ?>>Omán</option>
                                        <option value="166" <?php echo set_value_select(array(),'pais','pais','166') ?>>Países Bajos</option>
                                        <option value="167" <?php echo set_value_select(array(),'pais','pais','167') ?>>Pakistán</option>
                                        <option value="168" <?php echo set_value_select(array(),'pais','pais','168') ?>>Palau</option>
                                        <option value="169" <?php echo set_value_select(array(),'pais','pais','169') ?>>Palestina</option>
                                        <option value="170" <?php echo set_value_select(array(),'pais','pais','170') ?>>Panamá</option>
                                        <option value="171" <?php echo set_value_select(array(),'pais','pais','171') ?>>Papúa Nueva Guinea</option>
                                        <option value="172" <?php echo set_value_select(array(),'pais','pais','172') ?>>Paraguay</option>
                                        <option value="173" <?php echo set_value_select(array(),'pais','pais','173') ?>>Perú</option>
                                        <option value="174" <?php echo set_value_select(array(),'pais','pais','174') ?>>Islas Pitcairn</option>
                                        <option value="175" <?php echo set_value_select(array(),'pais','pais','175') ?>>Polinesia Francesa</option>
                                        <option value="176" <?php echo set_value_select(array(),'pais','pais','176') ?>>Polonia</option>
                                        <option value="177" <?php echo set_value_select(array(),'pais','pais','177') ?>>Portugal</option>
                                        <option value="178" <?php echo set_value_select(array(),'pais','pais','178') ?>>Puerto Rico</option>
                                        <option value="179" <?php echo set_value_select(array(),'pais','pais','179') ?>>Qatar</option>
                                        <option value="180" <?php echo set_value_select(array(),'pais','pais','180') ?>>Reino Unido</option>
                                        <option value="181" <?php echo set_value_select(array(),'pais','pais','181') ?>>Reunión</option>
                                        <option value="182" <?php echo set_value_select(array(),'pais','pais','182') ?>>Ruanda</option>
                                        <option value="183" <?php echo set_value_select(array(),'pais','pais','183') ?>>Rumania</option>
                                        <option value="184" <?php echo set_value_select(array(),'pais','pais','184') ?>>Rusia</option>
                                        <option value="185" <?php echo set_value_select(array(),'pais','pais','185') ?>>Sahara Occidental</option>
                                        <option value="186" <?php echo set_value_select(array(),'pais','pais','186') ?>>Islas Salomón</option>
                                        <option value="187" <?php echo set_value_select(array(),'pais','pais','187') ?>>Samoa</option>
                                        <option value="188" <?php echo set_value_select(array(),'pais','pais','188') ?>>Samoa Americana</option>
                                        <option value="189" <?php echo set_value_select(array(),'pais','pais','189') ?>>San Cristóbal y Nevis</option>
                                        <option value="190" <?php echo set_value_select(array(),'pais','pais','190') ?>>San Marino</option>
                                        <option value="191" <?php echo set_value_select(array(),'pais','pais','191') ?>>San Pedro y Miquelón</option>
                                        <option value="192" <?php echo set_value_select(array(),'pais','pais','192') ?>>San Vicente y las Granadinas</option>
                                        <option value="193" <?php echo set_value_select(array(),'pais','pais','193') ?>>Santa Helena</option>
                                        <option value="194" <?php echo set_value_select(array(),'pais','pais','194') ?>>Santa Lucía</option>
                                        <option value="195" <?php echo set_value_select(array(),'pais','pais','195') ?>>Santo Tomé y Príncipe</option>
                                        <option value="196" <?php echo set_value_select(array(),'pais','pais','196') ?>>Senegal</option>
                                        <option value="197" <?php echo set_value_select(array(),'pais','pais','197') ?>>Serbia y Montenegro</option>
                                        <option value="198" <?php echo set_value_select(array(),'pais','pais','198') ?>>Seychelles</option>
                                        <option value="199" <?php echo set_value_select(array(),'pais','pais','199') ?>>Sierra Leona</option>
                                        <option value="200" <?php echo set_value_select(array(),'pais','pais','200') ?>>Singapur</option>
                                        <option value="201" <?php echo set_value_select(array(),'pais','pais','201') ?>>Siria</option>
                                        <option value="202" <?php echo set_value_select(array(),'pais','pais','202') ?>>Somalia</option>
                                        <option value="203" <?php echo set_value_select(array(),'pais','pais','203') ?>>Sri Lanka</option>
                                        <option value="204" <?php echo set_value_select(array(),'pais','pais','204') ?>>Suazilandia</option>
                                        <option value="205" <?php echo set_value_select(array(),'pais','pais','205') ?>>Sudáfrica</option>
                                        <option value="206" <?php echo set_value_select(array(),'pais','pais','206') ?>>Sudán</option>
                                        <option value="207" <?php echo set_value_select(array(),'pais','pais','207') ?>>Suecia</option>
                                        <option value="208" <?php echo set_value_select(array(),'pais','pais','208') ?>>Suiza</option>
                                        <option value="209" <?php echo set_value_select(array(),'pais','pais','209') ?>>Surinam</option>
                                        <option value="210" <?php echo set_value_select(array(),'pais','pais','210') ?>>Svalbard y Jan Mayen</option>
                                        <option value="211" <?php echo set_value_select(array(),'pais','pais','211') ?>>Tailandia</option>
                                        <option value="212" <?php echo set_value_select(array(),'pais','pais','212') ?>>Taiwán</option>
                                        <option value="213" <?php echo set_value_select(array(),'pais','pais','213') ?>>Tanzania</option>
                                        <option value="214" <?php echo set_value_select(array(),'pais','pais','214') ?>>Tayikistán</option>
                                        <option value="215" <?php echo set_value_select(array(),'pais','pais','215') ?>>Territorio Británico del Océano Índico</option>
                                        <option value="216" <?php echo set_value_select(array(),'pais','pais','216') ?>>Territorios Australes Franceses</option>
                                        <option value="217" <?php echo set_value_select(array(),'pais','pais','217') ?>>Timor Oriental</option>
                                        <option value="218" <?php echo set_value_select(array(),'pais','pais','218') ?>>Togo</option>
                                        <option value="219" <?php echo set_value_select(array(),'pais','pais','219') ?>>Tokelau</option>
                                        <option value="220" <?php echo set_value_select(array(),'pais','pais','220') ?>>Tonga</option>
                                        <option value="221" <?php echo set_value_select(array(),'pais','pais','221') ?>>Trinidad y Tobago</option>
                                        <option value="222" <?php echo set_value_select(array(),'pais','pais','222') ?>>Túnez</option>
                                        <option value="223" <?php echo set_value_select(array(),'pais','pais','223') ?>>Islas Turcas y Caicos</option>
                                        <option value="224" <?php echo set_value_select(array(),'pais','pais','224') ?>>Turkmenistán</option>
                                        <option value="225"<?php echo set_value_select(array(),'pais','pais','225') ?>>Turquía</option>
                                        <option value="226" <?php echo set_value_select(array(),'pais','pais','226') ?>>Tuvalu</option>
                                        <option value="227" <?php echo set_value_select(array(),'pais','pais','227') ?>>Ucrania</option>
                                        <option value="228" <?php echo set_value_select(array(),'pais','pais','228') ?>>Uganda</option>
                                        <option value="229" <?php echo set_value_select(array(),'pais','pais','229') ?>>Uruguay</option>
                                        <option value="230" <?php echo set_value_select(array(),'pais','pais','230') ?>>Uzbekistán</option>
                                        <option value="231" <?php echo set_value_select(array(),'pais','pais','231') ?>>Vanuatu</option>
                                        <option value="232" <?php echo set_value_select(array(),'pais','pais','232') ?>>Venezuela</option>
                                        <option value="233" <?php echo set_value_select(array(),'pais','pais','233') ?>>Vietnam</option>
                                        <option value="234" <?php echo set_value_select(array(),'pais','pais','234') ?>>Islas Vírgenes Británicas</option>
                                        <option value="235" <?php echo set_value_select(array(),'pais','pais','235') ?>>Islas Vírgenes de los Estados Unidos</option>
                                        <option value="236" <?php echo set_value_select(array(),'pais','pais','236') ?>>Wallis y Futuna</option>
                                        <option value="237" <?php echo set_value_select(array(),'pais','pais','237') ?>>Yemen</option>
                                        <option value="238" <?php echo set_value_select(array(),'pais','pais','238') ?>>Yibuti</option>
                                        <option value="239" <?php echo set_value_select(array(),'pais','pais','239') ?>>Zambia</option>
                                        <option value="240" <?php echo set_value_select(array(),'pais','pais','240') ?>>Zimbabue</option>
                                </select>
               <div class="help-block"></div>
               </div>

           <div class="comment-form">
             <label class="control-label color3" for="ciudad" >Ciudad</label>
             <input type="text" id="comment-city" class="form-control" name="ciudad" maxlength="100" value="" placeholder="Ciudad" />
             <div class="help-block"></div>
         </div>
           
                       <p>
                           <label for="telefono" class="color3">Teléfono:</label>
                        <input type="text" name="telefono" maxlength="10" placeholder="Teléfono" class="form-control" required="true" />
                      </p>     


                      <p>
                          <label for="asunto" class="color3">Asunto:</label>
                        <input type="text" name="asunto" placeholder="Asunto" class="form-control" required="true" />
                     </p>
              
                   <p>
              <label class="control-label color3" for="mensaje">Mensaje</label>
              <textarea id="comment-mensaje" class="form-control" required="true" name="mensaje" rows="6" placeholder="mensaje"></textarea>
                   </p>
 
          <div class="form-group">
              <button type="submit" class="btn btn-success"  title="Enviar">Enviar <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></button>   
          </div>
          
           </form>   
          </thead>    
        </table>
       </div>
      </div>
          
                 <section class="color2 ">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                        <h3 class="color3">Servicios</h3>
                        <a href="#">Diseño Web</a><br>
                        <a href="#">Lenguajes de Programaci&oacute;n</a><br>
                        <a href="#">Instalaci&oacute;n de C&aacute;maras Ip</a><br>
                        <a href="#">Mantenimientos de Pc </a><br>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                        <h3 class="color3">Direcci&oacute;n y Oficinas</h3>
                        <a href="#"> Caluma-Ecuador</a>
                        <br ><a href="#">  Av. La Naranga- via a Guaranda</a>
                        <br ><a href="#"> Babahoyo-Ecuador</a>
                        <br ><a href="#">  General Barona y Barreiro</a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                        <h3 class="color3">Horarios de atenci&oacute;n</h3>
                        <a href="#"> Lunes a S&aacute;bado</a>
                        <br ><a href="#">  9:00AM a 18:00PM</a>
                        <br ><a href="#"> <span class="icon-phone"></span> Telf: 0996397739</a>
                        <br ><a href="#"> <span class="icon-phone"></span> Telf:052733841 Cel:0990640528</a>
                        
                    </div>
                    
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                        <h3 class="color3">Siguenos en:</h3>
                        
			<p>
                            
                               <a href=" https://www.facebook.com/solucionesinformaticos/" title="Síguenos en Facebook" target="_blank">
                                <span class="icon-facebook2"></span>
                            </a>
                        </p>
                        	<p>
                                    
                            <a href="https://twitter.com/Loveforgive88 " title="Síguenos en Twitter" target="_blank">
                                <span class="icon-twitter"></span>
                            </a>
                        </p>
                        	<p>
                                   
                            <a href="https://github.com/mauricioagua " title="Síguenos en GitHub" target="_blank">
                                <span class="icon-mark-github"></span>
                            </a>
                        </p>
                        	<p>
                                   
                            <a href="https://www.youtube.com/channel/UC80j51jYB0SPJpkg-FWL7Bg" title="Visita Nuestro Canal en Youtube" target="_blank">
                                <i class="icon-youtube2"></i>
                            </a>
                        </p>
		                          
                    </div>
                    
                </div>
            </div>
            <br>
            <br>
        </section>
       <footer class="color4">
            <div class="container"><br>
                <p>Derechos reservados &copy;2016 Soluciones Inf&oacute;rmaticas //Desarrollado por Mauricio Agua Ar&eacute;valo</p>
                </br></div>
        </footer>
         

  </body>
   <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.js"></script>
        <script src="js/main.js"></script>
</html>
