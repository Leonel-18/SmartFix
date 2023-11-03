<?php

session_start();


if(!isset($_SESSION['usuario'])){
    echo '
    <script>
    window.location = "login.php";
    </script>
    
    ';
    session_destroy();
    die();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina web</title>
    <link rel="shortcut icon" href="iconopw.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/c63695aaa6.js" crossorigin="anonymous"></script>


</head>

<body>
    <header>
        
        <nav>
        <h1 class="nombre">SmartFix</h1>
        <a href="perfil.php">Mi perfil</a></li> 
        <a href="php/cerrar_session.php">Cerrar Sesión</a>
        </nav>
        <section class="textos-header">
            <h1>El mejor servicio técnico</h1>
            <h2>Con el menor costo</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <main>

        <!-- SECCION SOBRE NOSOTROS-->

        <section class="contenedor sobre-nosotros"></section>
        <h2 class="titulo">Sobre Nosotros</h2>
        <div class="contenedor-sobre-nosotros">
            <img src="Ilustracion1.svg" alt="" clas="imagen-about-us">
            <div class="contenido-textos">
                <h3><span>1</span>SmartFix</h3>
                <p>En SmartFix, nos enorgullece ser tu destino confiable para la reparación de celulares. Con un equipo de expertos dedicados, nos esforzamos por ofrecer soluciones de alta calidad y un servicio excepcional. Nuestra pasión por la tecnología se refleja en cada reparación que realizamos.</p>
                <h3><span>2</span>Comprometidos con la excelencia</h3>
                <p>En SmartFix, estamos comprometidos con la excelencia en cada paso del camino. Desde la recepción de tu dispositivo hasta la entrega de una solución impecable, nuestro equipo se esfuerza por superar tus expectativas. Nos enorgullece ofrecer un servicio eficiente y transparente, respaldado por años de experiencia en el campo de la reparación de celulares.</p>
            </div>
        </div>

        <!-- SECCION SERVICIOS -->

        <section class="about-services">
           
         <!-- Titulo -->
    <div class="pregunta">
        <h2>¿Qué le paso a tu telefono?</h2>
        </div>

    
    
            <!-- OPCIONES -->
            <div class="opciones">
                <h2>Selecciona los campos</h2>                
                <form action="procesar_encuesta.php" method="post">
    
                    <div class="problema">
                        <select id="problema" name="problema">
                            <option value="default" selected>Seleciona Problema</option>
                            <option value="se rompio la pantalla">Se rompio la pantalla</option>
                            <option value="Mi dispositivo no carga">Mi dispositivo no carga</option>
                            <option value="se rompio la camara trasera">Se rompio la camara trasera</option>
                            <option value="Problemas de Software">Problemas de Software</option>
                            <option value="Mi bateria no dura nada ">Mi bateria no dura nada</option>
                            <option value="otro problema">Otro problema</option>
                        </select>
                    </div>
    
                    <div class="marca">
                        <select id="primerSelect">
                        <option value="default" selected>Seleciona Marca</option>
                            <option value="opcion1">Samsung</option>
                            <option value="opcion2">Motorola</option>
                            <option value="opcion3">Iphone</option>
                            <option value="opcion4">Xiaomi</option>
                            <option value="opcion5">Otra</option>
                        </select>
                    </div>
    
                    <div class="modelo" id="contenedorSegundoSelect">
                        <select id="segundoSelect">
                         <option value="J1 ACE" >J1 ACE</option>
                         <option value="J200 2015" >J200 2015</option>
                         <option value="Samsung" >J2 2016</option>
                         <option value="Samsung" >J2 PRO</option>
                         <option value="Samsung" >J3 2016</option>
                         <option value="Samsung" >J4 2018</option>
                         <option value="Samsung" >4 PLUS</option>
                         <option value="Samsung" >J5 2015</option>
                         <option value="Samsung">J5 2016</option>
                         <option value="Samsung">J5 PRIME</option>
                         <option value="Samsung">J5 PRO</option>
                         <option value="Samsung">J6</option>
                         <option value="Samsung">J6 PLUS</option>
                         <option value="Samsung">J7 2015</option>
                         <option value="Samsung">J7 2016</option>
                         <option value="Samsung">J7 NEO</option>
                         <option value="Samsung">J7 PRIME</option>
                         <option value="Samsung">J7 PRO</option>
                         <option value="Samsung">J8 </option>
                         <option value="Samsung">A01</option>
                         <option value="Samsung">A01 CORE</option>
                         <option value="Samsung">A02</option>
                         <option value="Samsung">A02S</option>
                         <option value="Samsung">A03</option>
                         <option value="Samsung">A03S</option>
                         <option value="Samsung">A03 CORE</option>
                         <option value="Samsung">A04 </option>
                         <option value="Samsung">A04S</option>
                         <option value="Samsung">A04E</option>
                         <option value="Samsung">A5 2016</option>
                         <option value="Samsung">A5 2017</option>
                         <option value="Samsung">A6 2018</option>
                         <option value="Samsung">A6 PLUS</option>
                         <option value="Samsung">A7 2017</option>
                         <option value="Samsung">A7 2018</option>
                         <option value="Samsung">A800</option>
                         <option value="Samsung">A8 PLUS</option>
                         <option value="Samsung">A8 2018</option>
                         <option value="Samsung">A10</option>
                         <option value="Samsung">A10S</option>
                         <option value="Samsung">A11</option>
                         <option value="Samsung">A12</option>
                         <option value="Samsung">A13</option>
                         <option value="Samsung">A14</option>
                         <option value="Samsung">A20</option>
                         <option value="Samsung">A20S</option>
                         <option value="Samsung">A21</option>
                         <option value="Samsung">A21S</option>
                         <option value="Samsung">A22</option>
                         <option value="Samsung">A23</option>
                         <option value="Samsung">A30</option>
                         <option value="Samsung">A30S</option>
                         <option value="Samsung">A31</option>
                         <option value="Samsung">A32</option>
                         <option value="Samsung">A33</option>
                         <option value="Samsung">A50</option>
                         <option value="Samsung">A51</option>
                         <option value="Samsung">A52</option>
                         <option value="Samsung">A53</option>
                         <option value="Samsung">A54</option>
                         <option value="Samsung">A70</option>
                         <option value="Samsung">A71</option>
                         <option value="Samsung">A72</option>
                         <option value="Samsung">A73</option>
                         <option value="Samsung">A80</option>
                         <option value="Samsung">S8</option>
                         <option value="Samsung">S8 PLUS</option>
                         <option value="Samsung">S9</option>
                         <option value="Samsung">S10</option>
                         <option value="Samsung">S10E</option>
                         <option value="Samsung">S20 </option>
                         <option value="Samsung">S20 FE</option>
                         <option value="Samsung">S20 PLUS</option>
                         <option value="Samsung">S20 ULTRA</option>
                         <option value="Samsung">S21 </option>
                         <option value="Samsung">S21 FE</option>
                         <option value="Samsung">S21 PLUS </option>
                         <option value="Samsung">S21 ULTRA</option>
                         <option value="Samsung">S22 </option>
                         <option value="Samsung">S22 PLUS </option>
                         <option value="Samsung">S22 ULTRA </option>
                         <option value="Samsung">Z FLIP 4 </option>
                         <option value="Samsung">Z FOLD 4 </option>
                         <option value="Samsung">M10</option>
                         <option value="Samsung">M12</option>
                         <option value="Samsung">M13</option>
                         <option value="Samsung">M20</option>
                         <option value="Samsung">M23</option>
                         <option value="Samsung">M30</option>
                         </select>
                    </div>
    
                    <div class="modelo" id="contenedorTercerSelect">
                        <select class="opcion2" id="tercerSelect">
                            <option value="Motorola">MOTO C</option>
                            <option value="Motorola">MOTO C PLUS</option>
                            <option value="Motorola">MOTO E</option>
                            <option value="Motorola">MOTO E4 PLUS</option>
                            <option value="Motorola">MOTO E5</option>
                            <option value="Motorola">MOTO E5 PLUS</option>
                            <option value="Motorola">MOTO E5 PLAY</option>
                            <option value="Motorola">MOTO E6</option>
                            <option value="Motorola">MOTO E6 PLUS</option>
                            <option value="Motorola">MOTO E6S</option>
                            <option value="Motorola">MOTO E6I</option>
                            <option value="Motorola">MOTO E7</option>
                            <option value="Motorola">MOTO E7I POWER</option>
                            <option value="Motorola">MOTO E7 PLUS</option> 
                            <option value="Motorola">MOTO E13</option>
                            <option value="Motorola">MOTO E20</option>
                            <option value="Motorola">MOTO E22</option>
                            <option value="Motorola">MOTO E22I</option>
                            <option value="Motorola">MOTO E30</option>
                            <option value="Motorola">MOTO E32</option>
                            <option value="Motorola">MOTO E40</option>
                            <option value="Motorola">MOTO EDGE</option>
                            <option value="Motorola">MOTO EDGE 20 LITE</option>
                            <option value="Motorola">MOTO EDGE 20 PRO</option>
                            <option value="Motorola">MOTO EDGE 30</option>
                            <option value="Motorola">MOTO G</option>
                            <option value="Motorola">MOTO G2</option>
                            <option value="Motorola">MOTO G3</option>
                            <option value="Motorola">MOTO G4</option>
                            <option value="Motorola">MOTO G4 PLUS</option>
                            <option value="Motorola">MOTO G4 PLAY</option>
                            <option value="Motorola">MOTO G5</option>
                            <option value="Motorola">MOTO G5S PLUS</option>
                            <option value="Motorola">MOTO G5 PLUS</option>
                            <option value="Motorola">MOTO G6</option>
                            <option value="Motorola">MOTO G6 PLUS</option>
                            <option value="Motorola">MOTO G6 PLAY</option>
                            <option value="Motorola">MOTO G7</option>
                            <option value="Motorola">MOTO G7 PLAY</option>
                            <option value="Motorola">MOTO G7 PLUS</option>
                            <option value="Motorola">MOTO G7 POWER</option>
                            <option value="Motorola">MOTO G8</option>
                            <option value="Motorola">MOTO G8 PLUS</option>
                            <option value="Motorola">MOTO G8 PLAY</option>
                            <option value="Motorola">MOTO G8 POWER</option>
                            <option value="Motorola">MOTO G8 POWER LITE</option>
                            <option value="Motorola">MOTO G9</option>
                            <option value="Motorola">MOTO G9 PLAY</option>
                            <option value="Motorola">MOTO G9 PLUS</option>
                            <option value="Motorola">MOTO G9 POWER</option>
                            <option value="Motorola">MOTO G10</option>
                            <option value="Motorola">MOTO G13</option>
                            <option value="Motorola">MOTO G20</option>
                            <option value="Motorola">MOTO G22</option>
                            <option value="Motorola">MOTO G23</option>
                            <option value="Motorola">MOTO G30</option>
                            <option value="Motorola">MOTO G31</option>
                            <option value="Motorola">MOTO G32</option>
                            <option value="Motorola">MOTO G40</option>
                            <option value="Motorola">MOTO G41</option>
                            <option value="Motorola">MOTO G42</option>
                            <option value="Motorola">MOTO G51</option>
                            <option value="Motorola">MOTO G52</option>
                            <option value="Motorola">MOTO G60</option>
                            <option value="Motorola">MOTO G60S</option>
                            <option value="Motorola">MOTO G71</option>
                            <option value="Motorola">MOTO G82</option>
                            <option value="Motorola">MOTO G100</option>
                            <option value="Motorola">MOTO G200</option>
                            <option value="Motorola">MOTO ONE </option>
                            <option value="Motorola">MOTO ONE MACRO</option>
                            <option value="Motorola">MOTO ONE ACTION</option>
                            <option value="Motorola">MOTO ONE FUSION</option>
                            <option value="Motorola">MOTO ONE VISION</option>
                            <option value="Motorola">MOTO ONE HYPER</option>
                            <option value="Motorola">MOTO ONE X PLAY</option>
                            <option value="Motorola">MOTO ONE X2</option>
                            <option value="Motorola">MOTO ONE X STYLE</option>
                            <option value="Motorola">MOTO ONE Z </option>
                            <option value="Motorola">MOTO ONE Z2 </option>
                            <option value="Motorola">MOTO ONE Z3 </option>
                        </select>
                    </div>
    
                <div class="modelo" id="contenedorCuartoSelect">
                    <select id="cuartoSelect" class="opcion3">
                        <option value="Iphone">IPHONE 5G</option>
                        <option value="Iphone">IPHONE 6G</option>
                        <option value="Iphone">IPHONE 6PLUS</option>
                        <option value="Iphone">IPHONE 6S</option>
                        <option value="Iphone">IPHONE 7G</option>
                        <option value="Iphone">IPHONE 7PLUS</option>
                        <option value="Iphone">IPHONE 8G</option>
                        <option value="Iphone">IPHONE 8 PLUS</option>
                        <option value="Iphone">IPHONE X</option>
                        <option value="Iphone">IPHONE XS</option>
                        <option value="Iphone">IPHONE XS MAX</option>
                        <option value="Iphone">IPHONE 11</option>
                        <option value="Iphone">IPHONE 11 PRO</option>
                        <option value="Iphone">IPHONE 11 PRO MAX</option>
                        <option value="Iphone">IPHONE 12 </option>
                        <option value="Iphone">IPHONE 12 PRO</option>
                        <option value="Iphone">IPHONE 12 PRO MAX</option>
                        <option value="Iphone">IPHONE 12 MINI</option>
                        <option value="Iphone">IPHONE 13 </option>
                        <option value="Iphone">IPHONE 13 PRO</option>
                        <option value="Iphone">IPHONE 13 PRO MAX</option>
                        <option value="Iphone">IPHONE 14 </option>
                        <option value="Iphone">IPHONE 14 PRO</option>
                        <option value="Iphone">IPHONE 14 PRO MAX</option>
                    </select>
                </div>
    
                <div class="modelo" id="contenedorQuintoSelect">
                    <select id="quintoSelect" class="opcion4">
                        <option value="Xiaomi">REDMI GO</option>
                        <option value="Xiaomi">REDMI 4A</option>
                        <option value="Xiaomi">REDMI 5</option>
                        <option value="Xiaomi">REDMI 5 PLUS</option>
                        <option value="Xiaomi">REDMI 6</option>
                        <option value="Xiaomi">REDMI 6A</option>
                        <option value="Xiaomi">REDMI 7</option>
                        <option value="Xiaomi">REDMI 7A</option>
                        <option value="Xiaomi">REDMI 8</option>
                        <option value="Xiaomi">REDMI 8A</option>
                        <option value="Xiaomi">REDMI 9</option>
                        <option value="Xiaomi">REDMI 9A</option>
                        <option value="Xiaomi">REDMI 9C</option>
                        <option value="Xiaomi">REDMI 10</option>
                        <option value="Xiaomi">NOTE 4</option>
                        <option value="Xiaomi">NOTE 4X</option>
                        <option value="Xiaomi">NOTE 5</option>
                        <option value="Xiaomi">NOTE 5 PRO</option>
                        <option value="Xiaomi">NOTE 6</option>
                        <option value="Xiaomi">NOTE 6 PRO</option>
                        <option value="Xiaomi">NOTE 7</option>
                        <option value="Xiaomi">NOTE 7 PRO</option>
                        <option value="Xiaomi">NOTE 8</option>
                        <option value="Xiaomi">NOTE 8 PRO</option>
                        <option value="Xiaomi">NOTE 8T</option>
                        <option value="Xiaomi">NOTE 9</option>
                        <option value="Xiaomi">NOTE 9T</option>
                        <option value="Xiaomi">NOTE 9S</option>
                        <option value="Xiaomi">NOTE 9PRO</option>
                        <option value="Xiaomi">NOTE 10</option>
                        <option value="Xiaomi">NOTE 10S</option>
                        <option value="Xiaomi">NOTE 11</option>
                        <option value="Xiaomi">NOTE 11S</option>
                        <option value="Xiaomi">NOTE 11 PRO</option>
                        <option value="Xiaomi">MI A1</option>
                        <option value="Xiaomi">MI A2</option>
                        <option value="Xiaomi">MI A2 LITE</option>
                        <option value="Xiaomi">MI A3</option>
                        <option value="Xiaomi">MI 8 LITE</option>
                        <option value="Xiaomi">MI 9</option>
                        <option value="Xiaomi">MI 9T</option>
                        <option value="Xiaomi">MI 9SE</option>
                        <option value="Xiaomi">MI 9 LITE</option>
                        <option value="Xiaomi">POCO X3</option>
                        <option value="Xiaomi">POCO X3 PRO</option>
                    </select>
                </div>
                
                <div id="contenedorOtra" class="modelo">
                    <div class="modelo-otra">
                        <input type="text" id="otra" placeholder="Ingresa la otra marca">
                    </div> 
                </div>
                </form>
                 
                <a href="#" id="cotizar">Cotizar</a>
                <img src="img/phone-maintenance-isometric.svg" alt="mantenimiento del celular" class="imagen-opciones">

            </div>
    
            <!-- Metodos y Pago-->
    
            <div class="titulo-pago">
                <h1>Opciones de Pago</h1>
            </div>
            <div class="pago">
    
                <div class="metodo">
                    <i class="fa-solid fa-money-bills fa-2xl" style="color: white;"></i>
                    <h1>Efectivo</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis aliquam accusantium, explicabo alias dicta non repudiandae laborum dolores dolore sapiente?</p>
    
                </div>
                <div class="metodo">
                    <i class="fa-solid fa-money-bill-transfer fa-2xl" style="color: white;"></i>
                    <h1>Transferencia</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis aliquam accusantium, explicabo alias dicta non repudiandae laborum dolores dolore sapiente?</p>  
                </div>
    
                <div class="metodo">
                    <i class="fa-regular fa-credit-card fa-2xl" style="color: white;"></i>
                    <h1>Debito</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis aliquam accusantium, explicabo alias dicta non repudiandae laborum dolores dolore sapiente? Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae voluptatem in hic cumque?</p>
                </div>
        
            </div>

        </section>

    

        <!-- SECCION CONTACTO -->
        <section class="contacto">
            <h1>Si necesitas más ayuda, contactanos</h1>

            <div class="contacto-form">
                <div class="formulario">
            
                    <form id="form" action="#" method="POST">

                        <p>
                        <label for="from_name">Nombre completo:</label>      
                        <input type="text" id="from_name" name="from_name" required>
                        </p>
                    
                        <p class="bloque">
                            <label for="message">Mensaje</label>
                            <textarea name="message" id="message" rows="10"></textarea>
                        </p>
            
                        <p class="bloque">
                                <input type="submit" id="button" value="Enviar">
                        </p>
                    
                    </form>
            
                    <div class="contacto-otros">
                        <ul>
                            <li><a href="https://web.whatsapp.com/" target="_blank"><i class="fa-brands fa-whatsapp fa-2xl"></i>Contactanos</a> <br></li>
                            <li><a href="https://es-la.facebook.com/"><i class="fa-brands fa-facebook fa-2xl"></i>Buscanos</a></li>
                            <li><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram fa-2xl"></i>Seguinos</a></li>   
                        </ul>
                        
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Teléfono</h4>
                <p>0-800 213 2139</p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>SmartFix@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4>Ubicación</h4>
                <p>Av. San Martin Sur 555</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; Grupo 6 | Leonel Alamo</h2>
    </footer>

    <!-- Links Js -->

    <script src="JavaScript/script.js"></script>
    <script src="https://kit.fontawesome.com/c63695aaa6.js" crossorigin="anonymous"></script>
    <script type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script type="text/javascript">
  emailjs.init('xwSxTo5ilJh3s-_-_')
</script>
</body>

</html>