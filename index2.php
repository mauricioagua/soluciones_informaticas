
<?php
require_once ("clases/registrar.php");
if(!isset($_SESSION["id"]))
{
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8"/>
        <title>
         Sistema de Control De Acceso
        </title>

         <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="fonts.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>        
    </head>



    <body>


        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        
        
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
                           <li class="active"><a href=""><span class="glyphicon glyphicon-home"> </span> Home</a> </li>
                       
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
            <div class="row text-right">
                <p>Bienvenido <?php                    echo $_SESSION["nombre"];?></p>
                <p><a href="salir.php">Salir</a></p>
                  
                <div class="item active">

                        <img src="img/hackwhite.jpg" class="adaptar" width="100" height="450">
                        <br>
                        <h2><p align="center">Bienvenido al mundo Hacking Ethical</p></h2>
                    </div>
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
    
</html>
