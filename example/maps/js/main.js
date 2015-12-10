(function(){
	'use strict';

	var map, content, google, infowindow;
	function initialize() {
		var mapOptions = {
	  	zoom: 8
		};
		map = new google.maps.Map(document.getElementById("content"),
	   	 mapOptions);
		}
	     if (window.navigator.geolocation) {
	        window.navigator.geolocation.getCurrentPosition(function(position) {
	        	var pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
	        	infowindow = new google.maps.InfoWindow({
	          	map: map,
	          	position: pos,
	          	content: 'Here!'
	        	});
	      	map.setCenter(pos);
	    	}, function() {
	      	handleNoGeolocation(true);
	    	});
  		} else {
		// Browser doesn't support Geolocation
		handleNoGeolocation(false);
}


function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    content = 'Error: The Geolocation service failed.';
  } else {
    content = 'Error: Your browser doesn\'t support geolocation.';
  }

  var options = {
    map: map,
    position: new google.maps.LatLng(60, 105),
    content: content
  };

  infowindow = new google.maps.InfoWindow(options);
  map.setCenter(options.position);
}

google.maps.event.addDomListener(window, 'load', initialize);
})();
