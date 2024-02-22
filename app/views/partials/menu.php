        <!-- ==========================-->
        <!-- MOBILE MENU-->
        <!-- ==========================-->
        <div data-off-canvas="mobile-slidebar left overlay" style="background-color:white; color:black;">
            <a class="navbar-brand scroll" href="https://automarketpanama.com/dev/public/"><img width="200" class="scroll-logo" src="<?php echo BASEURL; ?>media/logo/LOGO-WEB-AUTOMARKET.png" alt="logo"></a>


            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="/automarket/dev/public/" style="color: black !important;">Inicio<span class="sr-only" ></span></a></li>
                <li class="nav-item "><a class="btn btn-primary" href="https://automarketpanama.com/dev/public/listing" >Inventario</a>


                    <ul>
                        <!--<li><a class="dropdown-item" href="#">Sedanes</a></li>
                        <li><a class="dropdown-item" href="#">Camionetas</a></li>
                        <li><a class="dropdown-item" href="#">Pick-Ups</a></li>
                        <li><a class="dropdown-item" href="#">Buses</a></li>
                        <li><a class="dropdown-item" href="#">Camiones</a></li>-->
                        <?php while ($tipo = $tipo_carro->fetch_assoc()) { ?>
                            <a class="dropdown-item" href="https://automarketpanama.com/dev/public/listing?tipo_auto=<?php echo $tipo['CarType']; ?>&menu=1" style="color: black !important;"><?php echo $tipo['CarType']; ?></a>
                        <?php } ?>
                    </ul>


                </li>
                <li class="nav-item"><a class="nav-link" href="/dev/public/financiamiento" style="color: black !important;">Financiamiento</a></li>
                <li class="nav-item"><a class="nav-link" href="/dev/public/about" style="color: black !important;"> Nuestro Equipo</a></li>
                <!--
                <li class="nav-item "><a class="nav-link" href="#">Pages</a>

                    <ul>
                        <li><a class="dropdown-item" href="typography.html">Typography</a></li>

                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">News</a>

                    <ul>
                        <li><a class="dropdown-item" href="blog-main.html">Blog main</a></li>
                        <li><a class="dropdown-item" href="blog-post.html">Blog post</a></li>
                    </ul>
                </li> -->
                <li class="nav-item"><a class="nav-link" href="/dev/public/contact" style="color: black !important;">Contáctanos</a></li>
            </ul>

        </div>
        <div data-canvas="container">
            
            <header class="header">
           
                <div class="top-bar d-none d-xl-block">
                
                    <div class="container">
                        <div style="position: absolute; z-index:99; margin-left:-60px; margin-top:10px;"><a class="" href="https://automarketpanama.com/dev/public/"><img width="200" class="normal-logo" src="<?php echo BASEURL; ?>media/logo/LOGO-WEB-AUTOMARKET.png" alt="logo"></a></div>
                        <div class="row">
                            <div class="col offset-2">
                                <div class="top-bar__inner row justify-content-between align-items-center">
                                    <ul class="top-bar__list list-unstyled col">
                                        <!--<li class="top-bar__item"><a class="top-bar__link" href="mailto:ventas@automarketpan.com">ventas@automarketpan.com</a></li>-->
                                        <li class="top-bar__item">Contáctanos: +507 279-2789 | +507 6959-0953</li>
                                        <li class="top-bar__item">Horario de atención: Lunes a Sábado de 8:00 a.m. a 5:00 p.m.</li>
                                    </ul><a class="btn btn-primary btn-sm col-auto" href="https://automarketpanama.com/dev/public/listing" style="display:block; margin-right: -60px; "><i class="ic icon-list"></i> Ver Inventario</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-main">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-auto">
                                <a class="navbar-brand scroll" href="https://automarketpanama.com/dev/public/">
                                    <img width="200" class="normal-logo scroll-edit" src="<?php echo BASEURL; ?>media/logo/LOGO-WEB-AUTOMARKET.png" alt="logo">
                                    <?php /* <img width="200" class="normal-logo logo-principal" src="<?php echo BASEURL; ?>media/logo/LOGO-WEB-AUTOMARKET.png" alt="logo" > */ ?>
                                </a>
                            </div>
                            <div class="col-lg-auto col">
                                <div class="header-contacts d-none d-md-block d-lg-none d-xl-block"><!--<i class="ic text-primary"> <img width="30" style="margin-top:-20px;" src="<?php //echo BASEURL; ?>media/icons/phone.png" alt=""></i> <span class="header-contacts__inner">Contáctanos<a class="header-contacts__number" href="tel:+17553028549">+507 279-2789 | +507 6959-0953</a></span>--></div>
                                <button class="menu-mobile-button js-toggle-mobile-slidebar toggle-menu-button d-lg-none"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button>
                            </div>
                            <div class="col-lg d-none d-lg-block">
                                <nav class="navbar navbar-expand-md justify-content-end" id="nav" style="z-index: 999;">
                                    <ul class="yamm main-menu navbar-nav">
                                        <li class="nav-item active"><a class="nav-link" href="/dev/public/">Inicio<span class="sr-only"></span></a></li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" id="navbarDropdown2" href="/dev/public/listing" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inventario</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                                <a class="dropdown-item" href="https://automarketpanama.com/dev/public/listing">Todos</a>
                                            <?php while ($tipo = $tipo_carro2->fetch_assoc()) { ?>
                                                <a class="dropdown-item" href="https://automarketpanama.com/dev/public/listing?tipo_auto=<?php echo $tipo['CarType']; ?>&menu=1"><?php echo $tipo['CarType']; ?></a>
                                            <?php } ?>
                                                
                                            </div>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="/dev/public/financiamiento">Financiamiento</a></li>
                                        <li class="nav-item"><a class="nav-link" href="/dev/public/about">Nuestro Equipo</a></li>
                                        <li class="nav-item"><a class="nav-link" href="/dev/public/contact">Contáctanos</a></li>
                                    </ul><a id="todo_inventario" class="btn btn-primary btn-sm col-auto" href="https://automarketpanama.com/dev/public/listing" style=""><i class="ic icon-list"></i> Ver Inventario</a>
                                </nav>

                               
                                    <form id="form_buscado" class="form-buscador" method="get" action="https://automarketpanama.com/dev/public/listing">
                                        <input type="hidden" name="buscador" value="1">
                                        <div class="row">

                                            <div class="col-3">
                                                <div class="b-find__label"><span class="b-find__number">01</span> Seleccionar Marca</div>
                                                <div class="">
                                                    <select name="marca" class="form-control" onchange="buscar_modelo(this.value)">
                                                        <option value=''>Seleccionar</option>
                                                        <?php while ($marca = $todas_marcas->fetch_assoc()) { ?>
                                                            <option value="<?php echo $marca['Make']; ?>"><?php echo $marca['Make']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="b-find__label"><span class="b-find__number">02</span> Seleccionar Modelo</div>
                                                <div class="">
                                                    <select name="modelo" data-width="100%" class="form-control" id="marca_select" onchange="buscar_ubicacion(this.value)">
                                                        <option value=''>Seleccionar</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="b-find__label"><span class="b-find__number">03</span> Rango de Precio</div>
                                                <div class="">
                                                    <select name="precio_max" class="form-control">
                                                        <option value=''>Seleccionar</option>
                                                        <option value="9000">Max $9,000</option>
                                                        <option value="20000">Max $20,000</option>
                                                        <option value="30000">Max $30,000</option>
                                                        <option value="50000">Max $50,000</option>
                                                        <option value="70000">Max $70,000</option>
                                                        <option value="100000">Max $100,000</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="b-find__label"><span class="b-find__number">04</span> Ubicacion</div>
                                                <div class="">
                                                    <select name="ubicacion" class="form-control" id="ubicacion_select" >
                                                        <option value=''>Seleccionar</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="b-find__label"><span class="b-find__number"></span></div>
                                                <div class="">
                                                    <input type="submit" class="b-find__btn btn btn-link" style="width:70px;" value="">
                                                    <i class="fas fa-search" style="z-index:999; font-size:30px; margin-top:10px;"></i> <!-- Agrega el icono de lupa aquí -->
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </header>