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
            
            fetch('/devtest/ultimos/app/views/listing/search.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {

                document.querySelector("#autos_resul").innerHTML = data;
                
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
        document.getElementById('form_buscado').addEventListener('submit', function(event) {
            event.preventDefault(); 
            console.log('enviando ...');
            this.submit();
        });
    </script>

    </body>

</html>