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
    </style>
    <!--[if lt IE 9 ]>
<script src="/assets/js/separate-js/html5shiv-3.7.2.min.js" type="text/javascript"></script><meta content="no" http-equiv="imagetoolbar">
<![endif]-->
</head>

<body class="page">