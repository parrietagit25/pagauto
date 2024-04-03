    <!-- ++++++++++++-->
    <!-- MAIN SCRIPTS-->
    <!-- ++++++++++++-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Color scheme-->
    <script src="assets/plugins/switcher/js/dmss.js"></script>
    <!-- Select customization & Color scheme-->
    <script src="assets/libs/bootstrap-select.min.js"></script>
    <!-- Pop-up window-->
    <script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Headers scripts-->
    <script src="assets/plugins/headers/slidebar.js"></script>
    <script src="assets/plugins/headers/header.js"></script>
    <!-- Mail scripts-->
    <script src="assets/plugins/jqBootstrapValidation.js"></script>
    <script src="assets/plugins/contact_me.js"></script>
    <!-- Video player-->
    <script src="assets/plugins/flowplayer/flowplayer.min.js"></script>
    <!-- Filter and sorting images-->
    <script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/plugins/isotope/imagesLoaded.js"></script>
    <!-- Progress numbers-->
    <script src="assets/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="assets/plugins/rendro-easy-pie-chart/jquery.waypoints.min.js"></script>
    <!-- Animations-->
    <script src="assets/plugins/scrollreveal/scrollreveal.min.js"></script>
    <!-- Scale images-->
    <script src="assets/plugins/ofi.min.js"></script>
    <!-- Main slider-->
    <script src="assets/plugins/slider-pro/jquery.sliderPro.min.js"></script>
    <!--Sliders-->
    <script src="assets/plugins/slick/slick.js"></script>
    <!-- Maps customization-->
    <script src="assets/js/map-custom.js"></script>
     <!-- User map
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhTd-ZT5nzCNucY9AZUCspnXrw3votR34"></script>-->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBb-wAj4BAs9Fyiu0Gf9lf-PNF98K8fgw8&callback=init"></script>
    <!-- Slider number-->
    <script src="assets/plugins/noUiSlider/wNumb.js"></script>
    <script src="assets/plugins/noUiSlider/nouislider.min.js"></script>
    <!-- User customization-->
    <script src="assets/js/custom.js"></script>
    <script>window.pipedriveLeadboosterConfig = {base: 'leadbooster-chat.pipedrive.com',companyId: 2402302,playbookUuid: 'b016d2f4-cb8e-4b6c-bab8-9a98b82f71c2',version: 2};(function () {var w = window;if (w.LeadBooster) {console.warn('LeadBooster already exists');} else {w.LeadBooster = {q: [],on: function (n, h) {this.q.push({ t: 'o', n: n, h: h });},trigger: function (n) {this.q.push({ t: 't', n: n });},};}})();</script><script src="https://leadbooster-chat.pipedrive.com/assets/loader.js" async></script>
    <script>
        function checkIframeLoaded() {
            var iframe = document.getElementById('miIframe');
            if (iframe.contentWindow.document.body.innerHTML == "") {
                showDefaultImage();
            }
        }

        function showDefaultImage() {
            document.getElementById('miIframe').style.display = 'none';
            document.getElementById('imagenDefault').style.display = 'block';
        }
    </script>
    <script>
        document.getElementById('buscar').addEventListener('submit', function(e) {
            e.preventDefault();
            console.log('pasando');
            var formData = new FormData(this);
            
            fetch('/app/views/inventario/search.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {

                //document.querySelector("#autos_resul").innerHTML = data;
                document.querySelector("#autos_resul").innerHTML = '<div class="loader_fetch"></div>';

                setTimeout(() => {
                    document.querySelector("#autos_resul").innerHTML = data;
                    console.log(data);
                }, 2000);
                
                console.log(data);
            })
            .catch(error => console.error('Error:', error));
        });
    </script>
    <script>
        var urlCompleta = window.location.href;
        console.log("URL completa: " + urlCompleta);

        // Obtener solo la ruta
        var ruta = window.location.pathname;
        console.log("Ruta: " + ruta);
    </script>
    <script>
        
        var menuOption = document.getElementById('todo_inventario');
        menuOption.style.display="none";

        window.addEventListener('scroll', function() {
        var header = document.querySelector('.header');

            if (window.scrollY > 100) { // Ajusta este valor según tus necesidades
                header.classList.add('navbar-scrolling');
                menuOption.classList.add('active'); // Añade la clase 'active' o la que necesites para activar la opción del menú
                menuOption.style.display="block";
            } else {
                header.classList.remove('navbar-scrolling');
                menuOption.classList.remove('active'); // Remueve la clase 'active' de la opción del menú
                menuOption.style.display="none";
            }
        });
    </script>
    <script>
        document.getElementById('form_buscado_movil').addEventListener('submit', function(event) {
            event.preventDefault(); 
            console.log('enviando ...');
            this.submit();
        });
    </script>
    <script>
        document.getElementById('form_buscado').addEventListener('submit', function(event) {
            event.preventDefault(); 
            console.log('enviando ...');
            this.submit();
        });
    </script>
    <script>
        document.getElementById('correo_cliente').addEventListener('submit', function(event) {
            event.preventDefault(); 
            console.log('enviando ...');
            this.submit();
        });
    </script>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); 
            console.log('enviando ...');
            this.submit();
        });
    </script>
    <script>
        document.querySelectorAll('.b-brands__item').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                var marca = this.getAttribute('data-marca');
                var menu = this.getAttribute('data-menu');

                var formData = new FormData();
                formData.append('marca', marca);
                formData.append('menu', menu);

                fetch('/app/views/inventario/search.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    //document.querySelector("#autos_resul").innerHTML = data;
                    document.querySelector("#autos_resul").innerHTML = '<div class="loader_fetch"></div>';
                    setTimeout(() => {
                        document.querySelector("#autos_resul").innerHTML = data;
                        console.log(data);
                    }, 2000);
                })
                .catch(error => console.error('Error:', error));
            });
        });
    </script>
    <script>
        function buscar_modelo(x) {

            var modelo = x;

            var formData = new FormData();
                formData.append('modelo_form_principal', modelo);
            
            fetch('/app/views/inventario/search.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {

                document.querySelector("#marca_select").innerHTML = data;
                document.querySelector("#marca_select_movil").innerHTML = data;
                
                console.log(data);
            })
            .catch(error => console.error('Error:', error));
            
        }
    </script>
    <script>
        function buscar_ubicacion(x) {

            var modelo = x;

            var formData = new FormData();
                formData.append('ubicacion_form_principal', modelo);
            
            fetch('/app/views/inventario/search.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {

                document.querySelector("#ubicacion_select").innerHTML = data;
                document.querySelector("#ubicacion_select_movil").innerHTML = data;
                
                console.log(data);
            })
            .catch(error => console.error('Error:', error));
            
        }
    </script>
    <script>
        function checkLogoVisibility() {
            var logo = document.querySelector('.scroll-edit');
            var screenWidth = window.innerWidth;

            if (window.scrollY >= 50 && screenWidth <= 1200) {
                logo.style.display = "block";
            }else if(window.scrollY >= 50 && screenWidth > 1200) {
                logo.style.display = "block";
            }else if(window.scrollY < 50 && screenWidth <= 1200) {
                logo.style.display = "block";
            }else{
                logo.style.display = "none";
            }
        }

        window.onscroll = checkLogoVisibility;
        window.onresize = checkLogoVisibility;

        checkLogoVisibility();
        
        const selectedFilters = {}; 
        const filtroElements = document.querySelectorAll('.filtro');
        filtroElements.forEach(element => {
            element.addEventListener('click', function (event) {
                event.preventDefault();
                const categoria = this.getAttribute('data-categoria');
                const valor = this.getAttribute('data-valor');

                selectedFilters[categoria] = valor;

                var filtros = selectedFilters;

                var marca = "";
                var cate = "";
                var anio = "";
                var ubicacion = "";
                var precio = "";

                if (typeof filtros.marca !== 'undefined') {
                    marca = filtros.marca;
                }

                if (typeof filtros.categoria !== 'undefined') {
                    cate = filtros.categoria;
                }

                if (typeof filtros.anio !== 'undefined') {
                    anio = filtros.anio;
                }

                if (typeof filtros.ubicacion !== 'undefined') {
                    ubicacion = filtros.ubicacion;
                }

                if (typeof filtros.precio !== 'undefined') {
                    precio = filtros.precio;
                }

                console.log('pecio: ' + precio);

                //{marca: 'KIA', categoria: 'Comerciales', anio: '2022', ubicacion: 'Tumba Muerto', precio: '30000-59999'}

                var formData = new FormData();
                    formData.append('marca', marca);
                    formData.append('categoria', cate);
                    formData.append('anio', anio);
                    formData.append('ubicacion', ubicacion);
                    formData.append('precio', precio);
                    formData.append('filtros_form_principal', 1);

                fetch('/app/views/inventario/search.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('La solicitud fetch no fue exitosa');
                    }
                    return response.text();
                })
                .then(data => {
                    // Aquí puedes manejar la respuesta del servidor 

                    document.querySelector("#autos_resul").innerHTML = '<div class="loader_fetch"></div>';

                    setTimeout(() => {
                        document.querySelector("#autos_resul").innerHTML = data;
                        console.log(data);
                    }, 2000);
                    
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        });

    </script>
    <script>
            $(document).ready(function() {
                var registrosPorPagina = 9; 
                var $registros = $("#registros .registro");
                var totalRegistros = $registros.length;
                var totalPaginas = Math.ceil(totalRegistros / registrosPorPagina);
                var paginaActual = 1;
                var rangoPaginas = 5; // Número de páginas a mostrar

                function mostrarRegistros(pagina) {
                    var inicio = (pagina - 1) * registrosPorPagina;
                    var fin = inicio + registrosPorPagina;
                    $registros.hide().slice(inicio, fin).show();
                }

                function actualizarPaginador() {
                    var inicioRango = Math.max(paginaActual - Math.floor(rangoPaginas / 2), 1);
                    var finRango = Math.min(inicioRango + rangoPaginas - 1, totalPaginas);

                    // Ajustar el inicio del rango si estamos al final del paginador
                    if (finRango === totalPaginas) {
                        inicioRango = Math.max(finRango - rangoPaginas + 1, 1);
                    }

                    $("#paginador a").not("#anterior, #siguiente").remove(); // Eliminar los números existentes

                    for (var i = inicioRango; i <= finRango; i++) {
                        $("<a href='#' data-pagina='" + i + "'>" + i + "</a>").insertBefore("#siguiente");
                    }

                    $("#paginador a").removeClass("btn btn-primary");
                    $("#paginador a[data-pagina='" + paginaActual + "']").addClass("btn btn-primary");
                }

                $registros.hide();
                mostrarRegistros(paginaActual);
                actualizarPaginador();

                $("#paginador a").click(function() {
                    var nuevaPagina = $(this).data("pagina");

                    if (nuevaPagina === "prev") {
                        paginaActual = Math.max(paginaActual - 1, 1);
                    } else if (nuevaPagina === "next") {
                        paginaActual = Math.min(paginaActual + 1, totalPaginas);
                    } else {
                        paginaActual = parseInt(nuevaPagina);
                    }

                    mostrarRegistros(paginaActual);
                    actualizarPaginador();
                });
            });

        </script>
        <script>
            function mostrar_filtros() {
                var screenWidth = window.innerWidth;
                var filtrosListinDiv = document.getElementById("filtros_listin");
                
                // Verifica si la pantalla es menor a 767px
                if (screenWidth < 767) {
                    // Cambia el estado de display basado en el estado actual
                    if (filtrosListinDiv.style.display === "none" || filtrosListinDiv.style.display === "") {
                        filtrosListinDiv.style.display = "block";
                    } else {
                        filtrosListinDiv.style.display = "none";
                    }
                } else {
                    // Opcional: Manejar el caso para pantallas mayores a 767px si es necesario
                    console.log('Pantalla mayor a 767px, ajusta este comportamiento según sea necesario.');
                }
            }
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
            // Selecciona todos los encabezados del acordeón
            var accHeaders = document.querySelectorAll('#miAcordeon .card-header h4');

            accHeaders.forEach(function(header) {
                // Escucha el evento de abrir el acordeón
                header.addEventListener('click', function() {
                    var arrowSpan = this.querySelector('.arrow'); // Selecciona la flecha
                    var panel = document.querySelector(this.dataset.target); // Selecciona el panel asociado
                    if (panel.classList.contains('show')) {
                        // Si el panel ya está abierto, cambia la flecha hacia abajo
                        arrowSpan.textContent = '▼';
                    } else {
                        // Si el panel está cerrado, cambia la flecha hacia arriba
                        arrowSpan.textContent = '▲';
                    }
                });
            });

            // Ajustar las flechas basado en el estado inicial de cada panel
            document.querySelectorAll('#miAcordeon .collapse').forEach(function(panel) {
                    var arrowSpan = panel.previousElementSibling.querySelector('.arrow'); // Selecciona la flecha
                    if (panel.classList.contains('show')) {
                        arrowSpan.textContent = '▲'; // Cambia la flecha hacia arriba si el panel está abierto
                    } else {
                        arrowSpan.textContent = '▼'; // Cambia la flecha hacia abajo si el panel está cerrado
                    }
                });
            });

        </script>
        <script>
            $('.js-slider').slick({
                slidesToShow: 5,
                slidesToScroll: 5,
                infinite: true,
                responsive: [
                    { breakpoint: 1800, settings: { slidesToShow: 4, slidesToScroll: 4, arrows: true }},
                    { breakpoint: 1400, settings: { slidesToShow: 3, slidesToScroll: 1, arrows: true }},
                    { breakpoint: 1040, settings: { slidesToShow: 2, slidesToScroll: 1, arrows: true }},
                    { breakpoint: 767, settings: { slidesToShow: 1, slidesToScroll: 1, arrows: true }}
                ]
                });
        </script>
        <script>
            $(document).ready(function() {
                // Inicialización de la ventana emergente
                $('#open-popup').magnificPopup({
                    items: {
                        src: '#my-popup',
                        type: 'inline'
                    }
                });
            });
        </script>
    </body>
</html>