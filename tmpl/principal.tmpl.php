<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <base href="http://localhost/LaTradicionalNew/">
        <title>La Tradicional - Empanadas con Sello</title>
        <!--CSS-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:light,regular,bold" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:regular,light" rel="stylesheet" type="text/css">
        <link href="css/estilo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <!--BARRA DE NAVEGACION-->
        <nav id="menu">
            <div>
                <img src="img/la_tradicional_logo.png" alt="Logo"></img>
                <ul>
                    <li><a href="#"><i class="material-icons">shopping_cart</i></a></li>
                    <li><a href="#">Ingresar</a></li>
                    <li><a href="#">Sobre Nosotros</a></li>
                    <li class="pestana-activa"><a href="#">Principal</a></li>
                </ul>
            </div>
        </nav>
        <!--SLIDER Y PROMOCIONES-->
        <div id="promociones">
            <div id="slider">
                <ul class="imagenes">
                    <li class="imagen-activa"><img src="img/slider_img.png" alt="Promo Re Piola"></img></li>
                    <li><img src="img/slider_img.png" alt="Promo Re Piola"></img></li>
                    <li><img src="img/slider_img.png" alt="Promo Re Piola"></img></li>
                    <li id="controles">
                        <div>
                            <ul class="controles">
                                <li class="control-activo"></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <img id="fondo" src="img/fondo_empanada.png" alt="Plato de Empanadas"></img>
        </div>
        <!--REALIZA TU PEDIDO-->
        <div id="pedidos">
            <p class="titulo">REALIZÁ TU PEDIDO</p>
            <div id="pestanas-productos">
                <div id="empanadas" class="pestana">
                    <a href="#">EMPANADAS</a>
                </div>
                <div id="tartas" class="pestana">
                    <a href="#">TARTAS</a>
                </div>
            </div>
        </div>
        <div id="productos">
                <ul>
                    <li>
                        <div class="item">
                            <p>ARABE<span class="precio">$11</span><br /><span class="descripcion">Carne, cebolla, tomate, aji, pimienta, sal y limon</span></p>
                            <input type="number" class="cantidad" value="1"></input>
                            <button class="agregar">AGREGAR AL CARRITO</button>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <p>VERDURA<span class="precio">$11</span><br /><span class="descripcion">Acelga, queso parmesano rallado y pizca de salsa blanca</span></p>
                            <input type="number" class="cantidad" value="1"></input>
                            <button class="agregar">AGREGAR AL CARRITO</button>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <p>VERDURA<span class="precio">$11</span><br /><span class="descripcion">Zapallito, zanahoria, pimiento tricolor, queso y verdeo</span></p>
                            <input type="number" class="cantidad" value="1"></input>
                            <button class="agregar">AGREGAR AL CARRITO</button>
                        </div>
                    </li>
                    <br />
                    <li>
                        <div class="item">
                            <p>CALABAZA<span class="precio">$11</span><br /><span class="descripcion">Calabaza, cebolla, queso y verdeo</span></p>
                            <input type="number" class="cantidad" value="1"></input>
                            <button class="agregar">AGREGAR AL CARRITO</button>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <p>LA TRADICIONAL<span class="precio">$11</span><br /><span class="descripcion">Panceta, champiñones, cebolla y verdeo</span></p>
                            <input type="number" class="cantidad" value="1"></input>
                            <button class="agregar">AGREGAR AL CARRITO</button>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <p>POLLO CON <span class="precio">$11</span>SALSA BLANCA<br /><span class="descripcion">Pollo, cebolla y salsa blanca</span></p>
                            <input type="number" class="cantidad" value="1"></input>
                            <button class="agregar">AGREGAR AL CARRITO</button>
                        </div>
                    </li>
                    <br />
                    <li>
                        <div class="item">
                            <p>POLLO<span class="precio">$11</span><br /><span class="descripcion">Pollo, cebolla y pimiento</span></p>
                            <input type="number" class="cantidad" value="1"></input>
                            <button class="agregar">AGREGAR AL CARRITO</button>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <p>CORDOBESA <span class="precio">$11</span>DULCE<br /><span class="descripcion">Carne, cebolla y azucar</span></p>
                            <input type="number" class="cantidad" value="1"></input>
                            <button class="agregar">AGREGAR AL CARRITO</button>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <p>CRIOLLA TIPO <span class="precio">$11</span>SALTEÑA<br /><span class="descripcion">Carne, cebolla y verdeo</span></p>
                            <input type="number" class="cantidad" value="1"></input>
                            <button class="agregar">AGREGAR AL CARRITO</button>
                        </div>
                    </li>
                    <br />
                    <li>
                        <div class="item">
                            <p>CRIOLLA PICADA <span class="precio">$11</span>CUCHILLO<br /><span class="descripcion">Carne seleccionada en daditos, cebolla rehogada y verdeo</span></p>
                            <input type="number" class="cantidad" value="1"></input>
                            <button class="agregar">AGREGAR AL CARRITO</button>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <p>ATUN<span class="precio">$11</span><br /><span class="descripcion">Atun, cebolla, salsa blanca y morrones</span></p>
                            <input type="number" class="cantidad" value="1"></input>
                            <button class="agregar">AGREGAR AL CARRITO</button>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <p>ATUN Y <span class="precio">$11</span>VERDURA<br /><span class="descripcion">Lomos de atun, pimiento morron, acelga, salsa blanca y queso</span></p>
                            <input type="number" class="cantidad" value="1"></input>
                            <button class="agregar">AGREGAR AL CARRITO</button>
                        </div>
                    </li>
                    <br />
                    <li>
                        <div class="item">
                            <p>CHOCLO<span class="precio">$11</span><br /><span class="descripcion">Choclo desgranada, choclo molido y queso cremoso</span></p>
                            <input type="number" class="cantidad" value="1"></input>
                            <button class="agregar">AGREGAR AL CARRITO</button>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <p>HUMITA<span class="precio">$11</span><br /><span class="descripcion">Pasta de choclo, pizca de cebolla y azucar</span></p>
                            <input type="number" class="cantidad" value="1"></input>
                            <button class="agregar">AGREGAR AL CARRITO</button>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <p>FUGAZZA<span class="precio">$11</span><br /><span class="descripcion">Queso muzzarella y cebolla salteada</span></p>
                            <input type="number" class="cantidad" value="1"></input>
                            <button class="agregar">AGREGAR AL CARRITO</button>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="conocemas">
                <p>
                NUESTRAS EMPANADAS ESTAN<br />ELABORADAS CON LOS MEJORES INGREDIENTES<br />
                <span>Texto generico explicando porque<br />deberias comprar nuestras empanadas dado que<br />la economia argentina esta en constante decadencia</span><br /><span><a href="#">CONOCE MAS ></a></span>
                </p>
            </div>
            <footer>
                <div id="contenedor-footer">
                    <div>
                        <ul>
                            <li><a href="#" class="footer-title">PRINCIPAL</a></li>
                            <li><a href="#">HOME</a></li>
                            <li><a href="#productos">PRODUCTOS</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li><a  href="#"class="footer-title">SOBRE NOSOTROS</a></li>
                            <li><a href="#">¿QUIENES SOMOS?</a></li>
                            <li><a href="#">CONOCE MAS</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li><a  href="#"class="footer-title">MI CUENTA</a></li>
                        </ul>
                    </div>
                    <form action="src/login.ctrl.php" id="ingresar" method="post">
                        <input type="text" name="email" id="email" placeholder="E-Mail"></input><br />
                        <input type="password" name="pass" id="pass" placeholder="Contraseña"></input><br />
                        <a href="#" id="crear">CREAR CUENTA</a>
                        <button type="submit" name="ingresar" id="ingresar">INGRESAR</button>
                    </form>
                    <hr></hr>
                </div>
            </footer>
    </body>
</html>
