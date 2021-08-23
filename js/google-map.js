//google map
function initialize() {
  var myLatlng = new google.maps.LatLng(-36.8490272, 174.7586881);
  var mapOptions = {
    center: myLatlng,
    streetViewControl: false,
    draggable: false,
    scrollwheel: false,
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
          url: 'img/page--contact/spotlight-poi.png',
          labelOrigin: new google.maps.Point(70, 12)
      },
      label: {
          text: 'FEDERATION',
          color: 'red'
      },  
      animation: google.maps.Animation.DROP
  });

}

google.maps.event.addDomListener(window, 'load', initialize);

