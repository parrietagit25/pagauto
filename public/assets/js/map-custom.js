function init() {
  initMap('mapTumbaMuerto', 9.0068, -79.5188, 'Automarket Tumba Muerto', 'https://automarketpanama.com/public/assets/media/imaGoo/tumbamuerto.jpg', 'Sucursal de Tumba Muerto <br> Horario <br> Lunes a Sábado de 8:00 a.m. a 5:00 p.m. <br> Domingos de 8:00 a.m. a 12:00 m.d.');
  initMap('mapViaIsrael', 8.9870, -79.5197, 'Automarket Vía Israel', 'https://automarketpanama.com/public/assets/media/imaGoo/viaizrrael.jpg', 'Sucursal de Vía Israel <br> Horario <br> Lunes a Sábado de 8:00 a.m. a 5:00 p.m. <br> Domingos de 8:00 a.m. a 12:00 m.d.');
  initMap('mapCostaVerde', 8.9145, -79.7226, 'Automarket Costa Verde', 'https://automarketpanama.com/public/assets/media/imaGoo/costaverde.jpg', 'Sucursal de Costa Verde <br> Horario <br> Lunes a Sábado de 8:00 a.m. a 5:00 p.m. <br> Domingos de 8:00 a.m. a 12:00 m.d.');
  initMap('mapDavid', 8.4295, -82.4340, 'Automarket David', 'https://automarketpanama.com/public/assets/media/imaGoo/david.jpg', 'Sucursal de David <br> Horario <br> Lunes a Sábado de 8:00 a.m. a 5:00 p.m. <br> Domingos de 8:00 a.m. a 12:00 m.d.');
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
