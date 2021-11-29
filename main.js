
let map;
const tuba =  { lat: -28.467, lng: -49.0075 };
var lat;
var lng;



function initMap() {  
  map = new google.maps.Map(document.getElementById("map"), {
    center: tuba,
    zoom: 15,
    disableDefaultUI: true,
    zoomControl: true,
  });
  google.maps.event.addListener(map, 'click', function(event) {
    lat = event.latLng.lat();
    lng = event.latLng.lng();
    let latitude = document.getElementById("latitude");
    let longitude = document.getElementById("longitude")
    let container = document.getElementById("cadastro-container");
    if(container.style.display === 'none'){
      container.style.display = 'block'
    }else{
      container.style.display = 'none'
    }
    latitude.value = lat;
    longitude.value = lng;
  });
}

function consultar(){
  let container = document.getElementById("tbl_consulta");
  if(container.style.display === 'none'){
    container.style.display = 'block'
  }else{
    container.style.display = 'none'
  }
}



