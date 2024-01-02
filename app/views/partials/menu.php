        <!-- ==========================-->
        <!-- MOBILE MENU-->
        <!-- ==========================-->
        <div data-off-canvas="mobile-slidebar left overlay">
            <a class="navbar-brand scroll" href="home.html"><img width="200" class="scroll-logo" src="<?php echo BASEURL; ?>media/logo/LOGO-WEB-AUTOMARKET.png" alt="logo"></a>


            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="/automarket/public/">Inicio<span class="sr-only"></span></a></li>
                <li class="nav-item "><a class="btn btn-primary" href="https://automarketpanama.com/devtest/ultimos/public/listing">Inventario</a>


                    <ul>
                        <li><a class="dropdown-item" href="#">Sedanes</a></li>
                        <li><a class="dropdown-item" href="#">Camionetas</a></li>
                        <li><a class="dropdown-item" href="#">Pick-Ups</a></li>
                        <li><a class="dropdown-item" href="#">Buses</a></li>
                        <li><a class="dropdown-item" href="#">Camiones</a></li>
                    </ul>


                </li>
                <li class="nav-item"><a class="nav-link" href="/devtest/ultimos/public/about">Sobre Nosotros</a></li>
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
                <li class="nav-item"><a class="nav-link" href="/devtest/ultimos/public/contact">Contactanos</a></li>
            </ul>

        </div>
        <div data-canvas="container">
            
            <header class="header">
                <div class="top-bar d-none d-xl-block">
                    <div class="container">
                        <div class="row">
                            <div class="col offset-2">
                                <div class="top-bar__inner row justify-content-between align-items-center">
                                    <ul class="top-bar__list list-unstyled col">
                                        <li class="top-bar__item"><a class="top-bar__link" href="mailto:ventas@automarketpan.com">ventas@automarketpan.com</a></li>
                                        <li class="top-bar__item">Horario: Lunes a Sábado de 8:00 a.m. a 5:00 p.m.</li>
                                        <!--<li class="top-bar__item">Fairview Ave, El Monte, CA 91732</li>-->
                                    </ul><a class="btn btn-primary btn-sm col-auto" href="https://automarketpanama.com/devtest/ultimos/public/listing"><i class="ic icon-list"></i> Ver Inventario</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-main">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-auto">
                                <a class="navbar-brand scroll" href="home.html"><img width="200" class="normal-logo" src="<?php echo BASEURL; ?>media/logo/LOGO-WEB-AUTOMARKET.png" alt="logo"></a>
                            </div>
                            <div class="col-lg-auto col">
                                <div class="header-contacts d-none d-md-block d-lg-none d-xl-block"><i class="ic text-primary icon-call-in"></i><span class="header-contacts__inner">Llámanos!<a class="header-contacts__number" href="tel:+17553028549">+507 279-2789</a></span></div>
                                <!-- Mobile Trigger Start-->
                                <button class="menu-mobile-button js-toggle-mobile-slidebar toggle-menu-button d-lg-none"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button>
                                <!-- Mobile Trigger End-->
                            </div>
                            <div class="col-lg d-none d-lg-block">
                                <nav class="navbar navbar-expand-md justify-content-end" id="nav">
                                    <ul class="yamm main-menu navbar-nav">
                                        <li class="nav-item active"><a class="nav-link" href="/devtest/ultimos/public/">Inicio<span class="sr-only"></span></a></li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" id="navbarDropdown2" href="/devtest/ultimos/public/listing" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inventario</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                            <?php while ($tipo = $tipo_carro->fetch_assoc()) { ?>
                                                <a class="dropdown-item" href="https://automarketpanama.com/devtest/ultimos/public/listing?tipo_auto=<?php echo $tipo['CarType']; ?>&menu=1"><?php echo $tipo['CarType']; ?></a>
                                            <?php } ?>
                                            </div>
                                        </li>

                                        <li class="nav-item"><a class="nav-link" href="/devtest/ultimos/public/about">Sobre Nosotros</a></li>

                                        <!--<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdown1" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown1"><a class="dropdown-item" href="typography.html">Typography</a></div>
                                        </li>
                                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdown4" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown4"><a class="dropdown-item" href="blog-main.html">Blog main</a><a class="dropdown-item" href="blog-post.html">Blog post</a></div>
                                        </li> -->
                                        <li class="nav-item"><a class="nav-link" href="/devtest/ultimos/public/contact">Contactanos</a></li>
                                        
                                    </ul><a id="todo_inventario" class="btn btn-primary btn-sm col-auto" href="https://automarketpanama.com/devtest/ultimos/public/listing"><i class="ic icon-list"></i> Ver Inventario</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>