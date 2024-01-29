<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Automarket</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
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
        /* ocultar y mostrar logo */

        .scroll-edit {
            display: none; /* Oculta el logo de la pagina principal */
        }

        .show-on-scroll {
            display: block; /* Muestra el logo al hacer scroll de la pagina principal */
        }

        .form-row {
            display: flex;
            justify-content: space-between; /* Ajusta los elementos uniformemente */
            align-items: center; /* Centra los elementos verticalmente */
            flex-wrap: wrap; /* Permite que los elementos se ajusten en múltiples líneas si no hay suficiente espacio */
        }

        .b-find__item {
            flex-basis: calc(33.333% - 20px); /* Ajusta el ancho de cada elemento, resta el espacio entre elementos si es necesario */
            margin: 10px; /* Espacio entre elementos */
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
    </style>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TDDPXS9');</script>
    <!-- End Google Tag Manager -->
    <!--[if lt IE 9 ]>
<script src="/assets/js/separate-js/html5shiv-3.7.2.min.js" type="text/javascript"></script><meta content="no" http-equiv="imagetoolbar">
<![endif]-->
</head>

<body class="page">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TDDPXS9"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->