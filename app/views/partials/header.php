<?php 
    $seo = get_seo();

    $seo_google_tag_manager = "";
    $seo_google_tag_manager_noscript = "";
    $seo_titulo_web = "";
    $seo_meta_description = "";
    $seo_titulo_principal = "";
    $seo_titulo_seguncario = "";
    $seo_URL_canonica = "";
    $seo_pagina_indexada = "";
    $seo_keywords = "";
    $seo_author = "";

    while ($seo_des = $seo->fetch_assoc()) { 
        
        if ($seo_des['id'] == 1) {
            $seo_google_tag_manager = $seo_des['descripcion'];
        }

        if ($seo_des['id'] == 2) {
            $seo_google_tag_manager_noscript = $seo_des['descripcion'];
        }

        if ($seo_des['id'] == 3) {
            $seo_titulo_web = $seo_des['descripcion'];
        }

        if ($seo_des['id'] == 4) {
            $seo_meta_description = $seo_des['descripcion'];
        }

        if ($seo_des['id'] == 5) {
            $seo_titulo_principal = $seo_des['descripcion'];
        }

        if ($seo_des['id'] == 6) {
            $seo_titulo_seguncario = $seo_des['descripcion'];
        }

        if ($seo_des['id'] == 7) {
            $seo_URL_canonica = $seo_des['descripcion'];
        }

        if ($seo_des['id'] == 8) {
            $seo_pagina_indexada = $seo_des['descripcion'];
        }

        if ($seo_des['id'] == 9) {
            $seo_keywords = $seo_des['descripcion'];
        }

        if ($seo_des['id'] == 10) {
            $seo_author = $seo_des['descripcion'];
        }
        
 } ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php echo utf8_encode($seo_titulo_web); ?>
    <?php echo utf8_encode($seo_meta_description); ?>
    <?php echo utf8_encode($seo_pagina_indexada); ?>
    <?php echo utf8_encode($seo_keywords); ?>
    <?php echo utf8_encode($seo_author); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="telephone=no" name="format-detection">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href="assets/css/master.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <style>
        #mapTumbaMuerto, #mapViaIsrael, #mapCostaVerde, #mapDavid {
            height: 400px; 
        }

        p {
        text-align: justify;
        }

        .scroll-edit {
            display: none;
        }

        .show-on-scroll {
            display: block; 
        }

        .form-row {
            display: flex;
            justify-content: space-between; 
            align-items: center; 
            flex-wrap: wrap; 
        }

        .b-find__item {
            flex-basis: calc(33.333% - 20px);
            margin: 10px; 
        }
        .nav-item .dropdown-menu {
            position: absolute;  
            z-index: 1000;
            !important;
        }

        #form_buscado {
            z-index: 1;
            position: relative;
        }
        .row2 {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .loader_fetch {
            border: 6px solid #d01818;
            border-top: 6px solid transparent;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .arrow-icon::after {
            content: "▼"; 
            display: inline-block;
            margin-left: 5px; 
            transition: transform 0.3s; 
        }

        .collapsed .arrow-icon::after {
            transform: rotate(180deg);
        }

        .desktop-image {
            display: block;
        }

        .mobile-image {
            display: none;
        }

        @media only screen and (max-width: 800px) {
            .desktop-image {
                display: none;
            }
            .mobile-image {
                display: block;
                /*max-width: 100%; 
                height: 100%;
                width: 100%;*/
            }
        }

        #menu_movile {
            display: none;
        }

        @media (max-width: 767px) {
            #menu_movile {
             display: block;
            }
        } 

        @media (max-width: 767px) {
            #estadisticas_movil {
             display: none;
            }
        }
            
        #paginador {
            text-align: center;
            width: 100%; 
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        #paginador a {
            margin: 0 10px; 
            padding: 5px 10px; 
            text-decoration: none;
            color: #000; 
        }

        #paginador a.btn-primary {
            background-color: red;
            color: #fff; 
            border-radius: 5px; 
        }

        @media (max-width: 767px) {
            .ui-title {
                font-size: 16px; 
            }
        }

        @media (max-width: 767px) {
            .section-carousel__btn {
                font-size: 14px; 
                padding: 10px 20px; 
            }
        }

        @media (max-width: 767px) {
        .b-bnr__title {
            font-size: 16px; 
        }
        .b-bnr-contacts__info, .b-bnr-contacts__phone {
            font-size: 14px; 
        }
        .b-bnr-contacts {
            flex-direction: column;
            align-items: flex-start;
            margin-right: 0; 
            margin-bottom: 10px; 
        }
        .b-bnr__main, .b-bnr__second, .b-bnr-contacts {
            text-align: left; 
        }
    }

    .slick-prev, .slick-next {
        /*display: none !important; /* Oculta las flechas por defecto */
    }

    @media screen and (max-width: 767px) {
        .slick-prev, .slick-next {
            display: block !important; /* Muestra las flechas en pantallas pequeñas */
        }
    }

    .custom-section .custom-image {
        background-image: url('<?php echo BASEURL; ?>media/ima/city.png');
        height: 300px; /* Ajusta según la altura deseada */
        background-size: cover;
        background-position: center;
    }

    /* Cambia la imagen en pantallas menores a 768px */
    @media (max-width: 767px) {
        .custom-section .custom-image {
            background-image: url('<?php echo BASEURL; ?>media/ima/city2.png');
        }
    }

    /* Centra el texto y el botón en pantallas pequeñas */
    @media (max-width: 767px) {
        .custom-section .col-12 {
            text-align: center;
        }
    }

    .financing-image {
        width: 100%;
        height: auto;
        display: block;
    }
    @media (max-width: 767px) {
        /* Cambia la imagen en pantallas móviles */
        .financing-image {
            content: url('/dev/public/assets/media/financiamiento/financiamiento2.png');
        }
    }

    @media (max-width: 767px) {
        .d-flex .btn {
            width: 100%;
            margin-top: 10px; /* Ajusta el espacio entre botones */
        }
    }


    .image-container .financing-image {
        display: block; /* Asegura que la imagen original se muestre en pantallas grandes */
    }
    
/* Cambia las imágenes en pantallas móviles */
    @media (max-width: 767px) {
        .asalariado {
            content: url('/dev/public/assets/media/financiamiento/asalariado2.png');
        }
        .independiente {
            content: url('/dev/public/assets/media/financiamiento/independiente2.png');
        }
        .juridico {
            content: url('/dev/public/assets/media/financiamiento/juridico2.png');
        }
        
        .d-flex .btn {
            width: 100%;
            margin-top: 10px; /* Ajusta el espacio entre botones */
        }
    }

    .titulo-nuestro-equipo {
        font-size: 24px; /* Tamaño actual o el que prefieras */
    }

    /* Media query para pantallas de hasta 767px de ancho */
    @media (max-width: 767px) {
        .titulo-nuestro-equipo {
            font-size: 18px; /* Reduce el tamaño de la fuente en móviles */
        }
    }

    .contact-image-container img {
        width: 100%;
        height: auto;
        display: block;
    }

    /* Cambia la imagen cuando la pantalla sea menor a 768px */
    @media (max-width: 767px) {
        .contact-image-container img {
            display: none; /* Oculta la imagen original en dispositivos móviles */
        }
        .contact-image-container {
            background: url('<?php echo BASEURL; ?>media/imaGoo/contact2.png') no-repeat center center;
            background-size: cover;
            min-height: 200px; /* Ajusta esto según el tamaño deseado */
        }
    } 

    @media (max-width: 767px) {
        #imagen_contacto {
            margin-top: 50px;
        }
    }

    @media (max-width: 767px) {
        #miIframe {
            height: 300px;
        }
    }

    @media (max-width: 767px) {
        #imagen_garantia {
            display: none;
        }
        #imagen_garantia_movil {
            display: block !important;
            width: 250px;
        }
        #garantia_12_meses {
            display: block !important;
            text-align: left !important;
        }
        #garantia_6_meses {
            display: block !important;
            text-align: left !important;
        }
        #titulo_ouedes_financiar{
            font-size: 22px !important;
        }
        #imagen_financiamiento{
            display: none !important;
        }
    }

    @media (max-width: 767px){
        #filtros_listin{
            display: none;
        }
    }

    @media (max-width: 767px) {
        .section-carousel .slick-prev,
        .section-carousel .slick-next {
            display: block !important; /* Asegura que las flechas sean visibles */
            z-index: 1; /* Asegura que las flechas estén sobre otros elementos */
        }
    }

    </style>
    <?php /*
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TDDPXS9');</script>
    <!-- End Google Tag Manager -->
    <!--[if lt IE 9 ]>
    <script src="/assets/js/separate-js/html5shiv-3.7.2.min.js" type="text/javascript"></script><meta content="no" http-equiv="imagetoolbar">
    <![endif]--> */ ?>
    <?php echo $seo_google_tag_manager; ?>
</head>

<body class="page">
<?php /*
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TDDPXS9"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) --> */?>
    <?php echo $seo_google_tag_manager_noscript; ?>
