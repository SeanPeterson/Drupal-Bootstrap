$(document).ready(function() {
  $('#scroll-btn-1').click(function(){

    jQuery('html, body').stop().animate({
        scrollTop: jQuery("#about-1").offset().top - 200
    }, 500);

  });

  $('#scroll-btn-2').click(function(){

    jQuery('html, body').stop().animate({
        scrollTop: jQuery("#about-2").offset().top - 200
    }, 500);

  });

  $('#scroll-btn-3').click(function(){

    jQuery('html, body').stop().animate({
        scrollTop: jQuery("#about-3").offset().top - 200
    }, 500);

  });

  $('#scroll-btn-4').click(function(){

    jQuery('html, body').stop().animate({
        scrollTop: jQuery("#service").offset().top - 200
    }, 500);

  });

  $('#scroll-btn-5').click(function(){

    jQuery('html, body').stop().animate({
        scrollTop: jQuery("#client").offset().top - 200
    }, 500);

  });

  $('#scroll-btn-6').click(function(){

    jQuery('html, body').stop().animate({
        scrollTop: jQuery("#location").offset().top - 200
    }, 500);

  });

  $('#scroll-btn-7').click(function(){

    jQuery('html, body').stop().animate({
        scrollTop: jQuery("#contact").offset().top - 200
    }, 500);

  });

});

function initMap() {

  // Create a new StyledMapType object, passing it an array of styles,
        // and the name to be displayed on the map type control.
        var location = {lat: 51.524283, lng: -0.073886};

        var contentString = '<div class="googleMapContent">' +
                              '<p>Geek Label</p>' +
                              '<p>4th Floor</p>' +
                              '<p>27 - 33 Bethnal Green Road</p>' +
                              '<p>Shoreditch</p>' +
                              '<p>London</p>' +
                              '<p>E1 6LA</p>' +    
                            '</div>';

        var styledMapType = new google.maps.StyledMapType(
            [
              {
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#f5f5f5"
                  }
                ]
              },
              {
                "elementType": "labels.icon",
                "stylers": [
                  {
                    "visibility": "off"
                  }
                ]
              },
              {
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#616161"
                  }
                ]
              },
              {
                "elementType": "labels.text.stroke",
                "stylers": [
                  {
                    "color": "#f5f5f5"
                  }
                ]
              },
              {
                "featureType": "administrative.land_parcel",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#bdbdbd"
                  }
                ]
              },
              {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#eeeeee"
                  }
                ]
              },
              {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#757575"
                  }
                ]
              },
              {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#e5e5e5"
                  }
                ]
              },
              {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#9e9e9e"
                  }
                ]
              },
              {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#ffffff"
                  }
                ]
              },
              {
                "featureType": "road.arterial",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#757575"
                  }
                ]
              },
              {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#dadada"
                  }
                ]
              },
              {
                "featureType": "road.highway",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#616161"
                  }
                ]
              },
              {
                "featureType": "road.local",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#9e9e9e"
                  }
                ]
              },
              {
                "featureType": "transit.line",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#e5e5e5"
                  }
                ]
              },
              {
                "featureType": "transit.station",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#eeeeee"
                  }
                ]
              },
              {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#c9c9c9"
                  }
                ]
              },
              {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#9e9e9e"
                  }
                ]
              }
            ],
            {name: 'Styled Map'});

        // Create a map object, and include the MapTypeId to add
        // to the map type control.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: location,
          zoom: 16,
          mapTypeControlOptions: {
            mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                    'styled_map']
          }

        });

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });


      var image = 'sites/all/themes/Drupal-Bootstrap/assets/images/map-marker.png';
      var marker = new google.maps.Marker({
          position: location,
          map: map,
          icon: image,
          title: 'office location'
        });
  
        infowindow.open(map, marker);
     

        //Associate the styled map with the MapTypeId and set it to display.
        map.mapTypes.set('styled_map', styledMapType);
        map.setMapTypeId('styled_map');
} 