function initialize(){
	var mapProp = {
	center: new google.maps.LatLng(-10,15),
	zoom:7,
	panControl:true,
	zoomControl:true,
	zoomControlOptions: {
	style:google.maps.ZoomControlStyle.DEFAULT
	},
	mapTypeControl:true,
	mapTypeControlOptions: {
	style:google.maps.MapTypeControlStyle.DEFAULT
},
	mapTypeId: google.maps.MapTypeId.HYBRID 
};

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
	position:new google.maps.LatLng(-9,13.23),
	animation:google.maps.Animation.BOUNCE
});

marker.setMap(map);

google.maps.event.addListener(marker,'click',function() {
	map.setZoom(9);
	map.setCenter(marker.getPosition());
});

google.maps.event.addListener(map,'center_changed',function() {
	window.setTimeout(function() {
	map.panTo(marker.getPosition());
	},9000); //I'll center after 6 sec.
});

var infowindow = new google.maps.InfoWindow({
	content:"Stolica Angola!"
});

google.maps.event.addListener(marker, 'click', function() {
	infowindow.open(map,marker);
});

}

function loadScript(){
	var script = document.createElement("script");
	script.type = "text/javascript";
	script.src = "http://maps.googleapis.com/maps/api/js?key=&sensor=true&callback=initialize";
	document.body.appendChild(script);
}

window.onload = loadScript;