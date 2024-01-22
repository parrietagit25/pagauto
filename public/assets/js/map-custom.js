
/////////////////////////////////////////////////////////////////
// Map
/////////////////////////////////////////////////////////////////

/*
// When the window has finished loading create our google map below
          window.addEventListener('load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York

                    scrollwheel: false,


                    // How you would like to style the map.
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
                };

                // Get the HTML DOM element that will contain your map
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                var image = 'assets/media/general/map-marker.png';
                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.6700, -73.9400),
                    map: map,
                    icon: image,
                    draggable: true,
                    animation: google.maps.Animation.DROP
                });
                marker.addListener('click', toggleBounce);

                function toggleBounce() {
                  if (marker.getAnimation() !== null) {
                    marker.setAnimation(null);
                  } else {
                    marker.setAnimation(google.maps.Animation.BOUNCE);
                  }
                }
            }   */


function init() {
  initMap('mapTumbaMuerto', 9.0068, -79.5188, 'Automarket Tumba Muerto', 'https://automarketpanama.com/dev/public/assets/media/imaGoo/tumbamuerto.jpg', 'Sucursal de Tumba Muerto <br> Horario <br> Lunes a Sábado de 8:00 a.m. a 5:00 p.m. <br> Domingos de 8:00 a.m. a 12:00 m.d.');
  initMap('mapViaIsrael', 8.9870, -79.5197, 'Automarket Vía Israel', 'https://automarketpanama.com/dev/public/assets/media/imaGoo/viaizrrael.jpg', 'Sucursal de Vía Israel <br> Horario <br> Lunes a Sábado de 8:00 a.m. a 5:00 p.m. <br> Domingos de 8:00 a.m. a 12:00 m.d.');
  initMap('mapCostaVerde', 8.9145, -79.7226, 'Automarket Costa Verde', 'https://automarketpanama.com/dev/public/assets/media/imaGoo/costaverde.jpg', 'Sucursal de Costa Verde <br> Horario <br> Lunes a Sábado de 8:00 a.m. a 5:00 p.m. <br> Domingos de 8:00 a.m. a 12:00 m.d.');
  initMap('mapDavid', 8.4295, -82.4340, 'Automarket David', 'https://automarketpanama.com/dev/public/assets/media/imaGoo/david.jpg', 'Sucursal de David <br> Horario <br> Lunes a Sábado de 8:00 a.m. a 5:00 p.m. <br> Domingos de 8:00 a.m. a 12:00 m.d.');
}

function initMap(mapElementId, lat, lng, title, imageUrl, description) {
  var mapOptions = {
    zoom: 15, // Ajusta el zoom según necesites
    center: new google.maps.LatLng(lat, lng),
    scrollwheel: false
    // Aquí puedes agregar más opciones de mapa si es necesario
  };

  var mapElement = document.getElementById(mapElementId);
  var map = new google.maps.Map(mapElement, mapOptions);

  var marker = new google.maps.Marker({
    position: new google.maps.LatLng(lat, lng),
    map: map,
    title: title // Título del marcador (opcional)
    // Aquí puedes agregar más opciones de marcador si es necesario
  });

  var contentString = '<div id="content">' +
    '<h5>' + title + '</h5>' +
    '<img src="' + imageUrl + '" alt="Image" style="width:100%;max-width:300px;">' +
    '<p>' + description + '</p>' +
    '</div>';

  var infowindow = new google.maps.InfoWindow({
    content: contentString
  });

  infowindow.open(map, marker);

  marker.addListener('click', function () {
    infowindow.open(map, marker);
  });
}


window.addEventListener('load', init);
