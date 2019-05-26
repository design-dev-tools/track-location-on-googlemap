 function initMap() {

    
    var mapType = google.maps.MapTypeId.ROADMAP; // ROADMAP, SATELLITE , HYBRID , TERRAIN
    var animationType = google.maps.Animation.DROP;

    // map element for location
    var mapElement = document.getElementById('map');

    // map options for location
    for (var i = 0; i < markers.length; i++) {
        var data = markers[i];
        var Latlng = new google.maps.LatLng(data.lat, data.lng);
    }

    var mapOptions= {
        center:Latlng,
        zoom:10,
        mapTypeId:mapType,
    };
    
    // actual map
    map = new google.maps.Map(mapElement, mapOptions);

    var infoWindow = new google.maps.InfoWindow();
    var latlngbounds = new google.maps.LatLngBounds();
    var geocoder = geocoder = new google.maps.Geocoder();
    
    for (var i = 0; i < markers.length; i++) {
        var data = markers[i]
        var myLatlng = new google.maps.LatLng(data.lat, data.lng);
        var image = "img/iconHospital.png";
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            icon: image,
            title: data.district,
            draggable: true,
            animation: animationType
        });
        (function (marker, data) {
            google.maps.event.addListener(marker, "click", function (e) {
                infoWindow.setContent(data.district);
                infoWindow.open(map, marker);
            });
            google.maps.event.addListener(marker, "dragend", function (e) {
                var lat, lng, address;
                geocoder.geocode({ 'latLng': marker.getPosition() }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        lat = marker.getPosition().lat();
                        lng = marker.getPosition().lng();
                        address = results[0].formatted_address;

                        document.getElementById('latitude').value = lat;
                        document.getElementById('longitude').value = lng;

                        // alert("Latitude: " + lat + "\nLongitude: " + lng + "\nAddress: " + address);
                        
                    }
                });
            });
        })(marker, data);
        latlngbounds.extend(marker.position);
    }
  }