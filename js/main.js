 function initMap() {
 	var element = document.getElementById('map');
 	var mapType = google.maps.MapTypeId.ROADMAP; // ROADMAP, SATELLITE , HYBRID , TERRAIN
 	var animationType = google.maps.Animation.BOUNCE
 	var windowMessage = "Butwal";

	// map options
	
	var positionlocation ={
		lat:27.6874,  // 27.6874, 83.4323
		lng:83.4323
	}
	
	var options= {
		center:positionlocation,
		zoom:10,
		mapTypeId:mapType,
	};
	
	// actual map
	map = new google.maps.Map(element, options);

	var marker = new google.maps.Marker({
        position: positionlocation,
        map: map,
        animation:animationType,
        draggable:true,
    });

	var infowindow = new google.maps.InfoWindow({
	  content:windowMessage
	  });

	
	infowindow.open(map,marker);

	
	 google.maps.event.addListener(map, 'click', function (e) {

	 	var latitute = e.latLng.lat();
	 	var longitude = e.latLng.lng();

	    document.getElementById('latitude').value = latitute;
	    document.getElementById('longitude').value = longitude;

	 	// var mylocation = ("Latitude: " + latitute + " \r\nLongitude: " + longitude);
		// alert(mylocation);
		// console.log(mylocation);

	 });
      

};