    var locations = [
      ['Telmo Deli <p><b>Descuento 15%</b></p> <p>Chacabuco 752 </p>',-34.6168133,-58.3758533, 5],  
      ['Good Coffee <p><b>Descuento 35%</b></p> <p>Ciudad de la Paz 1898</p>', -34.564625,-58.4565646, 4],
      ['Origen Cafe<p><b>Descuento 10%</b></p> <p>Humberto Primo 599</p>', -34.620679,-58.3752348, 3],
      //['Santal <p><b>Descuento 10%</b></p> <p> Virrey del Pino 2235</p>', -34.5652639,-58.4527318, 2],
      ['La Panotteca <p><b>Descuento 15%</b></p> <p> Zapiola 2115</p>', -34.5658051,-58.4656836, 1],
        
       
    ];


    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 11,
      center: new google.maps.LatLng(-34.586814,-58.428149),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) { 
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
