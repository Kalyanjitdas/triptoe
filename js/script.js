// mapboxgl.accessToken = 'pk.eyJ1Ijoia2FseWFuaml0ZGFzIiwiYSI6ImNrbHpocXV2cTN1cG8yd3BtZTVlM3o3amsifQ.ADcRE-colRumClzYmL9d4Q';
 
// navigator.geolocation.getCurrentPosition(successLocation,
//  errorLocation,	{enableHighAccuracy: true})

// function successLocation(position) {
// 	console.log(position)
// 	setupMap([position.coords.longitude, position.coords.latitude]);
// }

// function errorLocation() {
// 	// setupMap([20.5937, 78.9629])
// }

// function setupMap(center){
// 	var map = new mapboxgl.Map({
//     container: 'map',
//     style: 'mapbox://styles/mapbox/streets-v11',
//     center: center,
//     zoom: 8
//   });
// map.addControl(new mapboxgl.NavigationControl());
// var directions = new MapboxDirections({
// 	accessToken: mapboxgl.accessToken
// })
// map.addControl(directions, "top-left")
// map.addControl(
// new mapboxgl.GeolocateControl({
// positionOptions: {
// enableHighAccuracy: true
// },
// trackUserLocation: true
// })
// );
// }

// ===============================try this code===================
mapboxgl.accessToken = 'pk.eyJ1Ijoia2FseWFuaml0ZGFzIiwiYSI6ImNrbHpocXV2cTN1cG8yd3BtZTVlM3o3amsifQ.ADcRE-colRumClzYmL9d4Q';
var map = new mapboxgl.Map({
container: 'map', // container id
style: 'mapbox://styles/mapbox/streets-v11',
center: [78.9629, 20.5937], // starting position
zoom: 5 // starting zoom
});
 
// Add geolocate control to the map.
// ====================find user location=================================
map.addControl(
new mapboxgl.GeolocateControl({
positionOptions: {
enableHighAccuracy: true
},
trackUserLocation: true
})
);

map.addControl(new mapboxgl.NavigationControl());
var directions = new MapboxDirections({
	accessToken: mapboxgl.accessToken
})
map.addControl(directions, "top-left")


 