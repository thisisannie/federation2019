//google map
function initialize() {
  var myLatlng = new google.maps.LatLng(-36.849042341045305, 174.75861654537422);
  var mapOptions = {
    center: myLatlng,
    streetViewControl: true,
    draggable: true,
    scrollwheel: true,
    zoomControl: true,
    zoom: 17,
    disableDefaultUI: true
  };
  var map = new google.maps.Map(document.getElementById("map-canvas"),
      mapOptions);
  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Federation',
      icon: {
          url: 'img/contact/spotlight-poi.png',
          labelOrigin: new google.maps.Point(70, 12)
      },
      label: {
          text: 'Federation',
          color: 'red'
      },  
      animation: google.maps.Animation.DROP
  });

}

window.addEventListener('load', initialize);

