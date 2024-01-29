        <!-- ==========================-->
        <!-- MOBILE MENU-->
        <!-- ==========================-->
        <div data-off-canvas="mobile-slidebar left overlay">
            <a class="navbar-brand scroll" href="https://automarketpanama.com/dev/public/"><img width="200" class="scroll-logo" src="<?php echo BASEURL; ?>media/logo/LOGO-WEB-AUTOMARKET.png" alt="logo"></a>


            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="/automarket/dev/public/">Inicio<span class="sr-only"></span></a></li>
                <li class="nav-item "><a class="btn btn-primary" href="https://automarketpanama.com/dev/public/listing">Inventario</a>


                    <ul>
                        <?php while ($tipo = $tipo_carro->fetch_assoc()) { ?>
                            <a class="dropdown-item" href="https://automarketpanama.com/dev/public/listing?tipo_auto=<?php echo $tipo['CarType']; ?>&menu=1"><?php echo $tipo['CarType']; ?></a>
                        <?php } ?>
                    </ul>


                </li>
                <li class="nav-item"><a class="nav-link" href="/dev/public/financiamiento">Financiamiento</a></li>
                <li class="nav-item"><a class="nav-link" href="/dev/public/about">Nuestro Equipo</a></li>
                <li class="nav-item"><a class="nav-link" href="/dev/public/contact">Contáctanos</a></li>
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
                            </div>
                        </div>
                    </div>
                </div>
            </header>