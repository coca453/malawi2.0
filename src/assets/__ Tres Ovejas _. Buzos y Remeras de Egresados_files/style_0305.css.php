@charset "utf-8";
/* CSS Document */

textarea,
input.text,
input[type="text"],
input[type="button"],
input[type="submit"],
.input-checkbox {
-webkit-appearance: none;
}

.swiper-pagination-bullet {border: 1px solid #FFF!important; background: transparent!important; opacity: 1!important;}
.swiper-pagination-bullet-active{background-color: #FFF!important;}
.swiper-pagination {width: calc(100% - 16px)!important; text-align: right!important; bottom: auto!important; left: 0; top: 20px; right: 16px;}

.header-scroll{background-color: #EFEFEF!important;}
.base-scroll{background-image: url('../im/header-bg-scroll.svg')!important;}

#menu{position: fixed; display: none; width: 100%; height: 100%; top: 0; left: 0; background-color: #FFF; z-index: 99999;}
#menu .verde{position: absolute; width: 42%; height: 100%; background-color: #01eebc; top: 0; left; 0;}
#menu .blanco{position: absolute; width: 58%; height: 100%; top: 0; right: 0;}
#menu .btn-cerrar{position: absolute; top: 42px; right: 40px; font-size: 18px; font-weight: 500; line-height: 16px; background-image: url('../im/menu-cerrar.svg'); background-repeat: no-repeat; background-size: 16px 16px; padding-left: 24px; cursor: pointer;}
#menu .blanco .contenido{position: absolute; left: 7.5%; top: 50%; transform: translateY(-50%);}
#menu .blanco .contenido a{font-size: 70px; font-weight: 700; color: #1d1d1b; line-height: 110px;}
#menu .blanco .contenido .sociales{display: block; width: 160px; float: left; margin: 100px 0 0 0;}
#menu .blanco .contenido .sociales .instagram{display: block; float: left; width: 24px; height: 24px; background-image: url('../im/ico-instagram.svg'); background-size: 100% 100%; cursor: pointer;}
#menu .blanco .contenido .sociales .facebook{display: block; float: left; width: 24px; height: 24px; margin-left: 18px; background-image: url('../im/ico-facebook.svg'); background-size: 100% 100%; cursor: pointer;}
#menu .blanco .contenido .sociales .tx{display: inline-block; width: 100%; font-size: 14px; font-weight: 500; margin-top: 10px;}
#menu .blanco .contenido .sociales .tx .linea{display: inline-block; float: right; width: 26px; height: 1px; background-color: #1d1d1b; margin: 12px 0 0 0;}

#menu .blanco .contenido .contacto{display: block; width: 190px; float: right; margin: 100px 0 0 30px;}
#menu .blanco .contenido .contacto .whatsapp{display: block; float: left; width: 24px; height: 24px; background-image: url('../im/header-whatsapp.svg'); background-size: 100% 100%; cursor: pointer;}
#menu .blanco .contenido .contacto .tx{display: inline-block; width: 100%; font-size: 14px; font-weight: 500; margin-top: 10px;}
#menu .blanco .contenido .contacto .tx .linea{display: inline-block; float: right; width: 26px; height: 1px; background-color: #1d1d1b; margin: 12px 0 0 0;}

#menu .verde .contenido{position: absolute; min-width: 300px;  right: 7.5%; top: 50%; transform: translateY(-50%);}
#menu .verde .contenido .tresovejas{display: block; float: right; width: 125px; height: auto; margin: 20px 0 0 0;}
#menu .verde .contenido .copy{position: absolute; right: 0; bottom: 0; font-size: 14px; line-height: 20px; font-weight: 500; color: #1d1d1b; text-align: right;}

#inicio-modulo1{display: inline-block; width: 100%; padding: 100px 0;}
#inicio-modulo1 .contenido{display: block; width: 100%; max-width: 1786px; margin: 0 auto; padding: 0 178px;}
#inicio-modulo1 .contenido .tx{display: block; width: 500px; float: left; margin: 20px 0 0 0;}
#inicio-modulo1 .contenido .tx h2{font-size: 45px; font-weight: 700; color: #1d1d1b; margin: 0;}
#inicio-modulo1 .contenido .tx p{font-size: 30px; font-weight: 500; color: #1d1d1b; margin: 20px 0;}
#inicio-modulo1 .contenido .tx .btn{display: block; width: 165px; height: 50px; background-color: #5c24b6; border-radius: 25px; font-size: 20px; font-weight: 700; color: #FFF; text-align: center; line-height: 50px; cursor: pointer;}
#inicio-modulo1 .contenido img{display: block; float: right; width: calc(100% - 510px);}

#inicio-separador{display: inline-block; width: 100%; height: 110px; background-image: url('../im/home-separador.svg'); background-repeat: repeat-x; z-index: 2;}

#inicio-modulo2{display: inline-block; width: 100%; padding: 100px 0; background-color: #e6e6e6; margin-top: -25px;}
#inicio-modulo2 .contenido{display: block; width: 100%; max-width: 1786px; margin: 0 auto; padding: 0 178px;}
#inicio-modulo2 .contenido h3{font-size: 45px; font-weight: 700; color: #1d1d1b; margin: 0;}
#inicio-modulo2 .contenido p{font-size: 30px; font-weight: 500; color: #1d1d1b; margin: 20px 0;}
#inicio-modulo2 .contenido .modulos{display: inline-block; width: calc(100% + 32px); margin: 50px 0 50px -32px;}
#inicio-modulo2 .contenido .modulos .modulo{display: block; float: left; width: calc(25% - 32px); min-height: 454px; margin: 0 0 0 32px; background-color: #FFF; padding: 12px 18px;}
#inicio-modulo2 .contenido .modulos .modulo .linea1{display: block; position: absolute; width: calc(100% - 36px); height: 1px; top: 12px; left: 18px; border-bottom: 3px dashed #000;}
#inicio-modulo2 .contenido .modulos .modulo .linea2{display: block; position: absolute; width: calc(100% - 36px); height: 1px; bottom: 12px; left: 18px; border-bottom: 3px dashed #000;}
#inicio-modulo2 .contenido .modulos .modulo .nro{display: block; font-size: 56px; font-weight: 600; text-align: center; margin: 20px 0;}
#inicio-modulo2 .contenido .modulos .modulo .inicio-pasos-1{display: block; margin: 0 auto 14px auto; max-width: 100%}
#inicio-modulo2 .contenido .modulos .modulo .inicio-pasos-2{display: block; margin: 20px auto 30px auto; max-width: 100%}
#inicio-modulo2 .contenido .modulos .modulo .inicio-pasos-3{display: block; margin: 30px auto 26px auto; max-width: 100%}
#inicio-modulo2 .contenido .modulos .modulo .inicio-pasos-4{display: block; margin: 30px auto 50px auto; max-width: 100%}
#inicio-modulo2 .contenido .modulos .modulo .tx{display: block; font-size: 25px; font-weight: 500; text-align: center; margin: 10px 0;}
#inicio-modulo2 .contenido .btn{display: block; float: right; width: 165px; height: 50px; background-color: #5c24b6; border-radius: 25px; font-size: 20px; font-weight: 700; color: #FFF; text-align: center; line-height: 50px; cursor: pointer;}

#inicio-modulo3{display: inline-block; width: 100%; padding: 100px 0;}
#inicio-modulo3 .contenido{display: block; width: 100%; max-width: 1800px; margin: 0 auto; padding: 0 40px;}
#inicio-modulo3 .contenido .inner{display: inline-block; width: 100%;}
#inicio-modulo3 .contenido .inner img{display: block; width: 95%; height: auto;}
#inicio-modulo3 .contenido .inner .thumbs{display: block; position: absolute; width: 52%; top: 0; right: 4.2%}
#inicio-modulo3 .contenido .inner .thumbs .thumb{display: block; float: left; width: 32%; padding-bottom: 32%; background-color: #EDEDED; background-repeat: no-repeat; background-position: center; background-size: cover;}
#inicio-modulo3 .contenido .inner .thumbs .thumb2{margin-left: 2%;}
#inicio-modulo3 .contenido .inner .thumbs .thumb3{margin-left: 2%;}
#inicio-modulo3 .contenido .inner .thumbs .thumb4{margin-top: 2%;}
#inicio-modulo3 .contenido .inner .thumbs .thumb5{margin-top: 2%; margin-left: 2%;}
#inicio-modulo3 .contenido .inner .thumbs .thumb6{margin-top: 2%; margin-left: 2%;}
#inicio-modulo3 .contenido .inner .thumbs .movil{position: absolute; max-width: 135px; height: auto; bottom: -150px; right: -50px;}
.home-instagram-1440{display: none!important;}
.home-instagram-mobile{display: none!important;}
#inicio-modulo3 .contenido .inner .thumbs iframe{width: 100%; border: 0; overflow: hidden; height: 32vw;}

#inicio-modulo4{display: inline-block; width: 100%;}
#inicio-modulo4 .borde1{display: block; width: 100%; height: 40px; background-image: url('../im/home-contacto-borde1.svg');}
#inicio-modulo4 .borde2{display: block; width: 100%; height: 40px; background-image: url('../im/home-contacto-borde2.svg');}
#inicio-modulo4 .contenido{display: block; width: 100%; background-color: #f7df03;}
#inicio-modulo4 .contenido .inner{display: block; width: 100%; max-width: 1786px; margin: 0 auto; padding: 30px 178px;}
#inicio-modulo4 .contenido .inner .whatsapp{width: 95px; height: 95px; float: right; margin-top: 100px;}
#inicio-modulo4 .contenido .inner .tx{position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 45px; font-weight: 700;}
#inicio-modulo4 .contenido .inner .tx a{font-size: 35px; font-weight: 500; color: #1d1d1b;}
#inicio-modulo4 .contenido .inner .tx a strong{font-size: 35px; font-weight: 700; text-decoration: underline;}

#footer{display: block; width: 100%;}
#footer .borde1{display: block; width: 100%; height: 40px; background-image: url('../im/footer-borde1.svg');}
#footer .contenido{display: inline-block; width: 100%; background-color: #e6e6e6; padding: 20px 0 10px 0;}
#footer .contenido .inner{display: table; width: 100%; max-width: 1786px; margin: 0 auto; padding: 0 178px 20px 178px;}
#footer .contenido .inner .tresovejas{display: block; float: left; width: 120px; height: auto;}
#footer .contenido .inner .menu{display: block; position: absolute; top: 5px; left: 50%; transform: translateX(-60%); min-width: 750px;}
#footer .contenido .inner .menu .opcion{display: block; float: left; margin: 0 25px; font-size: 11px; font-weight: 600; text-align: center; cursor: pointer;}
#footer .contenido .inner .menu .opcion img{display: block; margin: 0 auto;}

#footer .contenido .consulta{display: block; float: right; font-size: 15px; font-weight: 600; margin: 10px 50px 0 0;}
#footer .contenido .consulta .btn{display: block; width: 87px; height: 30px; background-color: #5c24b6; border-radius: 15px; font-size: 12px; font-weight: 700; color: #FFF; text-align: center; line-height: 30px; margin-top: 10px; cursor: pointer;}

#footer .contenido .inner .copy{display: block; position: absolute; bottom: 20px; right: 40px; font-size: 9px; font-weight: 400; color: #808080;}
#footer .contenido .inner .copy a{color: #808080;}

#slider-quienes-somos{position: relative; display: inline-block; width: 100%; height: 590px; margin-top: 100px; background-repeat: no-repeat; background-position: center; background-size: cover;}
#quienes-somos{display: table; width: 100%; max-width: 1786px; margin: 140px auto 100px auto; padding: 0 178px;}
#quienes-somos .columna1{display: block; float: left; width: 300px; font-size: 45px; font-weight: 700; color: #f7df03;}
#quienes-somos .columna2{display: block; float: right; width: calc(100% - 300px); font-size: 22px; font-weight: 300; color: #000;}
#quienes-somos .columna2 p{margin: 0 0 40px 0}

#slider-productos{position: relative; display: inline-block; width: 100%; height: 590px; margin-top: 100px; background-repeat: no-repeat; background-position: center; background-size: cover;}
#productos{display: table; width: 100%; max-width: 1786px; margin: 140px auto 100px auto; padding: 0 178px;}
#productos .columna1{display: block; float: left; width: 260px;}
#productos .columna1 .titulo{font-size: 45px; font-weight: 700; color: #f7df03;}
#productos .columna1 .menu{display: block; width: 100%; margin-top: 100px;}
#productos .columna1 .menu .opcion{display: block; width: 100%; height: 45px; border-bottom: 1px solid #d9d9d9; cursor: pointer;}
#productos .columna1 .menu .opcion .tx{display: block; float: left; font-size: 16px; font-weight: 600; color: #2c2b2d; line-height: 45px;}
#productos .columna1 .menu .opcion .btn{display: block; float: left; width: 10px; height: 45px; margin-left: 10px; background-image: url('../im/productos-flecha-abre.svg');}
#productos .columna1 .menu .submenu{display: block; width: 100%; margin-top: 5px;}
#productos .columna1 .menu .submenu .submenu-opcion{display: block; width: 100%; height: 35px; font-size: 14px; font-weight: 400; color: #2c2b2d; line-height: 35px; cursor: pointer;}

#productos .columna2{display: block; float: right; width: calc(100% - 270px); font-size: 25px; font-weight: 400; color: #000; margin-left: -30px;}
#productos .columna2 .modulo{display: block; float: left; width: calc(25% - 30px); margin: 0 0 40px 30px;}
#productos .columna2 .modulo .imagen{display: block; width: 100%; padding-bottom: 140%; background-color: #EDEDED; background-repeat: no-repeat; background-position: center; background-size: cover;}
#productos .columna2 .modulo a{font-size: 16px; font-weight: 500; color: #2c2b2d;}

#detalle{display: table; width: 100%; max-width: 1786px; margin: 250px auto 100px auto; padding: 0 178px;}
#detalle .info{display: block; width: calc(25% - 30px); float: right;}
#detalle .info h1{font-size: 30px; font-weight: 600; color: #2c2b2d; margin: 0;}
#detalle .info p{font-size: 16px; font-weight: 400; color: #2c2b2d;}
#detalle .info .btn1{display: block; width: 160px; height: 32px; background-color: #5724ba; border-radius: 15px; font-size: 12px; font-weight: 700; color: #FFF; text-align: center; line-height: 32px; margin-top: 20px; cursor: pointer;}
#detalle .info .btn2{display: block; width: 195px; height: 32px; background-color: #01eebc; border-radius: 15px; font-size: 12px; font-weight: 700; color: #000; text-align: center; line-height: 32px; margin-top: 10px; cursor: pointer;}
#detalle .info .redes{display: inline-block; width: 100%; margin-top: 40px;}
#detalle .info .redes .tx{float: left; line-height: 20px;}
#detalle .info .redes .facebook{float: left; margin-left: 15px;}
#detalle .info .redes .whatsapp{float: left; margin-left: 10px;}

#detalle .imagenes{display: block; width: 75%; float: left;}
#detalle .imagenes .img1{display: block; width: calc(50% - 10px); padding-bottom: 68%; float: left; background-color: #EDEDED;  background-repeat: no-repeat; background-position: center; background-size: cover;}
#detalle .imagenes .img2{display: block; width: calc(50% - 10px); padding-bottom: 68%; float: right; background-color: #EDEDED;  background-repeat: no-repeat; background-position: center; background-size: cover;}
#detalle .imagenes .img3{display: block; width: calc(50% - 10px); padding-bottom: 68%; float: left; background-color: #EDEDED;  background-repeat: no-repeat; background-position: center; background-size: cover;}
#detalle .imagenes .img4{display: block; width: calc(50% - 10px); padding-bottom: 68%; float: right; background-color: #EDEDED;  background-repeat: no-repeat; background-position: center; background-size: cover;}
#detalle .imagenes .borde-base{display: block; position: absolute; left: 0; bottom: 0;width: 100%; height: 16px; background-image: url('../im/detalle-borde1.svg'); background-position: center top; background-repeat: no-repeat;}
#detalle .imagenes .borde-cabecera{display: block; position: absolute; left: 0; top: 0;width: 100%; height: 16px; background-image: url('../im/detalle-borde2.svg'); background-position: center bottom; background-repeat: no-repeat;}

#detalle .imagenes-mobile{display: none; width: 100%; margin-bottom: 20px;}
#detalle .imagenes-mobile .img{display: block; width: 100%; padding-bottom: 140%; background-color: #EDEDED;  background-repeat: no-repeat; background-position: center; background-size: cover;}
#detalle .imagenes-mobile .borde-base{display: block; position: absolute; left: 0; bottom: 0;width: 100%; height: 16px; background-image: url('../im/detalle-borde1.svg'); background-position: center top; background-repeat: no-repeat;}

#detalle-relacionados{display: table; width: 100%; max-width: 1786px; margin: 120px auto 100px auto; padding: 0 178px;}
#detalle-relacionados .titulo{font-size: 22px; font-weight: 600; color: #1d1d1b;}
#detalle-relacionados .productos{display: block; width: calc(100% + 30px); margin: 40px 0 0 -30px;}
#detalle-relacionados .productos .modulo{display: block; float: left; width: calc(20% - 30px); padding-bottom: 25%; margin: 0 0 0 30px;}
#detalle-relacionados .productos .modulo img{width: 100%;}
#detalle-relacionados .productos .modulo .tx{display: block; width: 100%; text-align: left;}

#contacto{display: table; width: 100%; max-width: 1786px; margin: 250px auto 100px auto; padding: 0 178px;}
#contacto h1{font-size: 45px; font-weight: 700; color: #2c2b2d; margin: 0;}
#contacto .parrafo{font-size: 22px; font-weight: 500; color: #2c2b2d; margin: 0 0 50px 0;}
#contacto .parrafo a{color: #01eebc}
#contacto .columna1{display: inline-block; float: left; width: calc(50% - 24px);}
#contacto .columna1 p{font-size: 30px; font-weight: 500; color: #2c2b2d; margin-bottom: 30px;}
#contacto .columna1 p a{font-size: 30px; font-weight: 500; color: #2c2b2d;}
#contacto .columna2{display: inline-block; float: right; width: calc(50% - 24px); margin-bottom: 30px!important;}
#contacto .columna2 p{font-size: 30px; font-weight: 500; color: #2c2b2d; padding: 0 0 0 70px; background-image: url('../im/header-whatsapp.svg'); background-size: 62px 62px; background-repeat: no-repeat; background-position: 0 5px;}
#contacto .columna2 p a{font-size: 30px; font-weight: 700; color: #01eebc; text-decoration: underline;}
#contacto .campo{display: table; width: 100%; height: 54px;}
#contacto .campo .flecha{position: absolute; width: 10px; height: 10px; right: 0; bottom: 10px;  background-image: url('../im/contacto_input_punta.png');}
#contacto .campo .flecha-seleccionado{background-image: url('../im/contacto_input_punta-seleccionado.png');}
#contacto .campo input[type=text]{display: block; width: calc(100% - 10px); height: 46px; border-radius: 10px; padding: 0 30px; font-size: 20px; font-weight: 300; border: 0; background-color: #e6e6e6; transparent; margin: 4px 0; background-image: url('../im/contacto_input_tilde.png'); background-repeat: no-repeat; background-position: calc(100% - 14px) 22px;}
#contacto .campo textarea{display: block; width: calc(100% - 10px); height: 131px; border-radius: 10px; padding: 15px 30px; font-size: 20px; font-weight: 300; border: 0; background-color: #e6e6e6; transparent; margin: 4px 0; background-image: url('../im/contacto_input_tilde.png'); background-repeat: no-repeat; background-position: calc(100% - 14px) 22px;}
#contacto .campo input[type=email]{display: block; width: calc(100% - 10px); height: 46px; border-radius: 10px; padding: 0 30px; font-size: 20px; font-weight: 300; border: 0; background-color: #e6e6e6; margin: 4px 0; background-image: url('../im/contacto_input_tilde.png'); background-repeat: no-repeat; background-position: calc(100% - 14px) 22px;}
#contacto input[type=file]{position: absolute; width: calc(100% - 140px); height: 50px; opacity: 0; right: 0; bottom: 0; cursor: pointer;}
#contacto .campo .input-seleccionado{background-image: url('../im/contacto_input_tilde-seleccionado.png')!important;}
#contacto .campo_tx{font-size: 13px; font-weight: 300; color: #808080; line-height: 32px; padding-left: 20px; font-style: italic;}
#contacto .campo_margin{margin-bottom: 20px;}
#contacto  input[type=submit]{display: inline-block; float: left; width: 120px; height: 50px; background-color: #f7df03; border-radius: 25px; border: 0; font-size: 18px; font-weight: 700; color: #000; text-align: center; line-height: 50px; cursor: pointer; margin-top: 12px;}
#contacto .btn-adjunto{display: inline-block; float: left; font-size: 18px; font-weight: 500; padding-right: 42px; line-height: 40px; margin: 16px 0 0 20px; background-image: url('../im/contacto_icono-adjunto.svg'); background-position: right 5px; background-repeat: no-repeat; cursor: pointer;}
.tx-mobile{display: none;}
#adjunto-tx{font-size: 14px; color: #666;}

#tu-buzo-cabecera{position: relative; display: inline-block; width: 100%; margin-top: 100px; background-color: #01eebc;}
#tu-buzo-cabecera .inner{display: table; width: 100%; max-width: 1786px; margin: 0 auto; padding: 150px 178px 100px 178px;}
#tu-buzo-cabecera .inner img{width: 100%; height: auto;}
#tu-buzo-cabecera .inner .tu-buzo-cabecera-mobile{display: none; width: 100%; height: auto;}
#tu-buzo-cabecera .btn{display: block; position: absolute; width: 180px; height: 50px; bottom: -35px; left: 50%; transform: translateX(-50%); background-color: #5724ba; border-radius: 25px; font-size: 20px; font-weight: 700; color: #FFF; text-align: center; line-height: 50px; cursor: pointer; z-index: 2;}
#tu-buzo-cabecera-linea{display: block; width: calc(100% - 80px); height: 12px; margin: 0 auto; border-bottom: 1px solid #1d1d1b;}

#tu-buzo-cabecera .contenido{display: none; width: 100%; max-width: 1786px; margin: 0 auto; padding: 0 178px;}
#tu-buzo-cabecera .contenido .modulos{display: inline-block; width: calc(100% + 32px); margin: 0 0 50px -32px;}
#tu-buzo-cabecera .contenido .modulos .modulo{display: block; float: left; width: calc(25% - 32px); min-height: 454px; margin: 0 0 0 32px; background-color: #FFF; padding: 12px 18px;}
#tu-buzo-cabecera .contenido .modulos .modulo .linea1{display: block; position: absolute; width: calc(100% - 36px); height: 1px; top: 12px; left: 18px; border-bottom: 3px dashed #000;}
#tu-buzo-cabecera .contenido .modulos .modulo .linea2{display: block; position: absolute; width: calc(100% - 36px); height: 1px; bottom: 12px; left: 18px; border-bottom: 3px dashed #000;}
#tu-buzo-cabecera .contenido .modulos .modulo .nro{display: block; font-size: 56px; font-weight: 600; text-align: center; margin: 20px 0;}
#tu-buzo-cabecera .contenido .modulos .modulo .inicio-pasos-1{display: block; margin: 0 auto 14px auto; max-width: 100%}
#tu-buzo-cabecera .contenido .modulos .modulo .inicio-pasos-2{display: block; margin: 20px auto 30px auto; max-width: 100%}
#tu-buzo-cabecera .contenido .modulos .modulo .inicio-pasos-3{display: block; margin: 30px auto 26px auto; max-width: 100%}
#tu-buzo-cabecera .contenido .modulos .modulo .inicio-pasos-4{display: block; margin: 30px auto 50px auto; max-width: 100%}
#tu-buzo-cabecera .contenido .modulos .modulo .tx{display: block; font-size: 25px; font-weight: 500; text-align: center; margin: 10px 0;}

#modelos-slider-principal{display: none;}
.slider-modelos{display: none;}
#buzos-modelos{position: relative; display: inline-block; width: 100%; margin-top: 100px;}
#buzos-modelos .inner{display: table; width: 100%; max-width: 1786px; margin: 0 auto; padding: 0 178px 0 178px;}
#buzos-modelos .inner .titulo{font-size: 45px; font-weight: 700; color: #1d1d1b;}
#buzos-modelos .inner .tx{font-size: 30px; font-weight: 500; color: #1d1d1b; margin: 8px 0 50px 0;}
#buzos-modelos .inner .row{display: inline-block; width: 100%;}
#buzos-modelos .inner .row-principal{margin: 20px 0 20px 0;}
#buzos-modelos .inner .row .modulo{display: block; float: left; width: 20%; padding: 35px 25px; cursor: pointer;}
#buzos-modelos .inner .row .modulo:hover{border: 1px solid #01eebc;opacity: 1!important}
#buzos-modelos .inner .row .modulo img{display: block; width: 100%; height: auto;}
#buzos-modelos .inner .row .modulo .modelo{font-size: 17px; font-weight: 700; color: #000; margin-top: 20px; text-align: center;}
#buzos-modelos .inner .row .seleccionado{border: 1px solid #01eebc;opacity: 1!important}
#buzos-modelos .inner .row .seleccionado .modelo{color: #01eebc;}
#buzos-modelos .inner .row .no-seleccionado{opacity: 0.3;}
#buzos-modelos .inner .sub-row{display: none; margin-bottom: 80px;}
#buzos-modelos .inner .sub-row .modulo{opacity: 1!important}
#buzos-modelos .inner .row-btn{display: none; position: absolute; bottom: 20px; right: 178px;}
#buzos-modelos .inner .row-btn .btn{display: block; float: right; width: 215px; height: 50px; background-color: #f7df03; border-radius: 25px; font-size: 20px; font-weight: 700; color: #000; text-align: center; line-height: 50px; cursor: pointer; z-index: 2; border: 0;}

#buzos-modelos .inner .btn-volver{display: block; position: absolute; width: 40px; height: 40px; left: 0; bottom: -80px; background-image: url('../im/flecha-volver.svg'); background-repeat: no-repeat; cursor: pointer; z-index: 999;}

#buzos-modelos .grafico-contenido{display: inline-block; width: 59%; float: left; padding: 34px; background-color: #f2f2f2; margin: 0 0 100px 0; top: 0;}
#buzos-modelos .grafico-contenido .nombre{display: block; width: 60%; height: 30px; background: transparent; font-size: 25px; font-weight: 500; border: 0;}
#buzos-modelos .grafico-contenido .btn{display: block; width: 130px; height: 30px; margin: 0; background-color: #5724ba; border-radius: 15px; font-size: 9.5px; font-weight: 700; color: #FFF; text-align: center; line-height: 30px; cursor: pointer; z-index: 2;}
#buzos-modelos .grafico-contenido .btn-posiciones{display: none; width: 100px; height: 30px; margin: 0; background-color: #000; border-radius: 15px; font-size: 9.5px; font-weight: 700; color: #FFF; text-align: center; line-height: 30px; margin-top: 10px; cursor: pointer; z-index: 2;}
#buzos-modelos .grafico-contenido .deshacer-row{display: inline-block; margin: 15px 0 0 0; z-index: 2;}
#buzos-modelos .grafico-contenido .deshacer-row .deshacer-paso{display: none; float: left; cursor: pointer;}
#buzos-modelos .grafico-contenido .deshacer-row .deshacer-todo{display: block; float: left; margin-left: 0; cursor: pointer;}
#buzos-modelos .grafico-contenido .thumb-frente{position: absolute; display: none; width: 14%; top: 3%; right: 9%; cursor: pointer;}
#buzos-modelos .grafico-contenido .thumb-dorso{position: absolute; width: 14%; top: 3%; right: 9%; cursor: pointer;}
#buzos-modelos .grafico-contenido .ico-vuelta{position: absolute; width: 24%; top: 14%; right: 4%; cursor: pointer;}
#buzos-modelos .grafico-contenido .frente{display: block; width: 73%; padding-bottom: 90%; margin: 0 auto;}
#buzos-modelos .grafico-contenido .frente .lineas{position: absolute; display: block; max-width: 100%; z-index: 2;}
#buzos-modelos .grafico-contenido .borde-base {display: block; position: absolute; left: 0; bottom: 0; width: 100%; height: 16px; background-image: url('../im/detalle-borde1.svg'); background-position: center top; background-repeat: repeat-x;}
#buzos-modelos .grafico-contenido .dorso{display: none; width: 73%; padding-bottom: 90%; margin: 0 auto;}
#buzos-modelos .grafico-contenido .dorso .lineas{position: absolute; display: block; max-width: 100%; z-index: 2;}
#buzos-modelos .inner .row-btn .btn-completo-mobile{display: none}

.over-partes{position: absolute; cursor: pointer; z-index: 3;}

.btn-mano-mobile{display: none;}

.grafico-contenido-contacto{margin-top: 0!important;}

.partes-blanco{position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 0.3s;}
.partes-tramas{position: relative}
.partes-mask{opacity: 0; display: inline-block; position: absolute; width: 100%; right: 0; top: 0; -webkit-mask-size: 100% auto; -webkit-mask-repeat:no-repeat; -webkit-mask-position:0 0; transition: all 0.3s;}
.partes-mask img{width: 100%;}

.modelo1-manga1-degrade1{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-manga2-degrade1{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-frente1-degrade1{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-frente2-degrade1{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-cuello-degrade1{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-bolsillos-degrade1{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-manga1-degrade1{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-manga2-degrade1{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-cuello-degrade1{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-espalda-degrade1{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-manga1-degrade2{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-manga2-degrade2{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-frente1-degrade2{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-frente2-degrade2{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-cuello-degrade2{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-bolsillos-degrade2{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-manga1-degrade2{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-manga2-degrade2{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-cuello-degrade2{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-espalda-degrade2{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-manga1-degrade3{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-manga2-degrade3{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-frente1-degrade3{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-frente2-degrade3{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-cuello-degrade3{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-bolsillos-degrade3{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-manga1-degrade3{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-manga2-degrade3{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-cuello-degrade3{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-espalda-degrade3{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-manga1-degrade4{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-manga2-degrade4{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-frente1-degrade4{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-frente2-degrade4{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-cuello-degrade4{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-bolsillos-degrade4{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-manga1-degrade4{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-manga2-degrade4{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-cuello-degrade4{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-espalda-degrade4{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-manga1-degrade5{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-manga2-degrade5{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-frente1-degrade5{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-frente2-degrade5{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-cuello-degrade5{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-bolsillos-degrade5{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-manga1-degrade5{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-manga2-degrade5{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-cuello-degrade5{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-espalda-degrade5{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-manga1-degrade6{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-manga2-degrade6{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-frente1-degrade6{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-frente2-degrade6{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-cuello-degrade6{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-bolsillos-degrade6{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-manga1-degrade6{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-manga2-degrade6{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-cuello-degrade6{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-espalda-degrade6{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-manga1-degrade7{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-manga2-degrade7{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-frente1-degrade7{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-frente2-degrade7{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-cuello-degrade7{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-bolsillos-degrade7{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-manga1-degrade7{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-manga2-degrade7{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-cuello-degrade7{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-espalda-degrade7{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}

.modelo1-manga1-trama1{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-manga2-trama1{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-frente1-trama1{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-frente2-trama1{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-cuello-trama1{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-bolsillos-trama1{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-manga1-trama1{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-manga2-trama1{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-cuello-trama1{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}
.modelo1-dorso-espalda-trama1{opacity: 0; position: absolute; width: 100%; height: auto; right: 0; top: 0; transition: all 1s;}

.color-pleno-1{color: #4b4c80!important;}
.color-borde-1{-webkit-text-stroke-color: #4b4c80!important;}
.color-pleno-2{color: #6265a3!important;}
.color-borde-2{-webkit-text-stroke-color: #6265a3!important;}
.color-pleno-3{color: #b1b4da!important;}
.color-borde-3{-webkit-text-stroke-color: #b1b4da!important;}
.color-pleno-4{color: #b25295!important;}
.color-borde-4{-webkit-text-stroke-color: #b25295!important;}
.color-pleno-5{color: #fc5cad!important;}
.color-borde-5{-webkit-text-stroke-color: #fc5cad!important;}
.color-pleno-6{color: #d26eaa!important;}
.color-borde-6{-webkit-text-stroke-color: #d26eaa!important;}
.color-pleno-7{color: #dc80b4!important;}
.color-borde-7{-webkit-text-stroke-color: #dc80b4!important;}
.color-pleno-8{color: #e7abcd!important;}
.color-borde-8{-webkit-text-stroke-color: #e7abcd!important;}
.color-pleno-9{color: #f9b9b4!important;}
.color-borde-9{-webkit-text-stroke-color: #f9b9b4!important;}
.color-pleno-10{color: #f9d9e4!important;}
.color-borde-10{-webkit-text-stroke-color: #f9d9e4!important;}
.color-pleno-11{color: #f6ebda!important;}
.color-borde-11{-webkit-text-stroke-color: #f6ebda!important;}
.color-pleno-12{color: #fbcc91!important;}
.color-borde-12{-webkit-text-stroke-color: #fbcc91!important;}
.color-pleno-13{color: #ec4750!important;}
.color-borde-13{-webkit-text-stroke-color: #ec4750!important;}
.color-pleno-14{color: #d48432!important;}
.color-borde-14{-webkit-text-stroke-color: #d48432!important;}
.color-pleno-15{color: #ee5f32!important;}
.color-borde-15{-webkit-text-stroke-color: #ee5f32!important;}
.color-pleno-16{color: #e2263b!important;}
.color-borde-16{-webkit-text-stroke-color: #e2263b!important;}
.color-pleno-17{color: #cc526d!important;}
.color-borde-17{-webkit-text-stroke-color: #cc526d!important;}
.color-pleno-18{color: #752142!important;}
.color-borde-18{-webkit-text-stroke-color: #752142!important;}
.color-pleno-19{color: #6d2232!important;}
.color-borde-19{-webkit-text-stroke-color: #6d2232!important;}
.color-pleno-20{color: #441f3a!important;}
.color-borde-20{-webkit-text-stroke-color: #441f3a!important;}
.color-pleno-21{color: #0a2333!important;}
.color-borde-21{-webkit-text-stroke-color: #0a2333!important;}
.color-pleno-22{color: #0c283f!important;}
.color-borde-22{-webkit-text-stroke-color: #0c283f!important;}
.color-pleno-23{color: #50649b!important;}
.color-borde-23{-webkit-text-stroke-color: #50649b!important;}
.color-pleno-24{color: #384e78!important;}
.color-borde-24{-webkit-text-stroke-color: #384e78!important;}
.color-pleno-25{color: #313bb5!important;}
.color-borde-25{-webkit-text-stroke-color: #313bb5!important;}
.color-pleno-26{color: #859da8!important;}
.color-borde-26{-webkit-text-stroke-color: #859da8!important;}
.color-pleno-27{color: #767cb4!important;}
.color-borde-27{-webkit-text-stroke-color: #767cb4!important;}
.color-pleno-28{color: #52d5db!important;}
.color-borde-28{-webkit-text-stroke-color: #52d5db!important;}
.color-pleno-29{color: #a4c5da!important;}
.color-borde-29{-webkit-text-stroke-color: #a4c5da!important;}
.color-pleno-30{color: #cce7f6!important;}
.color-borde-30{-webkit-text-stroke-color: #cce7f6!important;}
.color-pleno-31{color: #d0eae3!important;}
.color-borde-31{-webkit-text-stroke-color: #d0eae3!important;}
.color-pleno-32{color: #7fe5e5!important;}
.color-borde-32{-webkit-text-stroke-color: #7fe5e5!important;}
.color-pleno-35{color: #aeee44!important;}
.color-borde-35{-webkit-text-stroke-color: #aeee44!important;}
.color-pleno-36{color: #b0c480!important;}
.color-borde-36{-webkit-text-stroke-color: #b0c480!important;}
.color-pleno-37{color: #62cc95!important;}
.color-borde-37{-webkit-text-stroke-color: #62cc95!important;}
.color-pleno-38{color: #48997a!important;}
.color-borde-38{-webkit-text-stroke-color: #48997a!important;}
.color-pleno-39{color: #4a8a99!important;}
.color-borde-39{-webkit-text-stroke-color: #4a8a99!important;}
.color-pleno-40{color: #4a7c4b!important;}
.color-borde-40{-webkit-text-stroke-color: #4a7c4b!important;}
.color-pleno-41{color: #324441!important;}
.color-borde-41{-webkit-text-stroke-color: #324441!important;}
.color-pleno-42{color: #c2d19d!important;}
.color-borde-42{-webkit-text-stroke-color: #c2d19d!important;}
.color-pleno-43{color: #ab9370!important;}
.color-borde-43{-webkit-text-stroke-color: #ab9370!important;}
.color-pleno-44{color: #efc867!important;}
.color-borde-44{-webkit-text-stroke-color: #efc867!important;}
.color-pleno-45{color: #ffda40!important;}
.color-borde-45{-webkit-text-stroke-color: #ffda40!important;}
.color-pleno-46{color: #f9eaac!important;}
.color-borde-46{-webkit-text-stroke-color: #f9eaac!important;}
.color-pleno-47{color: #ffffff!important;}
.color-borde-47{-webkit-text-stroke-color: #ffffff!important;}
.color-pleno-48{color: #fffff5!important;}
.color-borde-48{-webkit-text-stroke-color: #fffff5!important;}
.color-pleno-49{color: #cecece!important;}
.color-borde-49{-webkit-text-stroke-color: #cecece!important;}
.color-pleno-50{color: #b9b9b9!important;}
.color-borde-50{-webkit-text-stroke-color: #b9b9b9!important;}
.color-pleno-51{color: #cec8ba!important;}
.color-borde-51{-webkit-text-stroke-color: #cec8ba!important;}
.color-pleno-52{color: #c4c4c4!important;}
.color-borde-52{-webkit-text-stroke-color: #c4c4c4!important;}
.color-pleno-53{color: #514d46!important;}
.color-borde-53{-webkit-text-stroke-color: #514d46!important;}
.color-pleno-54{color: #b7b7b7!important;}
.color-borde-54{-webkit-text-stroke-color: #b7b7b7!important;}
.color-pleno-55{color: #606060!important;}
.color-borde-55{-webkit-text-stroke-color: #606060!important;}
.color-pleno-56{color: #070707!important;}
.color-borde-56{-webkit-text-stroke-color: #070707!important;}

.texto-borde{-webkit-text-stroke-width: 2px;}

.color-degrade-1{color: url(#degrade_1) #ec6907;}
.color-degrade-2{color: url(#degrade_2) #0071bc;}
.color-degrade-3{color: url(#degrade_3) #2e2757;}
.color-degrade-4{color: url(#degrade_4) #0071bc;}

.degrade-1{background-image: url('../im/degrade1.png');}
.degrade-2{background-image: url('../im/degrade2.png');}
.degrade-3{background-image: url('../im/degrade3.png');}
.degrade-4{background-image: url('../im/degrade4.png');}
.degrade-5{background-image: url('../im/degrade5.png');}
.degrade-6{background-image: url('../im/degrade6.png');}
.degrade-7{background-image: url('../im/degrade7.png');}

.font-degrade-1{
background: -webkit-linear-gradient(#ec6907, #0078c1);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
}
.font-degrade-2{
background: -webkit-linear-gradient(#0071bc, #009c3d);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
}
.font-degrade-3{
background: -webkit-linear-gradient(#2e2757, #f15a24);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
}
.font-degrade-4{
background: -webkit-linear-gradient(#0071bc, #fcee21);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
}


.trama-1{background-image: url('../uploads/15532553172.jpg');}
.font-trama-1 p{background: url(../uploads/1553259771-trama.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-2{background-image: url('../uploads/15532553302.jpg');}
.font-trama-2 p{background: url(../uploads/1553259827-trama.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-3{background-image: url('../uploads/15532553442.jpg');}
.font-trama-3 p{background: url(../uploads/1553259874-trama.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-4{background-image: url('../uploads/15532553562.jpg');}
.font-trama-4 p{background: url(../uploads/1553260165-trama.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-5{background-image: url('../uploads/15532553702.jpg');}
.font-trama-5 p{background: url(../uploads/1553260189-trama.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-6{background-image: url('../uploads/15532553872.jpg');}
.font-trama-6 p{background: url(../uploads/trama6.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-7{background-image: url('../uploads/15532554002.jpg');}
.font-trama-7 p{background: url(../uploads/trama7.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-8{background-image: url('../uploads/15532556472.jpg');}
.font-trama-8 p{background: url(../uploads/1553255501.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-9{background-image: url('../uploads/15532555322.jpg');}
.font-trama-9 p{background: url(../uploads/trama9.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-10{background-image: url('../uploads/15532556272.jpg');}
.font-trama-10 p{background: url(../uploads/trama10.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-11{background-image: url('../uploads/15532556692.jpg');}
.font-trama-11 p{background: url(../uploads/trama11.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-12{background-image: url('../uploads/15532556992.jpg');}
.font-trama-12 p{background: url(../uploads/trama12.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-13{background-image: url('../uploads/15532557162.jpg');}
.font-trama-13 p{background: url(../uploads/trama13.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-14{background-image: url('../uploads/15532557322.jpg');}
.font-trama-14 p{background: url(../uploads/trama14.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-15{background-image: url('../uploads/15532557512.jpg');}
.font-trama-15 p{background: url(../uploads/trama15.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-16{background-image: url('../uploads/15532557772.jpg');}
.font-trama-16 p{background: url(../uploads/trama16.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-17{background-image: url('../uploads/15532557942.jpg');}
.font-trama-17 p{background: url(../uploads/trama17.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-18{background-image: url('../uploads/15532558082.jpg');}
.font-trama-18 p{background: url(../uploads/trama18.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-19{background-image: url('../uploads/15532558262.jpg');}
.font-trama-19 p{background: url(../uploads/trama19.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-20{background-image: url('../uploads/15532558602.jpg');}
.font-trama-20 p{background: url(../uploads/1553256541.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-21{background-image: url('../uploads/15532558782.jpg');}
.font-trama-21 p{background: url(../uploads/trama21.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-22{background-image: url('../uploads/15532558992.jpg');}
.font-trama-22 p{background: url(../uploads/trama22.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-23{background-image: url('../uploads/15532559222.jpg');}
.font-trama-23 p{background: url(../uploads/trama23.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-24{background-image: url('../uploads/15532559432.jpg');}
.font-trama-24 p{background: url(../uploads/trama24.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-25{background-image: url('../uploads/15532559592.jpg');}
.font-trama-25 p{background: url(../uploads/trama25.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-26{background-image: url('../uploads/15532559752.jpg');}
.font-trama-26 p{background: url(../uploads/trama26.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-27{background-image: url('../uploads/15532559932.jpg');}
.font-trama-27 p{background: url(../uploads/trama27.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-28{background-image: url('../uploads/15532560112.jpg');}
.font-trama-28 p{background: url(../uploads/1553256752.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-29{background-image: url('../uploads/15532560292.jpg');}
.font-trama-29 p{background: url(../uploads/trama29.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-30{background-image: url('../uploads/15532560462.jpg');}
.font-trama-30 p{background: url(../uploads/trama30.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}
.trama-31{background-image: url('../uploads/15532560622.jpg');}
.font-trama-31 p{background: url(../uploads/trama31.png) no-repeat center center; background-size: cover; color: #fff; -webkit-text-fill-color: transparent; -webkit-background-clip: text;}

.texto-ubicacion{position: absolute; width: 3vw; height: 3vw; border-radius: 1.5vw; background-color: #000; font-size: 1.5vw; line-height: 2.8vw; text-align: center; color: #FFF; cursor: pointer; z-index: 3;}
.texto-ubicacion p{position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%); margin: 0;}
.texto-ubicacion p .borrar{display: none; position: absolute; top: -5px; right: -25px;}

/*.texto-ubicacion:hover{opacity: 1}*/
.texto-ubicacion-seleccionado{background-color: #FFFF00; color: #000;}
.texto-ubicacion-final{position: absolute; width: 3vw; height: 3vw; font-size: 1.5vw; line-height: 2.8vw; text-align: center; z-index: 3;}
.texto-ubicacion-final p{position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%); margin: 0;}



.ubicacion-texto{width: auto; min-width: 3vw; border-radius: 0; background-color: transparent; font-size: 1.5vw; line-height: 2.8vw; text-align: center; color: #000;}

#buzos-modelos .opciones-contenido{display: inline-block; width: calc(32% + 20px); padding-right: 20px; float: right; margin: 0; overflow-y: scroll;}
#buzos-modelos .opciones-contenido .titulo-columna{display: inline-block; font-size: 18px; font-weight: 600; color: #2c2b2d; padding-bottom: 8px; border-bottom: 1px solid #2c2b2d; margin-bottom: 10px;}
#buzos-modelos .opciones-contenido .lista-titulo-todo{display: inline-block; font-size: 16px; font-weight: 600; color: #2c2b2d; line-height: 25px; border: 1px solid #2c2b2d; padding: 0 8px;}
#buzos-modelos .opciones-contenido .lista-titulo{display: inline-block; font-size: 16px; font-weight: 600; color: #2c2b2d; line-height: 25px; background-image: url('../im/partes-buzo-partes2.svg'); background-repeat: no-repeat; background-position: right center; padding-right: 12px;}
#buzos-modelos .opciones-contenido .lista-titulo-sin-sub{background: none;}
#buzos-modelos .opciones-contenido .titulo-columna-flecha{display: none;}
#buzos-modelos .opciones-contenido .lista-opcion{display: inline-block; font-size: 16px; font-weight: 500; color: #2c2b2d; line-height: 20px;}
#buzos-modelos .opciones-contenido .cursor{cursor: pointer;transition: all 0.3s;}
#buzos-modelos .opciones-contenido .cursor:hover{color: #5724ba;}
#buzos-modelos .opciones-contenido .seleccionado{color: #5724ba; text-decoration: underline}
#buzos-modelos .opciones-contenido .color-seleccionado{display: inline-block; width: 100%; font-size: 16px; font-weight: 500; line-height: 40px;}

#buzos-modelos .opciones-contenido .colores{display: inline-block; float: left; width: calc(100% - 30px); height: 110px; margin-bottom: 10px; overflow-y: hidden; overflow-x: scroll;}
#buzos-modelos .opciones-contenido .colores .wrapper{position: absolute; display: inline-block; top: 0; left: 0; display: inline-block; height: 105px;}
#buzos-modelos .opciones-contenido .colores .wrapper .columna{display: inline-block; float: left; width: 39px; height: 105px;}
#buzos-modelos .opciones-contenido .colores .color{display: block; width: 32px; height: 32px; border-radius: 16px; margin: 0 7px 18px 0; cursor: pointer; border: 1px solid #999;}

#buzos-modelos .opciones-contenido .flecha{display: inline-block; float: right; width: 30px; height: 110px; top: 0; right: 0; background-color: #FFF; background-image: url('../im/btn-color.svg'); background-repeat: no-repeat; background-position: center 32px; background-size: 24px auto; cursor: pointer;}
#buzos-modelos .opciones-contenido .degrades{display: inline-block; width: 100%; margin-bottom: 10px;}

#buzos-modelos .opciones-contenido .estampados{display: inline-block; width: calc(100% - 30px); height: 180px; margin-bottom: 10px; overflow-y: hidden; overflow-x: scroll;}
#buzos-modelos .opciones-contenido .estampados .wrapper{position: absolute; display: inline-block; top: 0; left: 0; display: inline-block; height: 190px;}
#buzos-modelos .opciones-contenido .estampados .wrapper .columna{display: inline-block; float: left; width: 72px; height: 190px;}
#buzos-modelos .opciones-contenido .estampados .estampado{display: block; width: 60px; height: 60px; border-radius: 16px; margin: 0 0 14px 0; cursor: pointer; background-repeat: no-repeat; background-position: center; background-size: cover;  border: 1px solid #999}
#buzos-modelos .opciones-contenido .estampados-flecha{display: inline-block; float: right; width: 30px; height: 180px; top: 0; right: 0; background-color: #FFF; background-image: url('../im/btn-color.svg'); background-repeat: no-repeat; background-position: center 52px; background-size: 24px auto; cursor: pointer;}

#buzos-modelos .opciones-contenido .degrades .degrade{display: block; float: left; width: 32px; height: 32px; border-radius: 16px; margin: 0 7px 18px 0; background-repeat: no-repeat; background-position: center; background-size: cover; cursor: pointer; border: 1px solid #999}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: #FFF;
  font-size: 11px;
  color: #2c2b2d;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  bottom: 95%;
  left: calc(50% - 1px);
  margin-left: -60px;
  opacity: 0;
  transition: opacity 0.3s;
  border: 1px solid #EAEAEA;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #FFF transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}

.tooltip2 .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: #FFF;
  font-size: 11px;
  color: #2c2b2d;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  top: 80%;
  left: calc(50% - 1px);
  margin-left: -60px;
  opacity: 0;
  transition: opacity 0.3s;
  border: 1px solid #EAEAEA;
}

.tooltip2 .tooltiptext::after {
  content: "▲";
  color: #FFF;
  position: absolute;
  bottom: calc(100% - 2px);
  left: 50%;
  margin-left: -5px;
}

.tooltip2:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}


.tooltip3 .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: #FFF;
  font-size: 11px;
  color: #2c2b2d;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  top: 45%;
  left: calc(50% - 1px);
  margin-left: -60px;
  opacity: 0;
  transition: opacity 0.3s;
  border: 1px solid #EAEAEA;
}
.tooltip3:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}


#buzos-modelos .opciones-contenido .row-tipografias{display: block; width: 100%;}
#buzos-modelos .opciones-contenido .row-tipografias input[type="text"]{display: inline-block; float: left; width: 52%; height: 40px; border: 0; border-bottom: 1px dashed #1d1d1d; font-size: 16px; font-weight: 300; font-style: italic; margin-top: 10px}
#buzos-modelos .opciones-contenido .row-tipografias select{display: none; float: right; width: 42%; height: 34px; font-size: 15px; margin-top: 18px;}
#buzos-modelos .opciones-contenido .row-tipografias select option{height: 34px;}
#buzos-modelos .opciones-contenido .row-tipografias .font1{font-family: 'Andale Mono', sans-serif;}
#buzos-modelos .opciones-contenido .row-tipografias .normal{font-style: normal!important;}

#tipografias-aplique{display: none;}
#tipografias-bordado{display: none;}

#buzos-modelos .grafico-final{display: inline-block; width: 100%; float: left; padding: 34px 34px 50px 34px; background-color: #f2f2f2; margin: 0 0 38px 0; background-image: url('../im/paso4-bg.svg'); background-repeat: no-repeat; background-size: 100% auto; background-position: center;}
#buzos-modelos .grafico-final .logo{display: block; position: absolute; top: 60px; left: 55px;}
#buzos-modelos .grafico-final .nombre{display: block; font-size: 25px; font-weight: 500;}
#buzos-modelos .grafico-final .grafico1{display: inline-block; float: left; width: 43%; padding-bottom: 53%; margin: 2% 0 0 4%;}
#buzos-modelos .grafico-final .grafico1 .lineas{position: absolute; display: block; max-width: 100%; z-index: 2;}
#buzos-modelos .grafico-final .grafico2{display: block; float: right; width: 43%; padding-bottom: 53%; margin: 2% 4% 0 0;}
#buzos-modelos .grafico-final .grafico2 .lineas{position: absolute; display: block; max-width: 100%; z-index: 2;}

#buzos-modelos .row-social{display: inline-block; width: 100%;}
#buzos-modelos .row-social .compartir{display: block; margin: 0 auto; font-size: 20px; font-weight: 700; color: #f7df03; text-align: center; max-width: 540px;}
#buzos-modelos .row-social .compartir .social-icon{vertical-align: middle; margin: -2px 5px 0 5px; cursor: pointer;}
#buzos-modelos .row-social .compartir .descarga-icon{margin-left: 10px;}
#buzos-modelos .row-social .compartir .separador{display: inline-block; width: 2px; height: 40px; background-color: #000; margin: 0 20px -12px 5px;}
#buzos-modelos .row-social .botones{display: inline-block; width: 275px; float: right; margin-top: -38px;}
#buzos-modelos .row-social .botones .btn-cotizar{display: block; float: right; width: 215px; height: 50px; background-color: #5724ba; border-radius: 25px; font-size: 20px; font-weight: 700; color: #FFF; text-align: center; line-height: 50px; cursor: pointer; z-index: 2; border: 0;}
#buzos-modelos .row-social .botones .btn-whatsapp{display: block; float: right; width: 330px; height: 50px; margin: 18px 0 0 0; background-color: #f7df03; border-radius: 25px; font-size: 20px; font-weight: 700; color: #000; text-align: center; line-height: 50px; cursor: pointer; z-index: 2; border: 0; background-image: url('../im/cotiza-btn-whatsapp.svg'); background-repeat: no-repeat; background-position: 18px center; padding-left: 30px;}

.ubicaciones-bordado-frente{display: none; position: absolute; width: 100%; height: 100%; top: 0; left: 0;}
.ubicaciones-bordado-dorso{display: none; position: absolute; width: 100%; height: 100%; top: 0; left: 0;}

.ubicaciones-aplique-frente{display: none; position: absolute; width: 100%; height: 100%; top: 0; left: 0;}
.ubicaciones-aplique-dorso{display: none; position: absolute; width: 100%; height: 100%; top: 0; left: 0;}

#paso2-color{display: none;}
#paso3-lugar{display: none;}
#paso3-palabra{display: none;}
#paso3-color-bordado{display: none; width: 100%;}
#paso3-color-aplique{display: none; width: 100%;}
#aplique-relleno-pleno{display: none;}
#aplique-relleno-estampado{display: none;}
#aplique-borde-pleno{display: none;}

.paso2-punto3-mobile{display: none; float: left; border: 0; margin-bottom: 0;font-weight: 600; color: #2c2b2d; padding-bottom: 8px;}
.paso2-punto3-mobile span{color: #5724ba; text-decoration: underline;}

.swiper-container {
      width: 100%;
      height: auto;
      margin-left: auto;
      margin-right: auto;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      height: 200px;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }

#bg_diseno_popup{display: none; position: fixed; width: 100%; height: 100%; background-color: rgba(255,255,255,0.8); top: 0; left: 0; z-index: 99999;}

#bg_diseno_popup .grafico-final{display: table; width: calc(100% - 356px); padding: 34px 34px 50px 34px; background-color: #f2f2f2; margin: 100px auto 0 auto; background-image: url('../im/paso4-bg.svg'); background-repeat: no-repeat; background-size: 100% auto; background-position: center;}
#bg_diseno_popup .grafico-final .logo{display: block; position: absolute; top: 7%; left: 4%; width: 11.8%; height: auto;}
#bg_diseno_popup .grafico-final .nombre{display: block; font-size: 25px; font-weight: 500;}
#bg_diseno_popup .grafico-final .grafico1{display: inline-block; float: left; width: 43%; padding-bottom: 53%; margin: 2% 0 0 4%;}
#bg_diseno_popup .grafico-final .grafico1 .lineas{position: absolute; display: block; width: 100%; z-index: 2;}
#bg_diseno_popup .grafico-final .grafico2{display: block; float: right; width: 43%; padding-bottom: 53%; margin: 2% 4% 0 0;}
#bg_diseno_popup .grafico-final .grafico2 .lineas{position: absolute; display: block; width: 100%; z-index: 2;}
#bg_diseno_popup .grafico-final .btn-cerrar{position: absolute; top: 7%; right: 4%; width: 3.2%; height: auto; cursor: pointer;}

#whatsapp-mobile{display: none; position: fixed; width: 50px; height: 50px; bottom: 21px; right: 14px; background-image: url('../im/whatsapp-mobile.svg'); background-repeat: no-repeat; z-index: 9999;}
.colores-mobile{display: none}
#popup-textos{display: none;}
#aplique-font-1-mobile{display: none;}
#aplique-font-2-mobile{display: none;}
#popup-textos .btn{display: block; float: right; margin: 30px 0 0 0; width: calc(50% - 10px); height: 40px; background-color: #f7df03; border-radius: 25px; font-size: 14px; font-weight: 700; color: #000; text-align: center; line-height: 40px; cursor: pointer; z-index: 2; border: 0;}
.colores-flecha-mobile{display: none;}
.colores-flecha-mobile2{display: none;}

@media screen and (min-width:1280px) and (max-width: 1800px){
	#header .base{background-image: url('../im/header-bg-1440.svg');}
	.base-scroll{background-image: url('../im/header-bg-scroll-1440.svg')!important;}
	#footer .borde1{background-image: url('../im/footer-borde1-1440.svg');}
	#tx-inicio .base{background-image: url('../im/header-bg-1440.svg');}
	#inicio-separador{background-image: url('../im/home-separador-1440.svg');}
	#inicio-modulo2{margin-top: -40px;}
	#inicio-modulo4 .borde1{background-image: url('../im/home-contacto-borde1-1440.svg');}
	#inicio-modulo4 .borde2{background-image: url('../im/home-contacto-borde2-1440.svg');}

	#menu .blanco .contenido a{font-size: 3vw; line-height: 5vw;}
	#tx-inicio .contenido .inicio .ilus{right: 100px;}
	#tx-inicio .contenido .inicio h1 {font-size: 3vw; margin: 0 0 0 135px;}

	#inicio-modulo2 .contenido .modulos .modulo .tx{font-size: 18px;}
	#inicio-modulo2 .contenido .modulos .modulo .inicio-pasos-4 {margin: 30px auto 20px auto;}
	#inicio-modulo4 .contenido .inner .ilus{width: 22%; margin-left: 6%;}
	#inicio-modulo4 .contenido .inner .tx {font-size: 2.2vw;}
	#inicio-modulo4 .contenido .inner .tx a{font-size: 1.8vw;}
	#inicio-modulo4 .contenido .inner .tx a strong{font-size: 1.8vw;}
	#inicio-modulo4 .contenido .inner .whatsapp {width: 60px; height: 60px; margin-top: 55px;margin-right: 6%;}

	#tu-buzo-cabecera .contenido .modulos .modulo .tx{font-size: 18px;}
	#tu-buzo-cabecera .contenido .modulos .modulo .inicio-pasos-4 {margin: 30px auto 20px auto;}
	#tu-buzo-cabecera .contenido .modulos{width: calc(100% + 21px); margin: 0 0 50px -21px;}
	#tu-buzo-cabecera .contenido .modulos .modulo{width: calc(25% - 21px); min-height: 400px; margin: 0 0 0 21px; padding: 12px 18px;}
	#tu-buzo-cabecera .contenido .modulos .modulo .linea1{display: block; position: absolute; width: calc(100% - 36px); height: 1px; top: 10px; left: 18px; border-bottom: 2px dashed #000;}
	#tu-buzo-cabecera .contenido .modulos .modulo .linea2{display: block; position: absolute; width: calc(100% - 36px); height: 1px; bottom: 10px; left: 18px; border-bottom: 2px dashed #000;}
	#tu-buzo-cabecera .contenido .modulos .modulo .nro{display: block; font-size: 2.5vw; font-weight: 600; line-height: 2.5vw; text-align: center; margin: 10px 0;}
	#tu-buzo-cabecera .contenido .modulos .modulo .inicio-pasos-1{display: block; margin: 0 auto 14px auto; max-width: 100%}
	#tu-buzo-cabecera .contenido .modulos .modulo .inicio-pasos-2{display: block; margin: 20px auto 30px auto; max-width: 100%}
	#tu-buzo-cabecera .contenido .modulos .modulo .inicio-pasos-3{display: block; margin: 30px auto 26px auto; max-width: 100%}
	#tu-buzo-cabecera .contenido .modulos .modulo .inicio-pasos-4{display: block; margin: 30px auto 40px auto; max-width: 100%}
	#tu-buzo-cabecera .contenido .modulos .modulo .tx{display: block; font-size: 18px; font-weight: 500; text-align: center; margin: 10px 0;}


	#inicio-modulo1 .contenido .tx {width: 340px;}
	#inicio-modulo1 .contenido .tx h2{font-size: 2.2vw;}
	#inicio-modulo1 .contenido .tx p{font-size: 1.5vw; margin: 10px 0;}
	#inicio-modulo1 .contenido .tx .btn {width: 150px; height: 40px; border-radius: 20px; font-size: 15px; line-height: 40px; margin-top: 10px;}
	#inicio-modulo1 .contenido img{width: calc(100% - 380px);}

	#inicio-modulo2 .contenido h3{font-size: 2.2vw;}
	#inicio-modulo2 .contenido p{font-size: 1.5vw; margin: 10px 0;}

	#inicio-modulo2 .contenido .modulos{width: calc(100% + 21px); margin: 50px 0 50px -21px;}
	#inicio-modulo2 .contenido .modulos .modulo{width: calc(25% - 21px); min-height: 385px; margin: 0 0 0 21px; padding: 12px 18px;}
	#inicio-modulo2 .contenido .modulos .modulo .linea1{display: block; position: absolute; width: calc(100% - 36px); height: 1px; top: 10px; left: 18px; border-bottom: 2px dashed #000;}
	#inicio-modulo2 .contenido .modulos .modulo .linea2{display: block; position: absolute; width: calc(100% - 36px); height: 1px; bottom: 10px; left: 18px; border-bottom: 2px dashed #000;}
	#inicio-modulo2 .contenido .modulos .modulo .nro{display: block; font-size: 2.5vw; font-weight: 600; line-height: 2.5vw; text-align: center; margin: 10px 0;}
	#inicio-modulo2 .contenido .modulos .modulo .inicio-pasos-1{display: block; margin: 0 auto 14px auto; max-width: 100%}
	#inicio-modulo2 .contenido .modulos .modulo .inicio-pasos-2{display: block; margin: 20px auto 30px auto; max-width: 100%}
	#inicio-modulo2 .contenido .modulos .modulo .inicio-pasos-3{display: block; margin: 30px auto 26px auto; max-width: 100%}
	#inicio-modulo2 .contenido .modulos .modulo .inicio-pasos-4{display: block; margin: 30px auto 40px auto; max-width: 100%}
	#inicio-modulo2 .contenido .modulos .modulo .tx{display: block; font-size: 18px; font-weight: 500; text-align: center; margin: 10px 0;}
	#inicio-modulo2 .contenido .btn{width: 150px; height: 40px; border-radius: 20px; font-size: 15px; line-height: 40px;}

	#footer .contenido .inner {padding: 0 40px 60px 40px;}
	#footer .contenido .consulta{width: 15%;}
	#footer .contenido .inner .copy{width: 15%; bottom: 30px; right: 75px;}

	.home-instagram-1920{display: none!important;}
	.home-instagram-1440{display: block!important; max-width: 1300px; margin: auto; margin-top: 50px;}
	#inicio-modulo3 .contenido .inner .thumbs {width: 40%; right: 10%; top: 0;}
	#inicio-modulo3 .contenido .inner .thumbs .thumb {width: 30%; padding-bottom: 30%;}
	#inicio-modulo3 .contenido .inner .thumbs .thumb2{margin-left: 5%;}
	#inicio-modulo3 .contenido .inner .thumbs .thumb3{margin-left: 5%;}
	#inicio-modulo3 .contenido .inner .thumbs .thumb4{margin-top: 5%;}
	#inicio-modulo3 .contenido .inner .thumbs .thumb5{margin-top: 5%;margin-left: 5%;}
	#inicio-modulo3 .contenido .inner .thumbs .thumb6{margin-top: 5%;margin-left: 5%;}
	#inicio-modulo3 .contenido .inner .thumbs .movil {max-width: 100px; bottom: -100px; right: -30px;}

	#slider-quienes-somos{height: 440px;}
	#quienes-somos .columna1{font-size: 2.5vw;}
	#quienes-somos .columna2 p{font-size: 1.3vw;}

	#tu-buzo-cabecera .inner {padding: 120px 178px 80px 178px;}
	#buzos-modelos .inner .titulo{font-size: 2vw;}
	#buzos-modelos .inner .tx{font-size: 1.4vw;}
	#buzos-modelos .inner .row .modulo .modelo{font-size: 14px;}
	#buzos-modelos .inner .row-btn .btn {width: 150px; height: 40px; border-radius: 20px; font-size: 15px; line-height: 40px;}

	#slider-productos{height: 440px;}
	#productos .columna1 .titulo{font-size: 2.5vw;}

	#detalle{margin: 200px auto 100px auto;}
	#detalle .info h1{font-size: 1.6vw;}
	#detalle .info p{font-size: 14px;}
	#detalle-relacionados .titulo{font-size: 1.3vw;}

	#contacto{margin: 200px auto 100px auto;}
	#contacto h1{font-size: 2vw;}
	#contacto .parrafo{font-size: 1.2vw; line-height: 1.5vw;}
	#contacto .columna1 p{font-size: 1.2vw; line-height: 1.5vw; margin-bottom: 30px;}
	#contacto .columna1 p a{font-size: 1.2vw; line-height: 1.5vw}
	#contacto .columna2 p{width: 70%; font-size: 1.2vw; line-height: 1.5vw; padding: 0 0 0 50px; background-size: 40px 40px; margin-bottom: 30px;}
	#contacto .columna2 p a{font-size: 1.2vw; line-height: 1.5vw}
	#contacto .campo input[type="text"]{font-size: 1.3vw; height: 46px}
	#contacto .campo input[type="email"]{font-size: 1.3vw; height: 46px}
	#contacto input[type="submit"]{position: absolute; bottom: -50px; height: 40px; border-radius: 20px; font-size: 15px; line-height: 40px;}
	#contacto .btn-adjunto{float: none; margin: 20px 0; font-size: 15px; background-size: 30px 30px;}
	#contacto .campo{height: 50px}
	#contacto .campo_margin {margin-bottom: 20px;}
	#contacto .campo_tx{font-size: 11px}
	#contacto input[type=file]{position: absolute; width: 100%; height: 50px; opacity: 0; left: 0; bottom: 0;}

	#buzos-modelos .row-social .botones .btn-cotizar{width: 170px; height: 40px; border-radius: 20px; font-size: 15px; line-height: 40px;}
	#buzos-modelos .row-social .botones .btn-whatsapp{width: 250px; height: 40px; border-radius: 20px; font-size: 15px; line-height: 40px;}

	#tu-buzo-cabecera .btn{height: 40px; border-radius: 20px; font-size: 15px; line-height: 40px; bottom: -25px;}
	#tu-buzo-cabecera-linea{height: 2px;}
	#buzos-modelos .grafico-final .logo{top: 40px; left: 40px; height: 110px;}

}
@media screen and (min-width:1280px) and (max-width: 1440px){
	.home-instagram-1920{display: none!important;}
	.home-instagram-1440{display: block!important; max-width: 1300px; margin: auto; margin-top: 50px;}
	#inicio-modulo3 .contenido .inner .thumbs {width: 40%; right: 10%; top: 8%;}
	#inicio-modulo3 .contenido .inner .thumbs .thumb {width: 30%; padding-bottom: 30%;}
	#inicio-modulo3 .contenido .inner .thumbs .thumb2{margin-left: 5%;}
	#inicio-modulo3 .contenido .inner .thumbs .thumb3{margin-left: 5%;}
	#inicio-modulo3 .contenido .inner .thumbs .thumb4{margin-top: 5%;}
	#inicio-modulo3 .contenido .inner .thumbs .thumb5{margin-top: 5%;margin-left: 5%;}
	#inicio-modulo3 .contenido .inner .thumbs .thumb6{margin-top: 5%;margin-left: 5%;}
	#inicio-modulo3 .contenido .inner .thumbs .movil {max-width: 80px; bottom: -10px; right: -50px;}
}
@media screen and (min-width:1024px) and (max-width: 1279px){

	#header .contenido .redes{display: none;}
	#menu .blanco .contenido a{font-size: 3vw; line-height: 5vw;}
	#header .base{margin-top: -4px;}

	#tx-inicio .contenido .inicio .ilus{width: 150px; right: 0;}
	#tx-inicio .contenido .inicio h1 {width: 65%; font-size: 4vw; margin: -45px 0 0 20px;}

	#inicio-modulo1 .contenido{padding: 0 60px;}
	#inicio-modulo1 .contenido .tx{width: 100%;}
	#inicio-modulo1 .contenido .tx h2{font-size: 3vw;}
	#inicio-modulo1 .contenido .tx p{font-size: 2vw; margin: 10px 0;}
	#inicio-modulo1 .contenido .tx .btn {width: 150px; height: 40px; border-radius: 20px; font-size: 15px; line-height: 40px;}
	#inicio-modulo1 .contenido img {width: 100%; float: none; margin-top: 20px;}

	#inicio-modulo2 .contenido{padding: 0 60px;}
	#inicio-modulo2 .contenido h3{font-size: 3vw;}
	#inicio-modulo2 .contenido p{font-size: 2vw; margin: 10px 0;}
	#inicio-modulo2 .contenido .modulos {display: table; margin: 50px auto 18px auto; max-width: 700px;}
	#inicio-modulo2 .contenido .modulos .modulo {width: calc(50% - 32px); margin-bottom: 32px;}

	#inicio-modulo3 .contenido .inner .thumbs .movil{max-width: 80px; bottom: -60px; right: -30px;}

	#inicio-modulo4 .contenido .inner .ilus{width: 30%;}
	#inicio-modulo4 .contenido .inner .tx {font-size: 3vw;}
	#inicio-modulo4 .contenido .inner .tx {position: relative; top: 40px; left: 0; transform: translate(0, 0); font-size: 3vw; float: right;}
	#inicio-modulo4 .contenido .inner .whatsapp {display: none;}

	#footer .contenido .inner{padding: 0 60px 50px 60px;}
	#footer .contenido .consulta{display: none;}
	#footer .contenido .inner .tresovejas {float: left; width: 160px; margin: auto;}
	#footer .contenido .inner .menu {display: table; position: relative; top: 0; left:0; transform: translateX(0); margin: 0 auto 0 auto; padding: 30px 0;}
	#footer .contenido .inner .copy {display: block; position: absolute; width: 100%;	height: 36px;	background-color: #FFF;  bottom: -10px; right: 0; font-size: 9px; line-height: 36px; text-align: center; font-weight: 400; color: #808080;}

	#quienes-somos .columna1{font-size: 3vw;}
	#quienes-somos .columna1 br{display: none}
	#quienes-somos .columna2 p{font-size: 2vw;}

	#buzos-modelos .inner .titulo{font-size: 3vw;}
	#buzos-modelos .inner .tx{font-size: 2vw;}

	#buzos-modelos .inner .row .modulo {width: 33.33%;}
	#buzos-modelos .inner .row-btn .btn {width: 150px; height: 40px; border-radius: 20px; font-size: 15px; line-height: 40px;}

	#productos .columna1 .titulo{font-size: 3vw;}
	#productos .columna1 .menu{margin-top: 40px}
	#productos .columna2 .modulo{width: calc(50% - 30px);}

	#detalle .info h1{font-size: 2vw;}

	#contacto h1{font-size: 3vw;}
	#contacto .columna1{width: calc(50% - 20px);}
	#contacto .columna2{width: calc(50% - 20px);}
	#contacto .columna1 p{font-size: 2vw;}
	#contacto .columna1 p a{font-size: 2vw;}
	#contacto .columna2 p{font-size: 2vw; padding: 0 0 0 50px; background-size: 40px 40px;}
	#contacto .columna2 p a{font-size: 2vw;}
	#contacto .campo input[type="text"]{font-size: 2vw; height: 40px}
	#contacto .campo input[type="email"]{font-size: 2vw; height: 40px}
	#contacto input[type="submit"]{position: absolute; bottom: -50px; height: 40px; border-radius: 20px; font-size: 15px; line-height: 40px;}
	#contacto .btn-adjunto{float: none; margin: 20px 0; font-size: 15px; background-size: 30px 30px;}
	#contacto .campo{height: 40px}
	#contacto .campo_margin {margin-bottom: 20px;}
	#contacto .campo_tx{font-size: 11px}

	#slider-quienes-somos {height: 400px;}
	#quienes-somos {margin: 70px auto 100px auto; padding: 0 60px;}
	#quienes-somos .columna1 {float: none; width: 100%;}
	#quienes-somos .columna2 {float: none; width: 100%; margin-top: 30px}
	#slider-productos{height: 400px;}
	#productos{margin: 70px auto 100px auto; padding: 0 60px;}
	#productos .columna1{width: 180px;}
	#productos .columna2{width: calc(100% - 190px);}
	#detalle{margin: 180px auto 100px auto; padding: 0 60px;}
	#detalle-relacionados{padding: 0 60px;}
	#detalle-relacionados .productos{width: calc(100% + 10px); margin: 40px 0 0 0;}
	#detalle-relacionados .productos .modulo{display: inline-block; width: 25%; float: none; margin: 0; padding: 0;}

	#tu-buzo-cabecera .inner{padding: 150px 60px 100px 60px;}
	#buzos-modelos .inner{padding: 0 60px 0 60px;}
	#buzos-modelos .opciones-contenido{width: 36%;}
	#buzos-modelos .row-social .botones .btn-cotizar{width: 175px; height: 40px; border-radius: 20px; font-size: 15px; line-height: 40px;}
	#buzos-modelos .row-social .botones .btn-whatsapp{width: 250px; height: 40px; border-radius: 20px; font-size: 15px; line-height: 40px;}
	#buzos-modelos .inner .row-btn{right: 60px;}
	#buzos-modelos .grafico-final .logo{top: 20px; left: 20px; width: 130px;}

	#contacto{padding: 0 60px;}
	#footer .contenido .inner .tresovejas {float: none; width: 125px; margin: auto;}
	#footer .contenido .inner .menu {display: table; position: relative; top: 0; left: 0; transform: translateX(0); margin: 30px auto 0 auto; padding: 30px 0; border-top: 1px solid #b7b7b7;}

	#menu .blanco .contenido .sociales{margin: 200px 0 0 0;}
	#menu .blanco .contenido .contacto{margin: 200px 0 0 30px;}
	#contacto{margin: 200px auto 100px auto;}
	#contacto .columna2 p{margin-bottom: 30px;}
	#productos .columna2 .modulo{width: calc(33.33% - 30px);}


	#tu-buzo-cabecera .contenido{padding: 0 60px;}
	#tu-buzo-cabecera .contenido .modulos{width: 100%; margin: 0;}
	#tu-buzo-cabecera .contenido .modulos .modulo{width: calc(25% - 30px); min-height: 320px; margin: 0 0 20px 20px;}
	#tu-buzo-cabecera .contenido .modulos .modulo .nro{font-size: 4vw; margin: 1vw 0 1vw 0;}
	#tu-buzo-cabecera .contenido .modulos .modulo .linea1{border-bottom: 1px dashed #000;}
	#tu-buzo-cabecera .contenido .modulos .modulo .linea2{border-bottom: 1px dashed #000;}
	#tu-buzo-cabecera .contenido .modulos .modulo .tx{position: absolute; width: 90%; bottom: 2vw; left: 50%; transform: translateX(-50%); font-size: 16px;}
	#tu-buzo-cabecera .contenido .modulos .modulo .inicio-pasos-1{width: 80%;}
	#tu-buzo-cabecera .contenido .modulos .modulo .inicio-pasos-2{width: 80%; margin: 3vw auto 30px auto;}
	#tu-buzo-cabecera .contenido .modulos .modulo .inicio-pasos-3{width: 80%; margin: 3.5vw auto 26px auto;}
	#tu-buzo-cabecera .contenido .modulos .modulo .inicio-pasos-4{width: 80%; margin: 3vw auto 50px auto;}
	#tu-buzo-cabecera .inner .tu-buzo-cabecera-desk{display: none;}
	#tu-buzo-cabecera .inner .tu-buzo-cabecera-mobile{display: block;}

	#buzos-modelos .inner .row-principal{display: none;}

	#modelos-slider-principal{display: block; width: calc(100% - 28px); margin-left: 14px;}
	#modelos-slider-principal .modulo{display: block; width: calc(33.33% - 15px); float: left; padding: 10px 0;  cursor: pointer;}
	#modelos-slider-principal .modulo:hover{border: 1px solid #01eebc;}
	#modelos-slider-principal .modulo img{max-width: 100%}
	#modelos-slider-principal .modulo .modelo{font-size: 15px; color: #000; margin-top: 10px; text-align: center;}
	#modelos-slider-principal .modulo .seleccionado{border: 1px solid #01eebc; opacity: 1 !important;}

	.slider-modelos{display: none; width: calc(100% - 28px); margin-left: 14px;}
	.slider-modelos .modulo{display: block; width: calc(33.33% - 15px); float: left; padding: 10px 40px;  cursor: pointer;}
	.slider-modelos .modulo:hover{border: 1px solid #01eebc;}
	.slider-modelos .modulo img{max-width: 100%}
	.slider-modelos .modulo .modelo{font-size: 15px; color: #000; margin-top: 10px; text-align: center;}
	.slider-modelos .modulo .seleccionado{border: 1px solid #01eebc; opacity: 1 !important;}

	.btn-mano-mobile{display: table; margin: 20px auto;}
}

@media screen and (max-width: 1023px){

	#menu{top: 66px; background-color: #01eebc; z-index: 99997;}
	#menu .verde{display: none;}
	#menu .blanco{width: 100%;}
	#menu .blanco .contenido{position: absolute; width: calc(100% - 40px); left: 20px; top: 80px; transform: translateY(0);}
	#menu .blanco .contenido a{width: 100%; display: inline-block; font-size: 30px; line-height: 80px; border-bottom: 1px solid #41f2cc;}
	#menu .blanco .contenido .sociales{width: 50%; max-width: 140px; margin: 60px 0 0 0;}
	#menu .blanco .contenido .contacto{float: left; width: 50%; max-width: 170px; margin: 60px 0 0 30px;}
	#menu .btn-cerrar{display: none;}
	#menu .blanco .contenido .sociales .tx{font-size: 12px;}
	#menu .blanco .contenido .contacto .tx{font-size: 12px;}
	#menu .blanco .contenido .sociales .tx .linea{margin: 8px 0 0 0;}
	#menu .blanco .contenido .contacto .tx .linea{margin: 8px 0 0 0;}

	#header .contenido{padding: 0 20px;}
	#header .contenido .tresovejas{width: 65px!important}
	#header .contenido .opciones .btn-whatsapp{width: 24px; height: 24px; text-indent: 99999px; padding-left: 0;}
	#header .contenido .opciones .btn-email{width: 24px; height: 24px; text-indent: 99999px;}
	#header .contenido .opciones .btn-separador{margin: 0 14px;}
	#header .contenido .opciones .btn-menu{width: 32px; height: 24px; text-indent: 99999px; margin-left: 5px;}
	#header .contenido .redes{display: none;}
	#tx-inicio {padding-bottom: 50px;}
	#tx-inicio .contenido{padding: 0 20px;}
	#tx-inicio .contenido .inicio .ilus{display: none;}
	#tx-inicio .contenido .inicio{margin: 60px 0 50px 0;}
	#tx-inicio .contenido .inicio h1 {width: 100%; margin: 20px 0 0 0; font-size: 5vw;}
	#slider-inicio{height: 270px;}

	#inicio-modulo1{padding: 35px 0;}
	#inicio-modulo1 .contenido{padding: 0 20px;}
	#inicio-modulo1 .contenido .tx{width: 100%;}
	#inicio-modulo1 .contenido .tx h2{font-size: 4.3vw;}
	#inicio-modulo1 .contenido .tx p{font-size: 3vw; margin: 5px 0 20px 0;}
	#inicio-modulo1 .contenido .tx .btn{display: inline-block; width: 120px; height: 40px; border-radius: 20px; font-size: 15px; line-height: 40px;}
	#inicio-modulo1 .contenido img{display: inline-block; width: 100%; float: none; margin: 20px 0 0 0;}

	#inicio-modulo2{padding: 50px 0;}
	#inicio-modulo2 .contenido{padding: 0 20px;}
	#inicio-modulo2 .contenido h3{font-size: 4.3vw;}
	#inicio-modulo2 .contenido p{font-size: 3vw; margin: 5px 0 20px 0;}
	#inicio-modulo2 .contenido .modulos{width: calc(100% + 20px); margin: 20px 0 30px -20px;}
	#inicio-modulo2 .contenido .modulos .modulo {width: calc(50% - 20px); min-height: 0; margin: 0 0 20px 20px; padding: 12px 18px;}
	#inicio-modulo2 .contenido .modulos .modulo .linea1{border-bottom: 2px dashed #000;}
	#inicio-modulo2 .contenido .modulos .modulo .linea2{border-bottom: 2px dashed #000;}
	#inicio-modulo2 .contenido .modulos .modulo .nro{font-size: 7vw; margin: 15px 0;}
	#inicio-modulo2 .contenido .modulos .modulo .inicio-pasos-1{max-width: 61.3%; margin: 0 auto 23px auto;}
	#inicio-modulo2 .contenido .modulos .modulo .inicio-pasos-2{max-width: 78%; margin: 20px auto 0px auto;}
	#inicio-modulo2 .contenido .modulos .modulo .inicio-pasos-3{max-width: 78%; margin: 20px auto 0px auto;}
	#inicio-modulo2 .contenido .modulos .modulo .inicio-pasos-4{max-width: 75%; margin: 10px auto 0px auto;}
	#inicio-modulo2 .contenido .modulos .modulo .tx{font-size: 3vw;}
	#inicio-modulo2 .contenido .btn{width: 120px; height: 40px; border-radius: 20px; font-size: 15px; line-height: 40px;}

	.home-instagram-1920{display: none!important;}
	.home-instagram-mobile{display: block!important;}
	#inicio-modulo3{padding: 40px 0;}
	#inicio-modulo3 .contenido .inner .thumbs .movil{display: none!important;}
	#inicio-modulo3 .contenido .inner img{width: 100%;}
	#inicio-modulo3 .contenido .inner .thumbs {position: relative; width: 100%; right: 0; margin-top: 50px;}
	#inicio-modulo3 .contenido .inner .thumbs iframe{height: 60vw;}

	#inicio-modulo4 .contenido .inner{padding: 0 20px;}
	#inicio-modulo4 .contenido .inner .ilus{max-width: 170px;}
	#inicio-modulo4 .contenido .inner .tx {position: absolute; top: 50%; left: 200px; transform: translateY(-50%); font-size: 4vw;}
	#inicio-modulo4 .contenido .inner .tx a{font-size: 4vw;}
	#inicio-modulo4 .contenido .inner .tx a strong{font-size: 4vw;}
	#inicio-modulo4 .contenido .inner .whatsapp{display: none;}

	#footer .contenido .inner{padding: 0 20px 50px 20px;}
	#footer .contenido .consulta{display: none;}
	#footer .contenido .inner .tresovejas {float: none; width: 125px; margin: auto;}
	#footer .contenido .inner .menu {display: table; position: relative; max-width: 360px; min-width: 0; top: 0; left:0; transform: translateX(0); margin: 30px auto 0 auto; padding: 30px 0; border-top: 1px solid #b7b7b7;}
	#footer .contenido .inner .copy {display: block; position: absolute; width: 100%;	height: 36px;	background-color: #FFF;  bottom: -10px; right: 0; font-size: 9px; line-height: 36px; text-align: center; font-weight: 400; color: #808080;}
	#footer .contenido .inner .menu .opcion4{display: none}
	#footer .contenido .inner .menu .opcion5{display: none}
	#footer .contenido .inner .menu .opcion6{display: none}

	#slider-quienes-somos {height: 270px;}
	#quienes-somos {margin: 70px auto 100px auto; padding: 0 20px;}
	#quienes-somos .columna1 {float: none; width: 100%;}
	#quienes-somos .columna2 {float: none; width: 100%; margin-top: 30px}
	#quienes-somos .columna1{font-size: 4vw;}
	#quienes-somos .columna2 p{font-size: 3vw;}

	#slider-productos{height: 270px;}
	#productos {margin: 70px auto; padding: 0 20px;}
	#productos .columna1 .titulo{font-size: 4vw;}
	#productos .columna1{width: 180px;}
	#productos .columna2{width: calc(100% - 190px);}
	#productos .columna2 .modulo{width: calc(33.33% - 20px); margin: 0 0 40px 20px;}
	#detalle{margin: 180px auto 60px auto;}
	#detalle-relacionados .productos{width: 100%; margin: 40px 0 0 0;}
	#detalle-relacionados .productos .modulo{width: calc(20% - 10px); margin: 0 0 0 10px;}

	#detalle {margin: 140px auto 40px auto; padding: 0 20px;}
	#detalle .imagenes{width: 60%;}
	#detalle .info {width: calc(40% - 30px);}

	#detalle .info h1{font-size: 4vw;}
	#detalle-relacionados {margin: 40px auto 100px auto; padding: 0 20px;}

	#tu-buzo-cabecera .inner{padding: 70px 14px 36px 14px;}
	#tu-buzo-cabecera{margin-top: 70px}
	#tu-buzo-cabecera .btn{width: 130px; height: 40px; border-radius: 20px; font-size: 15px; line-height: 40px; bottom: -50px;}
	#tu-buzo-cabecera-linea{width: calc(100% - 28px); margin-top: 15px;}
	#buzos-modelos{margin-top: 20px;}
	#buzos-modelos .inner{padding: 0 14px 40px 14px;}
	#buzos-modelos .inner .titulo{font-size: 21px;}
	#buzos-modelos .inner .tx{font-size: 16px; margin-top: 0;}
	#buzos-modelos .inner .row-principal{margin: 35px 0 20px 0;}

	#buzos-modelos .grafico-contenido{width: 100%; float: none; padding: 0; background-color: #FFF;}
	#buzos-modelos .grafico-contenido .frente{width: 95%; padding-bottom: 110%;}
	#buzos-modelos .grafico-contenido .dorso{width: 95%; padding-bottom: 110%;}
	#buzos-modelos .grafico-contenido .btn{display: none;}
	#buzos-modelos .grafico-contenido .ico-vuelta{top: 10%;}

	#buzos-modelos .opciones-contenido .titulo-columna{font-size: 15px;}
	#buzos-modelos .opciones-contenido .lista-titulo{font-size: 14px;}
	#buzos-modelos .opciones-contenido .color-seleccionado{font-size: 14px;}
	#buzos-modelos .opciones-contenido{width: 100%;}

	#buzos-modelos .inner .row-btn .btn-completo-mobile {display: block; width: calc(50% - 10px); height: 40px; float: left; background-color: #5724ba; border-radius: 20px; font-size: 15px; font-weight: 700; color: #FFF; text-align: center; line-height: 40px; cursor: pointer;}
	#buzos-modelos .inner .row-btn .btn{width: calc(50% - 10px); height: 40px; border-radius: 20px; font-size: 15px; line-height: 40px; bottom: -50px;}

	.modelo1-ubicacion {width: 34px; height: 34px; border-radius: 17px; font-size: 14px; line-height: 34px;}

	#buzos-modelos .grafico-final{padding: 0 0 2% 0; background-color: #FFF; background-image: url('../im/paso4-bg-mobile.png'); background-repeat: no-repeat; background-position: center; background-size: cover;}
	#buzos-modelos .grafico-final .logo{display: none;}
	#buzos-modelos .grafico-final .grafico1{display: block; float: none; width: 95%; padding-bottom: 120%; margin: 0 auto;}
	#buzos-modelos .grafico-final .grafico2{display: block; float: none; width: 95%; padding-bottom: 120%; margin: 0 auto;}
	#buzos-modelos .inner .btn-volver{display: none;}

	#buzos-modelos .row-social .botones{width: 100%; margin-top: 20px;}
	#buzos-modelos .row-social .botones .btn-cotizar{float: left; width: calc(50% - 5px); height: 40px; border-radius: 20px; font-size: 15px; line-height: 40px;}
	#buzos-modelos .row-social .botones .btn-whatsapp{float: right; width: calc(50% - 5px); height: 40px; border-radius: 20px; font-size: 15px; line-height: 40px; margin-top: 0;}

	#buzos-modelos .row-social .compartir{font-size: 16px;}
	#buzos-modelos .row-social .compartir .social-icon{width: 20px; height: 20px ;margin: -2px 1px 0 1px;}

	#contacto{margin: 120px auto 40px auto; padding: 0 14px;}
	#contacto h1{font-size: 18px;}
	#contacto .parrafo{font-size: 14px;}

	#contacto .columna1{float: none; width: 100%;}
	#contacto .columna2{float: none; width: 100%;}
	#contacto input[type="submit"]{float: right; width: 92px; height: 40px; border-radius: 20px; font-size: 15px; line-height: 40px; margin-top: 0;}
	#contacto .btn-adjunto{margin: 0; width: calc(100% - 110px); font-size: 15px; line-height: 20px; background-size: 30px 30px;}
	#contacto input[type="file"]{rigth: auto; left: 0; width: calc(100% - 105px);}

	#contacto .columna1 p{font-size: 16px; margin-bottom: 20px;}
	#contacto .columna1 p a{font-size: 16px;}
	#contacto .campo_tx{padding-left: 5px;}
	#contacto .columna2 p{display: none;}

	#buzos-modelos .inner .row-principal{display: none;}
	#buzos-modelos .inner{padding: 0 14px 30px 14px;}

	#modelos-slider-principal{display: block; width: calc(100% - 28px); margin-left: 14px;}
	#modelos-slider-principal .modulo{display: block; width: calc(50% - 15px); float: left; padding: 10px 0;  cursor: pointer;}
	#modelos-slider-principal .modulo:hover{border: 1px solid #01eebc;}
	#modelos-slider-principal .modulo img{max-width: 100%}
	#modelos-slider-principal .modulo .modelo{font-size: 14px; color: #000; margin-top: 10px; text-align: center;}
	#modelos-slider-principal .modulo .seleccionado{border: 1px solid #01eebc; opacity: 1 !important;}

	.slider-modelos{display: block; width: calc(100% - 28px); margin-left: 14px; opacity: 0}
	.slider-modelos .modulo{display: block; width: calc(50% - 15px); float: left; padding: 10px 0;  cursor: pointer;}
	.slider-modelos .modulo:hover{border: 1px solid #01eebc;}
	.slider-modelos .modulo img{max-width: 100%}
	.slider-modelos .modulo .modelo{font-size: 14px; color: #000; margin-top: 10px; text-align: center;}
	.slider-modelos .modulo .seleccionado{border: 1px solid #01eebc; opacity: 1 !important;}

	.btn-mano-mobile{display: table; margin: 0 auto 20px auto;}

	#buzos-modelos .inner .row-btn .btn{float: right; width: calc(50% - 5px); height: 40px; border-radius: 20px; font-size: 15px; line-height: 40px; margin-top: 0;}

	#buzos-modelos .opciones-contenido .lista-titulo-todo{font-size: 14px;}
	#buzos-modelos .opciones-contenido .lista-opcion{font-size: 14px;}

	#detalle .info .redes{display: inline-block; width: 170px; margin: 20px 0 0 calc(50% - 85px);}
	#detalle-relacionados .productos .modulo{display: inline-block; width: 25%; float: none; margin: 0; padding: 0;}
}
@media screen and (max-width: 767px){
	#whatsapp-mobile{display: block}
	#header .base{margin-top: -4px;}
	#productos {margin: 40px auto;}
	#productos .columna1{width: 100%;}
	#productos .columna2{width: calc(100% + 20px); margin-top: 20px;}
	#productos .columna2 .modulo{width: calc(50% - 20px); margin: 0 0 40px 20px;}
	#productos .columna1 .menu{display: none; margin-top: 10px; border: 1px solid #d9d9d9; padding: 0 20px;}
	#productos .columna1 .titulo{font-size: 4.5vw; cursor: pointer; background-image: url('../im/productos-flecha-abre.svg'); background-repeat: no-repeat; background-position: 215px center;}
	#productos .columna1 .titulo-abre{background-image: url('../im/productos-flecha-cierra.svg');}

	#detalle .imagenes{display: none;}
	#detalle .info {width: 100%;}
	#detalle .info h1{font-size: 18px}
	#detalle .info p{font-size: 14px; line-height: 18px;}
	#detalle .info .btn1 {width: calc(50% - 10px); height: 38px; line-height: 38px; font-size: 3vw; float: left; margin: 0;}
	#detalle .info .btn2 {width: calc(50% - 10px); height: 38px; line-height: 38px; font-size: 3vw; float: right; margin: 0;}
	#detalle-relacionados .productos{margin-top: 21px;}
	#detalle-relacionados .titulo{font-size: 16px; border-bottom: 1px solid #959596; padding-bottom: 14px;}
	#footer .contenido .inner .menu{min-width: 0;}

	#buzos-modelos{margin-top: 40px;}
	#buzos-modelos .grafico-contenido .frente{padding-bottom: 120%;}
	#buzos-modelos .grafico-contenido .dorso{padding-bottom: 120%;}
	#buzos-modelos .grafico-contenido .borde-base{display: none;}
	#tu-buzo-cabecera .contenido{padding: 0;}
	#tu-buzo-cabecera .contenido .modulos{width: 100%; margin: 0;}
	#tu-buzo-cabecera .contenido .modulos .modulo{width: calc(50% - 30px); min-height: 68.75vw; margin: 0 0 20px 20px;}
	#tu-buzo-cabecera .contenido .modulos .modulo .nro{font-size: 8vw; margin: 2vw 0;}
	#tu-buzo-cabecera .contenido .modulos .modulo .linea1{border-bottom: 1px dashed #000;}
	#tu-buzo-cabecera .contenido .modulos .modulo .linea2{border-bottom: 1px dashed #000;}
	#tu-buzo-cabecera .contenido .modulos .modulo .tx{position: absolute; width: 90%; bottom: 4.2vw; left: 50%; transform: translateX(-50%); font-size: 16px;}
	#tu-buzo-cabecera .contenido .modulos .modulo .inicio-pasos-1{width: 80%;}
	#tu-buzo-cabecera .contenido .modulos .modulo .inicio-pasos-2{width: 80%; margin: 4.2vw auto 30px auto;}
	#tu-buzo-cabecera .contenido .modulos .modulo .inicio-pasos-3{width: 80%; margin: 5vw auto 26px auto;}
	#tu-buzo-cabecera .contenido .modulos .modulo .inicio-pasos-4{width: 80%; margin: 4.2vw auto 50px auto;}
	#tu-buzo-cabecera .inner .tu-buzo-cabecera-desk{display: none;}
	#tu-buzo-cabecera .inner .tu-buzo-cabecera-mobile{display: block;}
	#buzos-modelos .inner .tx{margin: 0px 0 20px 0;}
	#buzos-modelos .grafico-contenido .thumb-frente{top: 1%;}
	#buzos-modelos .grafico-contenido .thumb-dorso{top: 1%;}
	#buzos-modelos .grafico-contenido{margin: 0 0 20px 0;}
	#buzos-modelos .opciones-contenido{padding-right: 0;}
	#buzos-modelos .opciones-contenido .titulo-columna{float: left; border: 0; margin-bottom: 0;}
	#buzos-modelos .opciones-contenido .titulo-columna-flecha{display: block; float: left; width: 12px; height: 20px; margin-left: 10px; background-image: url('../im/tu-buzo-titulos-flecha-cierra.svg'); background-repeat: no-repeat; background-position: center;}
	#buzos-modelos .opciones-contenido .flecha-abre{background-image: url('../im/tu-buzo-titulos-flecha-abre.svg');}
	#buzos-modelos .inner .row-btn{width: calc(100% - 28px); right: 14px;}
	#buzos-modelos .inner .row-btn .btn-completo-mobile{width: calc(50% - 3px); font-size: 13px;}
	#buzos-modelos .inner .row-btn .btn{width: calc(50% - 3px); font-size: 13px;}
	.opciones-contenido-paso2{padding-bottom: 60px}

	.paso-2-lista-partes{border: 1px solid #ececec; padding: 16px 20px; margin-top: 7px;}
	#paso2-color{margin-top: -30px}
	.texto-ubicacion{width: 34px; height: 34px; border-radius: 17px; font-size: 18px; line-height: 34px;}
	#buzos-modelos .inner{padding: 0 14px 20px 14px;}
	#buzos-modelos .row-social .botones .btn-cotizar{width: calc(50% - 3px); font-size: 12px;}
	#buzos-modelos .row-social .botones .btn-whatsapp{width: calc(50% - 3px); font-size: 12px;}
	#buzos-modelos .row-social .compartir .separador{height: 20px; margin: 0 10px -5px 5px;}
	.btn-mano-mobile{margin: 20px auto;}

	.colores-desk{display: none;}
	.colores-mobile{display: block; margin-top: 10px;}
	.colores-mobile .titulo-columna-color{width: 100%;}
	.colores-mobile .colores-menu{display: table; width: 100%; height: 35px;}
	.colores-mobile .colores-menu .opcion-mobile{display: block; float: left; width: 33.33%; height: 35px; border-bottom: 1px solid #2b2b2b; text-align: center; font-size: 14px; font-weight: 500; color: #2b2b2b; line-height: 35px; opacity: 0.5;}
	.colores-mobile .colores-menu .opcion-mobile-seleccionada{opacity: 1;}
	.colores-mobile .colores-listado-contiene{display: block; width: 100%; height: 88px;}
	.colores-mobile .colores-listado-contiene .colores-plenos{position: absolute; display: block; top: 0; left: 0; width: 100%; height: 88px; overflow-y: hidden; overflow-x: scroll;}
	.colores-mobile .colores-listado-contiene .colores-plenos .wrapper{position: absolute; display: inline-block; top: 0; left: 0; height: 88px;}
	.colores-mobile .colores-listado-contiene .colores-plenos .wrapper .color{display: block; float: left; width: 32px; height: 32px; border-radius: 16px; margin: 28px 12px 0 0;  cursor: pointer; border: 1px solid #999;}

	.colores-mobile .colores-listado-contiene .colores-degrades{position: absolute; display: none; top: 0; left: 0; width: 100%; height: 88px; overflow-y: hidden; overflow-x: scroll;}
	.colores-mobile .colores-listado-contiene .colores-degrades .wrapper{position: absolute; display: inline-block; top: 0; left: 0; height: 88px;}
	.colores-mobile .colores-listado-contiene .colores-degrades .wrapper .degrade{display: block; float: left; width: 32px; height: 32px; border-radius: 16px; margin: 28px 12px 0 0;  cursor: pointer; border: 1px solid #999; background-repeat: no-repeat; background-size: cover; background-position: center;}

	.colores-mobile .colores-listado-contiene .colores-tramas{position: absolute; display: none; top: 0; left: 0; width: 100%; height: 88px; overflow-y: hidden; overflow-x: scroll;}
	.colores-mobile .colores-listado-contiene .colores-tramas .wrapper{position: absolute; display: inline-block; top: 0; left: 0; height: 88px;}
	.colores-mobile .colores-listado-contiene .colores-tramas .wrapper .trama{display: block; float: left; width: 32px; height: 32px; border-radius: 16px; margin: 28px 12px 0 0;  cursor: pointer; border: 1px solid #999; background-repeat: no-repeat; background-size: cover; background-position: center;}

	.colores-flecha-mobile{display: block; position: absolute; top: 0; right: 0;}
	.colores-flecha-mobile2{display: block; position: absolute; bottom: 12px; right: 0;}

	.paso-3-lista-tipos{border: 1px solid #ececec; padding: 7px 14px; margin-top: 7px;}
	#buzos-modelos .opciones-contenido .lista-opcion{width: 100%; height: 22px;}
	#buzos-modelos .opciones-contenido .lista-borde-mobile{border-bottom: 1px solid #ececec;}
	#paso3-lugar{margin-top: -26px;}

	#popup-textos{display: none; position: fixed; width: 100%; height: 100%; background-color: #FFF; top: 0; left: 0; z-index: 99999;}
	#popup-textos .btn-cerrar{display: block; float: right; margin: 30px 20px 0 0;}
	#popup-textos .interior{position: absolute; width: calc(100% - 40px); height: calc(100% - 100px); top: 60px; left: 20px; overflow-y: scroll; font-size: 15px; font-weight: 500; color: #2c2b2d;}
	#popup-textos .interior input[type="text"]{display: inline-block; width: 100%; height: 40px; border: 0; border-bottom: 1px dashed #1d1d1d; font-size: 16px; font-weight: 300; margin-top: 20px;}
	#popup-textos .interior select{width: 100%; height: 34px; font-size: 15px; margin-top: 20px;}

	.paso3-color-aplique{width: 100%; border: 1px solid #ececec; padding: 7px 14px; margin-top: 7px;}
	.paso3-color-aplique hr{width: 100%; color: #ececec; margin: 8px 0 -8px 0; padding: 0;}

	#buzos-modelos .opciones-contenido .colores{width: 100%; height: 78px;}
	#buzos-modelos .opciones-contenido .colores .wrapper{height: 78px;}
	#buzos-modelos .opciones-contenido .colores .wrapper .columna{width: 78px; height: 78px;}
	#buzos-modelos .opciones-contenido .colores .color{float: left; margin: 18px 7px 0 0}
	#buzos-modelos .opciones-contenido .flecha{display: none;}

	#buzos-modelos .opciones-contenido .estampados{width: 100%; height: 78px;}
	#buzos-modelos .opciones-contenido .estampados .wrapper{height: 78px;}
	#buzos-modelos .opciones-contenido .estampados .wrapper .columna{width: 78px; height: 78px;}
	#buzos-modelos .opciones-contenido .estampados .estampado{display: block; float: left; width: 32px; height: 32px; border-radius: 16px; margin: 18px 7px 0 0;  cursor: pointer; border: 1px solid #999; background-repeat: no-repeat; background-size: cover; background-position: center;}
	#buzos-modelos .opciones-contenido .estampados-flecha{display: none;}
	.opciones-contenido-paso3{padding-bottom: 50px;}

	#slider-quienes-somos{margin-top: 90px;}
	#slider-productos{margin-top: 90px;}

	#detalle .imagenes-mobile{display: block;}

	#detalle-relacionados .productos .modulo{width: calc(33.33% - 10px); padding-bottom: 45%;}
	.relacionado-3{display: none!important;}
	.relacionado-4{display: none!important;}
	.relacionado-5{display: none!important;}

	.texto-borde{-webkit-text-stroke-width: 1px;}
	.texto-ubicacion-final{width: 34px; height: 34px; border-radius: 17px;}

	#bg_diseno_popup .grafico-final{display: block; position: absolute; overflow-y: scroll; width: calc(100% - 28px); height: calc(100% - 28px); top: 14px; left: 14px; margin: 0; padding: 2% 0;}
	#bg_diseno_popup .grafico-final .grafico1 {display: block; float: none; width: 95%; padding-bottom: 120%; margin: 0 auto;}
	#bg_diseno_popup .grafico-final .grafico2 {display: block; float: none; width: 95%; padding-bottom: 120%; margin: 0 auto;}
	#bg_diseno_popup .grafico-final .logo{top: 1%; left: 2%; width: 20%;}
	#bg_diseno_popup .grafico-final .btn-cerrar{top: 1%; right: 2%; width: 5%; z-index: 999999;}

	#detalle-relacionados .productos .modulo{display: inline-block; width: 40%; float: none; margin: 0; padding: 0;}
}
@media screen and (max-width: 479px){
	#menu .blanco .contenido .contacto{float: right; margin: 60px 0 0 0;}
	#slider-inicio{ height: 270px;}
	#tx-inicio {padding-bottom: 30px;}
	#tx-inicio .contenido{padding: 0 20px;}
	#tx-inicio .contenido .inicio .ilus{display: none;}
	#tx-inicio .contenido .inicio{margin: 60px 0 50px 0;}
	#tx-inicio .contenido .inicio h1 {width: 100%; margin: 20px 0 0 0; font-size: 6vw;}
	#inicio-modulo1 .contenido .tx h2{font-size: 6vw;}
	#inicio-modulo1 .contenido .tx p{font-size: 5vw;}
	#inicio-modulo2 .contenido h3{font-size: 6vw;}
	#inicio-modulo2 .contenido p{font-size: 5vw;}

	#inicio-modulo2 .contenido .modulos .modulo{padding: 10px; min-height: 232px;}
	#inicio-modulo3 .contenido{padding: 0 20px;}

	#footer .contenido .inner .menu .opcion{margin: 0 15px;}
	#footer .contenido .inner .copy {height: 48px; line-height: 14px; padding: 10px 20px 0 20px}

	#quienes-somos{margin: 40px auto 80px auto;}
	#quienes-somos .columna1{font-size: 21px;}
	#quienes-somos .columna1 br{display: none;}
	#quienes-somos .columna2{font-size: 15px; line-height: 20px; margin-top: 20px;}
	#quienes-somos .columna2 p{font-size: 15px;}

	#buzos-modelos .row-social .botones .btn-whatsapp{background-image: none; padding-left: 0;}


}
/*
@media screen and (min-width:1024px) and (max-width: 1280px){
	#menu .blanco .contenido a{font-size: 3vw; line-height: 5vw;}

	#header .contenido .inicio .ilus{width: 150px; right: 0;}
	#header .contenido .inicio h1 {font-size: 4vw;}

	#inicio-modulo1 .contenido .tx{width: 100%;}
	#inicio-modulo1 .contenido .tx h2{font-size: 3vw;}
	#inicio-modulo1 .contenido .tx p{font-size: 2vw; margin: 10px 0;}
	#inicio-modulo1 .contenido .tx .btn {width: 150px; height: 40px; border-radius: 20px; font-size: 15px; line-height: 40px;}
	#inicio-modulo1 .contenido img {width: 100%; float: none; margin-top: 20px;}

	#inicio-modulo2 .contenido h3{font-size: 3vw;}
	#inicio-modulo2 .contenido p{font-size: 2vw; margin: 10px 0;}
	#inicio-modulo2 .contenido .modulos {margin: 50px 0 18px -32px;}
	#inicio-modulo2 .contenido .modulos .modulo {width: calc(50% - 32px); margin-bottom: 32px;}

	#inicio-modulo4 .contenido .inner .ilus{width: 30%;}
	#inicio-modulo4 .contenido .inner .tx {font-size: 3vw;}
	#inicio-modulo4 .contenido .inner .tx {position: relative; top: 0; left: 0; transform: translate(0, 0); font-size: 3vw; float: right;}
	#inicio-modulo4 .contenido .inner .whatsapp {display: none;}

	#footer .contenido .inner{padding: 0 178px 50px 178px;}
	#footer .contenido .consulta{display: none;}
	#footer .contenido .inner .tresovejas {float: none; width: 170px; margin: auto;}
	#footer .contenido .inner .menu {display: table; position: relative; top: 0; left:0; transform: translateX(0); margin-top: 30px; padding: 30px 0; border-top: 1px solid #b7b7b7;}
	#footer .contenido .inner .copy {display: block; position: absolute; width: 100%;	height: 36px;	background-color: #FFF;  bottom: -10px; right: 0; font-size: 9px; line-height: 36px; text-align: center; font-weight: 400; color: #808080;}

	#quienes-somos .columna1{font-size: 3vw;}
	#quienes-somos .columna2 p{font-size: 2vw;}

	#buzos-modelos .inner .titulo{font-size: 3vw;}
	#buzos-modelos .inner .tx{font-size: 2vw;}

	#buzos-modelos .inner .row .modulo {width: 33.33%;}
	#buzos-modelos .inner .row-btn .btn {width: 150px; height: 40px; border-radius: 20px; font-size: 15px; line-height: 40px;}

	#productos .columna1 .titulo{font-size: 3vw;}
	#productos .columna1 .menu{margin-top: 40px}
	#productos .columna2 .modulo{width: calc(50% - 30px);}

	#detalle .info h1{font-size: 2vw;}

	#contacto h1{font-size: 3vw;}
	#contacto .columna1{width: calc(50% - 20px);}
	#contacto .columna2{width: calc(50% - 20px);}
	#contacto .columna1 p{font-size: 2vw;}
	#contacto .columna1 p a{font-size: 2vw;}
	#contacto .columna2 p{font-size: 2vw; padding: 0 0 0 50px; background-size: 40px 40px;}
	#contacto .columna2 p a{font-size: 2vw;}
	#contacto .campo input[type="text"]{font-size: 2vw; height: 50px}
	#contacto .campo input[type="email"]{font-size: 2vw; height: 50px}
	#contacto input[type="submit"]{position: absolute; bottom: -50px; height: 40px; border-radius: 20px; font-size: 15px; line-height: 40px;}
	#contacto .btn-adjunto{float: none; margin: 20px 0; font-size: 15px; background-size: 30px 30px;}
	#contacto .campo{height: 50px}
	#contacto .campo_margin {margin-bottom: 20px;}
	#contacto .campo_tx{font-size: 11px}


	#inicio-modulo2 .contenido .modulos .modulo .tx{font-size: 18px;}
	#inicio-modulo2 .contenido .modulos .modulo .inicio-pasos-4 {margin: 30px auto 20px auto;}
	#inicio-modulo4 .contenido .inner .ilus{width: 22%;margin-left: 6%;}
	#inicio-modulo4 .contenido .inner .tx {font-size: 2.2vw;}
	#inicio-modulo4 .contenido .inner .tx a{font-size: 1.8vw;}
	#inicio-modulo4 .contenido .inner .tx a strong{font-size: 1.8vw;}
	#inicio-modulo4 .contenido .inner .whatsapp {width: 60px; height: 60px; margin-top: 55px;margin-right: 6%;}


	#inicio-modulo1 .contenido .tx {width: 340px;}
	#inicio-modulo1 .contenido .tx h2{font-size: 2.2vw;}
	#inicio-modulo1 .contenido .tx p{font-size: 1.5vw; margin: 10px 0;}
	#inicio-modulo1 .contenido .tx .btn {width: 150px; height: 40px; border-radius: 20px; font-size: 15px; line-height: 40px; margin-top: 10px;}
	#inicio-modulo1 .contenido img{width: calc(100% - 380px);}

	#inicio-modulo2 .contenido h3{font-size: 2.2vw;}
	#inicio-modulo2 .contenido p{font-size: 1.5vw; margin: 10px 0;}

	#inicio-modulo2 .contenido .modulos{width: calc(100% + 21px); margin: 50px 0 50px -21px;}
	#inicio-modulo2 .contenido .modulos .modulo{width: calc(25% - 21px); min-height: 310px; margin: 0 0 0 21px; padding: 12px 18px;}
	#inicio-modulo2 .contenido .modulos .modulo .linea1{display: block; position: absolute; width: calc(100% - 36px); height: 1px; top: 10px; left: 18px; border-bottom: 2px dashed #000;}
	#inicio-modulo2 .contenido .modulos .modulo .linea2{display: block; position: absolute; width: calc(100% - 36px); height: 1px; bottom: 10px; left: 18px; border-bottom: 2px dashed #000;}
	#inicio-modulo2 .contenido .modulos .modulo .nro{display: block; font-size: 2.5vw; font-weight: 600; line-height: 2.5vw; text-align: center; margin: 10px 0;}
	#inicio-modulo2 .contenido .modulos .modulo .inicio-pasos-1{display: block; margin: 0 auto 14px auto; max-width: 100%}
	#inicio-modulo2 .contenido .modulos .modulo .inicio-pasos-2{display: block; margin: 20px auto 30px auto; max-width: 100%}
	#inicio-modulo2 .contenido .modulos .modulo .inicio-pasos-3{display: block; margin: 30px auto 26px auto; max-width: 100%}
	#inicio-modulo2 .contenido .modulos .modulo .inicio-pasos-4{display: block; margin: 30px auto 40px auto; max-width: 100%}
	#inicio-modulo2 .contenido .modulos .modulo .tx{display: block; font-size: 18px; font-weight: 500; text-align: center; margin: 10px 0;}
	#inicio-modulo2 .contenido .btn{width: 150px; height: 40px; border-radius: 20px; font-size: 15px; line-height: 40px;}

	.home-instagram-1920{display: none!important;}
	.home-instagram-1440{display: block!important; max-width: 1130px; margin: auto;}
	#inicio-modulo3 .contenido .inner .thumbs {width: 36%; right: 20%;}
	#inicio-modulo3 .contenido .inner .thumbs .thumb {width: 30%; padding-bottom: 30%;}
	#inicio-modulo3 .contenido .inner .thumbs .thumb2{margin-left: 5%;}
	#inicio-modulo3 .contenido .inner .thumbs .thumb3{margin-left: 5%;}
	#inicio-modulo3 .contenido .inner .thumbs .thumb4{margin-top: 5%;}
	#inicio-modulo3 .contenido .inner .thumbs .thumb5{margin-top: 5%;margin-left: 5%;}
	#inicio-modulo3 .contenido .inner .thumbs .thumb6{margin-top: 5%;margin-left: 5%;}
	#inicio-modulo3 .contenido .inner .thumbs .movil {max-width: 78px; bottom: -85px; right: -150px;}

}
*/
